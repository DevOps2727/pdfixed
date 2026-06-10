{{--
    Three.js PDF hero — full-width canvas with overlay headline + CTAs.
    Canvas initializes via resources/js/pdfforge-hero-three.js when [data-pdf-hero] is present.
--}}
<section class="relative isolate overflow-hidden bg-gradient-to-b from-pdf-navy via-pdf-navy-deep to-pdf-navy-deep">
    <div class="pointer-events-none absolute inset-0 opacity-60">
        <div class="absolute -left-24 -top-24 h-72 w-72 rounded-full bg-pdf-cyan/25 blur-3xl"></div>
        <div class="absolute -right-24 top-40 h-80 w-80 rounded-full bg-red-400/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 pb-16 pt-10 sm:px-6 lg:px-8 lg:pb-20 lg:pt-14">
        <div class="grid items-center gap-10 lg:grid-cols-12 lg:gap-8">
            <div class="relative z-20 lg:col-span-5">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-pdf-cyan/90">Pdfixed</p>
                <h1 class="mt-3 text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                    Professional PDF Editing
                </h1>
                <p class="mt-4 max-w-xl text-pretty text-base leading-relaxed text-slate-200/90 sm:text-lg">
                    I am a professional PDF editor — precise, fast, and flawless results every time.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center rounded-xl bg-pdf-cyan px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-red-600/20 transition hover:brightness-110"
                    >
                        Get Your PDF Edited Now
                    </a>
                    <a
                        href="{{ route('reviews') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white backdrop-blur transition hover:border-pdf-cyan/40 hover:bg-white/10"
                    >
                        Read client reviews
                    </a>
                </div>

                <p class="mt-6 text-xs text-slate-300/80">
                    Tip: click the 3D scene to replay the “instant polish” animation (auto-plays once on load).
                </p>
            </div>

            <div class="relative lg:col-span-7">
                <div
                    class="group relative aspect-[16/11] w-full overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-white/5 to-white/0 shadow-2xl ring-1 ring-white/10"
                    data-pdf-hero
                >
                    <canvas class="absolute inset-0 block h-full w-full"></canvas>

                    {{-- Reduced-motion graceful fallback (set via data attribute in JS) --}}
                    <div
                        class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(0,245,255,0.22),transparent_55%),radial-gradient(circle_at_80%_60%,rgba(34,211,238,0.12),transparent_55%)] opacity-0 transition-opacity duration-300 group-data-[hero-reduced=true]:opacity-100"
                        aria-hidden="true"
                    ></div>
                </div>
            </div>
        </div>
    </div>
</section>
