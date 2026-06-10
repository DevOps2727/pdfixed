<x-mail::message>
# New contact — Pdfixed

**Name:** {{ $contactName }}

**Email:** {{ $contactEmail }}

---

{{ $contactMessage }}

@if ($attachmentStoragePath)
An attached PDF was included with this message.
@endif

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
