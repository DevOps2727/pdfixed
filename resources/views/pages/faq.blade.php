@extends('layouts.pdfforge')

@section('meta_description', 'Frequently asked questions about Pdfixed — turnaround, tooling, confidentiality, accessibility, and pricing.')

@section('content')
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">FAQ</h1>
            <p class="mt-4 text-lg leading-relaxed text-slate-600 dark:text-slate-300">Straight answers — if you do not see your case, ask on the contact page.</p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="space-y-3" x-data="{ open: @js(null) }">
                @foreach ($faqs as $index => $faq)
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 dark:border-white/10 dark:bg-white/5">
                        <button
                            type="button"
                            class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white"
                            @click="open === {{ $index }} ? open = null : open = {{ $index }}"
                            :aria-expanded="(open === {{ $index }}).toString()"
                            aria-controls="faq-panel-{{ $index }}"
                        >
                            <span>{{ $faq['q'] }}</span>
                            <span class="text-pdf-cyan" x-show="open !== {{ $index }}" x-cloak>+</span>
                            <span class="text-pdf-cyan" x-show="open === {{ $index }}" x-cloak>−</span>
                        </button>
                        <div
                            id="faq-panel-{{ $index }}"
                            class="px-5 pb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-300"
                            x-show="open === {{ $index }}"
                            x-transition
                            x-cloak
                        >
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
