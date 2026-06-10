@extends('layouts.pdfforge')

@section('meta_description', 'Page not found — Pdfixed.')

@section('content')
    <section class="bg-gradient-to-b from-white to-slate-50 py-24 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-3xl px-4 text-center sm:px-6 lg:px-8">
            <p class="text-sm font-semibold text-pdf-cyan">404</p>
            <h1 class="mt-3 text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">This page drifted out of alignment.</h1>
            <p class="mt-4 text-slate-600 dark:text-slate-300">The link may be outdated, or the page was moved. Let’s get you back to something useful.</p>
            <div class="mt-10 flex flex-col justify-center gap-3 sm:flex-row">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-xl bg-pdf-cyan px-6 py-3 text-sm font-semibold text-white transition hover:brightness-110">
                    Go home
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:border-pdf-cyan/40 dark:border-white/10 dark:bg-transparent dark:text-white dark:hover:border-pdf-cyan/35">
                    Contact support
                </a>
            </div>
        </div>
    </section>
@endsection
