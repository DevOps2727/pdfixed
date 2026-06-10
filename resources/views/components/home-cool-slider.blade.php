{{--
    Full-width testimonial slider: swipe / drag, auto-advance, glass arrows, progress rail.
    Expects $slides as an array of { quote, name, role, rating }.
--}}
@props([
    /** @var list<array{quote: string, name: string, role: string, rating: int}> $slides */
    'slides',
])

<section
    class="relative overflow-hidden border-y border-slate-200 bg-gradient-to-b from-slate-900 via-pdf-navy-deep to-black py-20 text-white dark:border-white/10"
    aria-labelledby="home-slider-heading"
    data-home-cool-slider
    x-data="{
        slides: @js($slides),
        active: 0,
        dragging: false,
        startX: 0,
        deltaX: 0,
        timer: null,
        go(i) {
            const n = this.slides.length;
            this.active = ((i % n) + n) % n;
        },
        next() {
            this.go(this.active + 1);
            this.restart();
        },
        prev() {
            this.go(this.active - 1);
            this.restart();
        },
        restart() {
            window.clearInterval(this.timer);
            this.timer = window.setInterval(() => {
                this.go(this.active + 1);
            }, 6500);
        },
        onPointerDown(e) {
            if (!e.isPrimary) return;
            this.dragging = true;
            this.startX = e.clientX;
            this.deltaX = 0;
            e.currentTarget?.setPointerCapture?.(e.pointerId);
        },
        onPointerMove(e) {
            if (!this.dragging || !e.isPrimary) return;
            this.deltaX = e.clientX - this.startX;
        },
        onPointerUp(e) {
            if (!this.dragging) return;
            this.dragging = false;
            if (this.deltaX < -48) this.next();
            else if (this.deltaX > 48) this.prev();
            this.deltaX = 0;
            this.restart();
        },
    }"
    x-init="restart()"
    @keydown.window.right="next()"
    @keydown.window.left="prev()"
>
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -left-32 top-0 h-96 w-96 rounded-full bg-pdf-cyan/15 blur-3xl"></div>
        <div class="absolute -right-20 bottom-0 h-80 w-80 rounded-full bg-red-600/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-end">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-pdf-cyan/90">Client stories</p>
                <h2 id="home-slider-heading" class="mt-2 text-3xl font-semibold tracking-tight text-white">Proof you can feel</h2>
                <p class="mt-3 max-w-xl text-sm leading-relaxed text-slate-300">
                    Swipe or drag on desktop — real outcomes from teams who ship serious PDFs.
                </p>
            </div>
            <div class="flex items-center gap-2">
                <button
                    type="button"
                    class="inline-flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-white backdrop-blur transition hover:border-pdf-cyan/50 hover:bg-white/10"
                    @click="prev()"
                    aria-label="Previous slide"
                >
                    <span class="text-lg" aria-hidden="true">‹</span>
                </button>
                <button
                    type="button"
                    class="inline-flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-white backdrop-blur transition hover:border-pdf-cyan/50 hover:bg-white/10"
                    @click="next()"
                    aria-label="Next slide"
                >
                    <span class="text-lg" aria-hidden="true">›</span>
                </button>
            </div>
        </div>

        <div
            class="relative mt-12 touch-pan-y select-none overflow-hidden rounded-3xl border border-white/10 bg-white/[0.04] shadow-2xl ring-1 ring-white/5"
            @pointerdown="onPointerDown($event)"
            @pointermove.window="onPointerMove($event)"
            @pointerup.window="onPointerUp($event)"
            @pointercancel.window="onPointerUp($event)"
        >
            <div
                class="flex will-change-transform"
                :class="dragging ? '' : 'transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]'"
                :style="`transform: translateX(calc(-${active * 100}% + ${deltaX}px))`"
            >
                <template x-for="(s, idx) in slides" :key="idx">
                    <article class="w-full shrink-0 px-8 py-12 sm:px-12 sm:py-14">
                        <div class="mx-auto max-w-3xl">
                            <div class="flex gap-1 text-pdf-cyan" aria-hidden="true">
                                <template x-for="(_, si) in Array.from({ length: s.rating })" :key="'star-' + idx + '-' + si">
                                    <span>★</span>
                                </template>
                            </div>
                            <p class="mt-6 text-pretty text-xl font-medium leading-relaxed text-white sm:text-2xl" x-text="`“${s.quote}”`"></p>
                            <div class="mt-8 flex items-center gap-4 border-t border-white/10 pt-6">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-pdf-cyan to-red-600 text-sm font-bold text-white shadow-lg shadow-red-900/40"
                                    x-text="s.name.charAt(0)"
                                ></div>
                                <div>
                                    <div class="font-semibold text-white" x-text="s.name"></div>
                                    <div class="text-sm text-slate-400" x-text="s.role"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </template>
            </div>
        </div>

        <div class="mt-8 flex flex-col items-center justify-between gap-4 sm:flex-row">
            <div class="flex h-1.5 w-full max-w-md overflow-hidden rounded-full bg-white/10 sm:mx-0">
                <template x-for="(_, di) in slides" :key="di">
                    <button
                        type="button"
                        class="h-full flex-1 border-r border-black/20 transition first:rounded-l-full last:rounded-r-full last:border-r-0"
                        :class="active === di ? 'bg-pdf-cyan' : 'bg-transparent hover:bg-white/10'"
                        @click="go(di); restart()"
                        :aria-label="'Go to slide ' + (di + 1)"
                        :aria-current="active === di ? 'true' : 'false'"
                    ></button>
                </template>
            </div>
            <a
                href="{{ route('reviews') }}"
                class="shrink-0 text-sm font-semibold text-pdf-cyan hover:underline"
            >
                All reviews →
            </a>
        </div>
    </div>
</section>
