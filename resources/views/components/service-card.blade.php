@props([
    'icon' => '📄',
    'title',
    'description',
])

<div
    class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-pdf-cyan/35 hover:shadow-lg dark:border-white/10 dark:bg-white/5 dark:hover:border-pdf-cyan/35"
>
    <div class="text-2xl">{{ $icon }}</div>
    <h3 class="mt-3 text-base font-semibold text-slate-900 dark:text-white">{{ $title }}</h3>
    <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-300">{{ $description }}</p>
    <div
        class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-pdf-cyan/60 to-transparent opacity-0 transition group-hover:opacity-100"
    ></div>
</div>
