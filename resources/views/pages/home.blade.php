@extends('layouts.pdfforge')

@section('meta_description', 'Pdfixed delivers professional PDF editing: typography, images, OCR, redaction, accessibility, and print-ready finishing — fast, precise, and reliable.')

@section('content')
    <x-three-js-pdf-hero />

    <section class="border-b border-slate-200 bg-white py-10 dark:border-white/10 dark:bg-pdf-navy">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['10+ years', 'Production-grade PDF workflows'],
                    ['NDA-friendly', 'Confidential handling by default'],
                    ['Global clients', 'Remote delivery, clear milestones'],
                    ['Tooling', 'Acrobat Pro + specialized utilities'],
                ] as [$kicker, $text])
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 dark:border-white/10 dark:bg-white/5">
                        <div class="text-sm font-semibold text-pdf-cyan">{{ $kicker }}</div>
                        <div class="mt-2 text-sm text-slate-600 dark:text-slate-300">{{ $text }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-16 dark:bg-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-semibold tracking-tight text-slate-900 dark:text-white">Services built for real deliverables</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-300">
                    From one-off fixes to recurring production, you get clean structure, consistent branding, and files that behave everywhere.
                </p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <x-service-card
                    icon="✍️"
                    title="Text & formatting"
                    description="Typography fixes, reflow, paragraph styles, and consistent headings without breaking your layout."
                />
                <x-service-card
                    icon="🖼️"
                    title="Image editing & replacement"
                    description="Swap visuals, sharpen scans, correct color, and keep vectors crisp for print and screen."
                />
                <x-service-card
                    icon="🧩"
                    title="Merge / split / compress"
                    description="Smart assembly, logical page order, optimized sizes, and predictable output for email + upload limits."
                />
                <x-service-card
                    icon="🛡️"
                    title="Redaction & security"
                    description="True redaction (not fake highlights), permissions, sanitization, and clean metadata handling."
                />
                <x-service-card
                    icon="📝"
                    title="Forms & fields"
                    description="Field creation, tab order, calculations, and validation-friendly structures for real users."
                />
                <x-service-card
                    icon="✅"
                    title="Accessibility & compliance"
                    description="Tags, reading order, alt text guidance, and checks that align with common audit expectations."
                />
            </div>

            <div class="mt-10">
                <a
                    href="{{ route('services') }}"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-pdf-cyan hover:underline"
                >
                    Explore the full services list →
                </a>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-semibold tracking-tight text-slate-900 dark:text-white">How it works</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-300">A simple process designed for speed and zero ambiguity.</p>
            </div>

            <ol class="mt-10 grid gap-6 lg:grid-cols-4">
                @foreach ([
                    ['1', 'Send the file', 'Upload via the contact form (or email) with notes on what “perfect” means for you.'],
                    ['2', 'Quick scope', 'You get a clear turnaround estimate, pricing band, and any clarifying questions—no jargon.'],
                    ['3', 'Edit & proof', 'I produce the edited PDF, verify links/bookmarks/tags where relevant, and sanity-check output.'],
                    ['4', 'Delivery', 'You receive the final PDF plus any alternate exports you requested (PDF/A, compressed, etc.).'],
                ] as [$step, $title, $desc])
                    <li class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-white/10 dark:bg-white/5">
                        <div class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-pdf-cyan text-sm font-bold text-white">{{ $step }}</div>
                        <div class="mt-4 text-base font-semibold text-slate-900 dark:text-white">{{ $title }}</div>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-300">{{ $desc }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <x-home-cool-slider :slides="$testimonials" />

    <section class="relative overflow-hidden bg-gradient-to-br from-pdf-navy via-pdf-navy-deep to-black py-16">
        <div class="pointer-events-none absolute inset-0 opacity-50">
            <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-pdf-cyan/20 blur-3xl"></div>
        </div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-semibold tracking-tight text-white">Ready for a flawless PDF?</h2>
                <p class="mt-3 text-slate-200/90">
                    Tell me what you need fixed, merged, tagged, redacted, or polished — I’ll reply with a crisp plan and timeline.
                </p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-xl bg-pdf-cyan px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-red-600/20 transition hover:brightness-110">
                        Get Your PDF Edited Now
                    </a>
                    <a href="{{ route('pricing') }}" class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white backdrop-blur transition hover:border-pdf-cyan/40 hover:bg-white/10">
                        View pricing
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
