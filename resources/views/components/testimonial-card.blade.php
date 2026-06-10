@props([
    'quote',
    'name',
    'role',
    'rating' => 5,
])

<article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-white/5">
    <div class="flex items-center gap-1 text-pdf-cyan" aria-hidden="true">
        @for ($i = 0; $i < $rating; $i++)
            <span>★</span>
        @endfor
    </div>
    <p class="mt-4 text-sm leading-relaxed text-slate-700 dark:text-slate-200">“{{ $quote }}”</p>
    <div class="mt-5 text-sm">
        <div class="font-semibold text-slate-900 dark:text-white">{{ $name }}</div>
        <div class="text-slate-500 dark:text-slate-400">{{ $role }}</div>
    </div>
</article>
