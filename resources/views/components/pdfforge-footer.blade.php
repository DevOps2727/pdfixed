<footer class="border-t border-slate-200 bg-slate-50 dark:border-white/10 dark:bg-black/20">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-3">
            <div>
                <div class="text-sm font-semibold text-slate-900 dark:text-white">Pdfixed</div>
                <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                    Professional PDF editing for teams that can’t afford sloppy output — precise, fast, and flawless.
                </p>
            </div>

            <div>
                <div class="text-sm font-semibold text-slate-900 dark:text-white">Explore</div>
                <ul class="mt-3 space-y-2 text-sm">
                    @foreach ([
                        ['Services', route('services')],
                        ['Reviews', route('reviews')],
                        ['Pricing', route('pricing')],
                        ['Blog', route('blog')],
                    ] as [$label, $href])
                        <li>
                            <a href="{{ $href }}" class="text-slate-600 hover:text-pdf-cyan dark:text-slate-300">{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <div class="text-sm font-semibold text-slate-900 dark:text-white">Contact</div>
                <ul class="mt-3 space-y-2 text-sm text-slate-600 dark:text-slate-300">
                    <li><span class="text-slate-500 dark:text-slate-400">Email:</span> hello@pdfixed.test</li>
                    <li><span class="text-slate-500 dark:text-slate-400">Phone:</span> +92 300 1234567</li>
                    <li><span class="text-slate-500 dark:text-slate-400">WhatsApp:</span> +92 300 1234567 (Karachi)</li>
                </ul>
            </div>
        </div>

        <div class="mt-10 flex flex-col gap-3 border-t border-slate-200 pt-8 text-xs text-slate-500 dark:border-white/10 dark:text-slate-400 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ now()->year }} Pdfixed. All rights reserved.</p>
            <p class="text-slate-400">Built with Laravel, Tailwind, Alpine, and Three.js.</p>
        </div>
    </div>
</footer>
