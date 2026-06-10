@extends('layouts.pdfforge')

@section('meta_description', 'PDF tips and best practices from Pdfixed — exports, redaction, accessibility, and dependable document hygiene.')

@section('content')
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Blog</h1>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                Short, practical notes you can apply immediately — written for people who ship PDFs under real deadlines.
            </p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-slate-50 dark:border-white/10 dark:bg-white/5">
                        <div class="p-8">
                            <div class="text-xs font-semibold uppercase tracking-wide text-pdf-cyan">{{ $post['date'] }}</div>
                            <h2 class="mt-3 text-lg font-semibold text-slate-900 dark:text-white">{{ $post['title'] }}</h2>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">{{ $post['excerpt'] }}</p>
                        </div>
                        <div class="mt-auto border-t border-slate-200 p-6 dark:border-white/10">
                            <a href="{{ route('blog.show', $post['slug']) }}" class="text-sm font-semibold text-pdf-cyan hover:underline">Read more →</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
