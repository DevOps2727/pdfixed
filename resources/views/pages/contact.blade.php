@extends('layouts.pdfforge')

@section('meta_description', 'Contact Pdfixed — send your PDF, requirements, and timeline. Karachi-friendly phone and WhatsApp details included.')

@section('content')
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Contact</h1>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                Tell me what you need edited, merged, tagged, or polished — attach the PDF if you can. I typically reply same business day (Karachi time).
            </p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-12 sm:px-6 lg:px-8">
            <div class="lg:col-span-5">
                <h2 class="text-lg font-semibold text-slate-900 dark:text-white">Direct channels</h2>
                <dl class="mt-4 space-y-3 text-sm text-slate-600 dark:text-slate-300">
                    <div>
                        <dt class="font-semibold text-slate-900 dark:text-white">Email</dt>
                        <dd><a class="text-pdf-cyan hover:underline" href="mailto:hello@pdfixed.test">hello@pdfixed.test</a></dd>
                    </div>
                    <div>
                        <dt class="font-semibold text-slate-900 dark:text-white">Phone</dt>
                        <dd><a class="text-pdf-cyan hover:underline" href="tel:+923001234567">+92 300 1234567</a> (Karachi-friendly hours)</dd>
                    </div>
                    <div>
                        <dt class="font-semibold text-slate-900 dark:text-white">WhatsApp</dt>
                        <dd><a class="text-pdf-cyan hover:underline" href="https://wa.me/923001234567" rel="noopener noreferrer">+92 300 1234567</a></dd>
                    </div>
                </dl>

                <div class="mt-8 rounded-3xl border border-slate-200 bg-slate-50 p-6 text-sm leading-relaxed text-slate-600 dark:border-white/10 dark:bg-white/5 dark:text-slate-300">
                    For large uploads, email may be easier — the form supports PDFs up to <span class="font-semibold text-slate-900 dark:text-white">12 MB</span>.
                </div>
            </div>

            <div class="lg:col-span-7">
                @if (session('contact_success'))
                    <div class="mb-6 rounded-2xl border border-emerald-300/40 bg-emerald-50 p-4 text-sm text-emerald-900 dark:border-emerald-400/20 dark:bg-emerald-400/10 dark:text-emerald-100">
                        {{ session('contact_success') }}
                    </div>
                @endif

                <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data" class="space-y-5">
                    @csrf

                    <div>
                        <label class="text-sm font-semibold text-slate-900 dark:text-white" for="name">Name</label>
                        <input
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            autocomplete="name"
                            class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none ring-pdf-cyan/30 focus:ring-4 dark:border-white/10 dark:bg-black/20 dark:text-white"
                            required
                        >
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-semibold text-slate-900 dark:text-white" for="email">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none ring-pdf-cyan/30 focus:ring-4 dark:border-white/10 dark:bg-black/20 dark:text-white"
                            required
                        >
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-semibold text-slate-900 dark:text-white" for="message">Message</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none ring-pdf-cyan/30 focus:ring-4 dark:border-white/10 dark:bg-black/20 dark:text-white"
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-semibold text-slate-900 dark:text-white" for="pdf">PDF upload (optional)</label>
                        <input
                            id="pdf"
                            name="pdf"
                            type="file"
                            accept="application/pdf"
                            class="mt-2 block w-full text-sm text-slate-600 file:mr-4 file:rounded-lg file:border-0 file:bg-pdf-cyan file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white hover:file:brightness-110 dark:text-slate-300"
                        >
                        @error('pdf')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="inline-flex w-full items-center justify-center rounded-xl bg-pdf-cyan px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-red-600/20 transition hover:brightness-110 sm:w-auto"
                    >
                        Send message
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
