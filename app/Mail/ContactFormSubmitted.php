<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $contactName,
        public string $contactEmail,
        public string $contactMessage,
        public ?string $attachmentStoragePath = null,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Pdfixed contact: '.$this->contactName,
            replyTo: [
                new Address($this->contactEmail, $this->contactName),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact-form',
        );
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        if ($this->attachmentStoragePath === null) {
            return [];
        }

        return [
            Attachment::fromStorageDisk('local', $this->attachmentStoragePath)
                ->as('client-upload.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
