<?php

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

test('validates required contact fields', function () {
    $this->from(route('contact'))
        ->post(route('contact.store'), [])
        ->assertRedirect(route('contact'))
        ->assertSessionHasErrors(['name', 'email', 'message']);
});

test('submits contact form and sends mail', function () {
    Mail::fake();
    Storage::fake('local');

    $pdf = UploadedFile::fake()->create('sample.pdf', 120, 'application/pdf');

    $this->from(route('contact'))
        ->post(route('contact.store'), [
            'name' => 'Ayesha Malik',
            'email' => 'ayesha@example.com',
            'message' => 'Please clean up a scanned contract bundle for our board packet.',
            'pdf' => $pdf,
        ])
        ->assertRedirect(route('contact'))
        ->assertSessionHas('contact_success');

    Mail::assertSent(ContactFormSubmitted::class, function (ContactFormSubmitted $mail): bool {
        return $mail->contactName === 'Ayesha Malik'
            && $mail->contactEmail === 'ayesha@example.com'
            && str_contains($mail->contactMessage, 'scanned contract')
            && $mail->attachmentStoragePath !== null;
    });

    expect(Storage::disk('local')->allFiles('contact-submissions'))->not->toBeEmpty();
});
