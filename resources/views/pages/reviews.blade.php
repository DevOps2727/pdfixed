@extends('layouts.pdfforge')

@section('meta_description', 'Client reviews for Pdfixed — five-star outcomes across legal, operations, marketing, and publishing PDF work.')

@section('content')
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Reviews</h1>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                A sample of recent feedback — names and contexts are realistic placeholders you can personalize.
            </p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($testimonials as $t)
                    <x-testimonial-card :quote="$t['quote']" :name="$t['name']" :role="$t['role']" :rating="$t['rating']" />
                @endforeach
            </div>
        </div>
    </section>
@endsection
