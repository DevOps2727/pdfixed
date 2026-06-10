@extends('layouts.pdfforge')

@php
    /** @var array{title:string,excerpt:string,slug:string,date:string} $post */
@endphp

@section('meta_description', $post['excerpt'])

@push('meta')
    <meta property="og:title" content="{{ $post['title'] }} — Pdfixed">
    <meta property="og:description" content="{{ $post['excerpt'] }}">
@endpush

@section('content')
    <article class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <a href="{{ route('blog') }}" class="text-sm font-semibold text-pdf-cyan hover:underline">← Back to blog</a>
            <p class="mt-6 text-xs font-semibold uppercase tracking-[0.22em] text-pdf-cyan">{{ $post['date'] }}</p>
            <h1 class="mt-3 text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">{{ $post['title'] }}</h1>
            <p class="mt-5 text-lg leading-relaxed text-slate-600 dark:text-slate-300">{{ $post['excerpt'] }}</p>

            <div class="mt-10 space-y-5 text-sm leading-relaxed text-slate-700 dark:text-slate-200">
                <p>
                    PDF quality is rarely about one checkbox — it is the sum of export settings, font embedding, compression choices, and how your layout maps to real pages.
                    The articles on this blog highlight the “gotchas” I see most often in production: missing glyphs, soft masks that explode file size, and accessibility tags that look fine until a screen reader hits them.
                </p>
                <p>
                    If you want this guidance applied directly to your files, send a sample through the contact form. I will tell you what is worth fixing now versus what can wait — and I will keep the recommendations practical.
                </p>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-white">What to do next</h2>
                <ul class="list-disc space-y-2 pl-5">
                    <li>Export with fonts embedded (subset when possible).</li>
                    <li>Flatten only when you truly must — know what you are losing.</li>
                    <li>Run an accessibility check early, not five minutes before submission.</li>
                </ul>
            </div>

            <div class="mt-12 rounded-3xl border border-slate-200 bg-slate-50 p-8 dark:border-white/10 dark:bg-white/5">
                <div class="text-sm font-semibold text-slate-900 dark:text-white">Want hands-on help?</div>
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">Upload a file and describe the outcome you need — I will reply with next steps.</p>
                <a class="mt-5 inline-flex rounded-xl bg-pdf-cyan px-5 py-2.5 text-sm font-semibold text-white transition hover:brightness-110" href="{{ route('contact') }}">
                    Contact Pdfixed
                </a>
            </div>
        </div>
    </article>
@endsection
