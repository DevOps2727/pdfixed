<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $attachmentStoragePath = null;
        if ($request->hasFile('pdf')) {
            $attachmentStoragePath = $request->file('pdf')->store('contact-submissions', 'local');
        }

        $recipient = (string) config('pdfforge.contact_recipient');

        Mail::to($recipient)->send(new ContactFormSubmitted(
            contactName: $validated['name'],
            contactEmail: $validated['email'],
            contactMessage: $validated['message'],
            attachmentStoragePath: $attachmentStoragePath,
        ));

        return redirect()
            ->route('contact')
            ->with('contact_success', __('Your message was sent. I will reply shortly.'));
    }
}
