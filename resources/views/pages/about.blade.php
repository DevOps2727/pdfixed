@extends('layouts.pdfforge')

@section('meta_description', 'Meet the editor behind Pdfixed — experience, tooling, and a process built for dependable PDF delivery.')

@section('content')
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-pdf-cyan">About</p>
            <h1 class="mt-3 text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Precision is a habit, not a feature.</h1>
            <p class="mt-5 text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                Pdfixed is a dedicated PDF production desk for teams and individuals who care how their documents look, behave, and survive scrutiny.
            </p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-4xl space-y-10 px-4 text-sm leading-relaxed text-slate-700 dark:text-slate-200 sm:px-6 lg:px-8">
            <div>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">My story</h2>
                <p class="mt-3">
                    I started as the person everyone forwarded “quick PDF fixes” to — except good PDF work is never quick by accident. It is structure, typography discipline,
                    color science, and an obsessive attention to what happens when a file leaves your hands: printing, archiving, accessibility checks, mobile viewing, and client trust.
                </p>
                <p class="mt-4">
                    Today, I partner with operators, legal teams, marketers, and founders who want a single reliable editor — someone who can take messy inputs and return polished,
                    predictable PDFs without drama.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">Tools I use (professionally)</h2>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-slate-600 dark:text-slate-300">
                    <li><span class="font-semibold text-slate-900 dark:text-white">Adobe Acrobat Pro</span> — advanced editing, preflight, accessibility, redaction, compare documents</li>
                    <li><span class="font-semibold text-slate-900 dark:text-white">PDFelement / Wondershare toolchain</span> — fast batch workflows and pragmatic OCR cleanup</li>
                    <li><span class="font-semibold text-slate-900 dark:text-white">Design exports</span> — InDesign packaging awareness, font embedding discipline, and color-managed handoff</li>
                    <li><span class="font-semibold text-slate-900 dark:text-white">Custom utilities</span> — scripted checks for repetitive tasks (bookmarks, link hygiene, metadata cleanup)</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">Skills you can count on</h2>
                <div class="mt-4 grid gap-4 sm:grid-cols-2">
                    @foreach ([
                        'Typography & layout restoration',
                        'Raster + vector image handling',
                        'OCR, deskew, and noise control',
                        'Redaction that removes underlying content',
                        'Tagged PDFs & logical reading order',
                        'Forms, calculations, and signatures readiness',
                    ] as $skill)
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4 text-slate-700 dark:border-white/10 dark:bg-white/5 dark:text-slate-200">
                            {{ $skill }}
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-pdf-navy to-pdf-navy-deep p-8 text-white dark:border-white/10">
                <h2 class="text-xl font-semibold">Let’s work together</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-200/90">
                    If you want a partner who treats PDFs like a craft — not a checkbox — send the file and your ideal outcome. I’ll respond with a clear plan.
                </p>
                <a href="{{ route('contact') }}" class="mt-6 inline-flex rounded-xl bg-pdf-cyan px-5 py-2.5 text-sm font-semibold text-white transition hover:brightness-110">
                    Contact me
                </a>
            </div>
        </div>
    </section>
@endsection
