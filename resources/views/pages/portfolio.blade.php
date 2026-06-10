@extends('layouts.pdfforge')

@section('meta_description', 'Before and after PDF transformations — layout cleanup, redaction, accessibility, and print-ready finishing.')

@section('content')
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Portfolio</h1>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                Placeholder previews that mimic messy drafts vs clean finals — click any card to zoom.
            </p>
        </div>
    </section>

    <section
        class="bg-white py-16 dark:bg-pdf-navy"
        x-data="{
            open: false,
            title: '',
            beforeSrc: '',
            afterSrc: '',
            openModal(payload) {
                this.title = payload.title;
                this.beforeSrc = payload.beforeSrc;
                this.afterSrc = payload.afterSrc;
                this.open = true;
                document.body.classList.add('overflow-hidden');
            },
            closeModal() {
                this.open = false;
                document.body.classList.remove('overflow-hidden');
            },
        }"
        @keydown.window.escape="closeModal()"
    >
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach ($items as $item)
                    <article id="{{ $item['id'] }}" class="overflow-hidden rounded-3xl border border-slate-200 bg-slate-50 shadow-sm dark:border-white/10 dark:bg-white/5">
                        <button
                            type="button"
                            class="group block w-full text-left"
                            @click='openModal(@json(['title' => $item['title'], 'beforeSrc' => $item['before'], 'afterSrc' => $item['after']]))'
                        >
                            <div class="grid gap-0 md:grid-cols-2">
                                <div class="relative">
                                    <img src="{{ $item['before'] }}" alt="{{ $item['alt_before'] }}" class="h-64 w-full object-cover md:h-72" loading="lazy">
                                    <span class="absolute left-3 top-3 rounded-full bg-black/60 px-3 py-1 text-xs font-semibold text-white backdrop-blur">Before</span>
                                </div>
                                <div class="relative">
                                    <img src="{{ $item['after'] }}" alt="{{ $item['alt_after'] }}" class="h-64 w-full object-cover md:h-72" loading="lazy">
                                    <span class="absolute left-3 top-3 rounded-full bg-pdf-cyan/90 px-3 py-1 text-xs font-semibold text-white">After</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="text-base font-semibold text-slate-900 group-hover:text-pdf-cyan dark:text-white">{{ $item['title'] }}</div>
                                <div class="mt-2 text-sm text-slate-500 dark:text-slate-400">Click to enlarge</div>
                            </div>
                        </button>
                    </article>
                @endforeach
            </div>
        </div>

        <div
            class="fixed inset-0 z-[60] flex items-center justify-center bg-black/70 p-4 backdrop-blur-sm"
            x-show="open"
            x-cloak
            x-transition.opacity
            @click.self="closeModal()"
            role="dialog"
            aria-modal="true"
        >
            <div class="relative w-full max-w-5xl overflow-hidden rounded-3xl border border-white/10 bg-pdf-navy-deep shadow-2xl" @click.stop>
                <div class="flex items-center justify-between gap-4 border-b border-white/10 px-5 py-4">
                    <div class="text-sm font-semibold text-white" x-text="title"></div>
                    <button type="button" class="rounded-lg px-3 py-2 text-sm text-slate-200 hover:bg-white/10" @click="closeModal()">
                        Close
                    </button>
                </div>
                <div class="grid gap-0 md:grid-cols-2">
                    <div class="border-b border-white/10 md:border-b-0 md:border-r">
                        <div class="px-5 py-3 text-xs font-semibold uppercase tracking-wide text-pdf-cyan">Before</div>
                        <img class="max-h-[70vh] w-full object-contain" :src="beforeSrc" alt="Before preview">
                    </div>
                    <div>
                        <div class="px-5 py-3 text-xs font-semibold uppercase tracking-wide text-pdf-cyan">After</div>
                        <img class="max-h-[70vh] w-full object-contain" :src="afterSrc" alt="After preview">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
