{{-- Sticky marketing navbar with Alpine-powered mobile menu + theme toggle --}}
<header class="sticky top-0 z-50 border-b border-slate-200/70 bg-white/80 backdrop-blur-md dark:border-white/10 dark:bg-pdf-navy/75">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}" class="group inline-flex items-center gap-2">
            <span
                class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-pdf-cyan text-sm font-bold text-white shadow-sm ring-1 ring-red-600/25"
            >
                P
            </span>
            <span class="text-sm font-semibold tracking-tight text-slate-900 dark:text-white">
                Pdfi<span class="text-pdf-cyan">xed</span>
            </span>
        </a>

        <nav class="hidden items-center gap-1 lg:flex" aria-label="Primary">
            @foreach ([
                ['About', route('about')],
                ['Services', route('services')],
                ['Pricing', route('pricing')],
                ['Reviews', route('reviews')],
                ['FAQ', route('faq')],
                ['Blog', route('blog')],
            ] as [$label, $href])
                <a
                    href="{{ $href }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-white/5 dark:hover:text-white"
                >
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-2">
            <button
                type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-700 transition hover:border-pdf-cyan/40 hover:text-slate-900 dark:border-white/10 dark:text-slate-200 dark:hover:border-pdf-cyan/35 dark:hover:text-white"
                @click="toggleTheme()"
                aria-label="Toggle color theme"
            >
                <span class="hidden dark:inline">☀︎</span>
                <span class="inline dark:hidden">☾</span>
            </button>

            <a
                href="{{ route('contact') }}"
                class="hidden rounded-lg bg-pdf-cyan px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:brightness-110 sm:inline-flex"
            >
                Get a quote
            </a>

            <button
                type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-800 lg:hidden dark:border-white/10 dark:text-white"
                @click="mobileOpen = !mobileOpen"
                :aria-expanded="mobileOpen.toString()"
                aria-controls="pf-mobile-nav"
                aria-label="Open menu"
            >
                <span x-show="!mobileOpen" x-cloak>☰</span>
                <span x-show="mobileOpen" x-cloak>✕</span>
            </button>
        </div>
    </div>

    <div
        id="pf-mobile-nav"
        class="border-t border-slate-200 bg-white lg:hidden dark:border-white/10 dark:bg-pdf-navy"
        x-show="mobileOpen"
        x-cloak
        x-transition
    >
        <div class="mx-auto max-w-7xl space-y-1 px-4 py-3 sm:px-6">
            @foreach ([
                ['Home', route('home')],
                ['About', route('about')],
                ['Services', route('services')],
                ['Pricing', route('pricing')],
                ['Reviews', route('reviews')],
                ['FAQ', route('faq')],
                ['Blog', route('blog')],
                ['Contact', route('contact')],
            ] as [$label, $href])
                <a
                    href="{{ $href }}"
                    class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-200 dark:hover:bg-white/5"
                    @click="mobileOpen = false"
                >
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</header>
