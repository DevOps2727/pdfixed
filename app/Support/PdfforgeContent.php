<?php

namespace App\Support;

/**
 * Central place for marketing copy and structured content.
 * Edit arrays here to update the site without touching Blade logic.
 */
final class PdfforgeContent
{
    /**
     * @return list<array{title: string, excerpt: string, slug: string, date: string}>
     */
    public static function blogPosts(): array
    {
        return [
            [
                'title' => 'How to keep PDFs sharp when exporting from design tools',
                'excerpt' => 'Color profiles, font embedding, and raster settings that prevent “muddy” output for client-ready deliverables.',
                'slug' => 'sharp-pdf-exports-from-design-tools',
                'date' => 'Mar 18, 2026',
            ],
            [
                'title' => 'Redaction that actually holds up: a practical checklist',
                'excerpt' => 'Why highlight-and-export fails, and the layered approach professionals use for sensitive documents.',
                'slug' => 'redaction-checklist-for-sensitive-pdfs',
                'date' => 'Mar 2, 2026',
            ],
            [
                'title' => 'Accessibility in PDFs: tags, reading order, and common audit failures',
                'excerpt' => 'A concise roadmap to WCAG-aligned PDFs—what to fix first, and how to verify with Acrobat’s accessibility tools.',
                'slug' => 'pdf-accessibility-tags-reading-order',
                'date' => 'Feb 9, 2026',
            ],
        ];
    }

    /**
     * @return list<array{q: string, a: string}>
     */
    public static function faqs(): array
    {
        return [
            [
                'q' => 'How fast can you turn around a standard edit?',
                'a' => 'Most single-document edits (text, images, merge/split) are delivered within 24–48 hours depending on complexity. Rush slots are available when booked in advance.',
            ],
            [
                'q' => 'Do you sign NDAs for confidential files?',
                'a' => 'Yes. I routinely work under NDA for legal, finance, and healthcare-adjacent materials. Your files are handled on encrypted storage and deleted per agreement.',
            ],
            [
                'q' => 'Which tools do you use?',
                'a' => 'Adobe Acrobat Pro is my primary suite, complemented by PDFelement, OCR engines, and custom scripts for repetitive tasks. I pick the best tool for the job.',
            ],
            [
                'q' => 'Can you match existing branding exactly?',
                'a' => 'Yes—fonts, spacing, color values, and vector logos can be matched precisely when source assets or style references are provided.',
            ],
            [
                'q' => 'What file types can you convert to PDF?',
                'a' => 'Word, PowerPoint, Excel, InDesign packages, images (PNG/JPEG/TIFF), and scanned paper via OCR. Ask if your format is uncommon.',
            ],
            [
                'q' => 'How does pricing work for ongoing work?',
                'a' => 'Retainers and enterprise agreements bundle predictable monthly volume with priority turnaround and a dedicated channel for requests.',
            ],
        ];
    }

    /**
     * @return list<array{name: string, role: string, quote: string, rating: int}>
     */
    public static function testimonials(): array
    {
        return [
            ['name' => 'Ayesha Malik', 'role' => 'Operations Lead, Crescent Logistics (Karachi)', 'quote' => 'Turnaround was absurdly fast. Our scanned contracts came back clean, searchable, and perfectly aligned.', 'rating' => 5],
            ['name' => 'Daniel Ortiz', 'role' => 'General Counsel, Northline Capital', 'quote' => 'Redactions were done properly—not cosmetic highlights. Exactly what we needed for disclosure.', 'rating' => 5],
            ['name' => 'Priya N.', 'role' => 'Independent Publisher', 'quote' => 'Print-ready PDFs with embedded fonts and crisp vectors. Zero surprises at the printer.', 'rating' => 5],
            ['name' => 'James Whitaker', 'role' => 'Product Marketing, Helio SaaS', 'quote' => 'We shipped a polished one-pager overnight. The attention to micro-spacing is obvious.', 'rating' => 5],
            ['name' => 'Sana F.', 'role' => 'Architectural Studio Director', 'quote' => 'Large drawing sets merged and bookmarked. Saved our team half a day on every submission.', 'rating' => 5],
            ['name' => 'Elena Rossi', 'role' => 'HR Director, EU Remote Co.', 'quote' => 'Accessible forms and tagged structure passed our vendor audit on the first try.', 'rating' => 5],
            ['name' => 'Marcus Lee', 'role' => 'Tax Advisor', 'quote' => 'Sensitive client packs handled discreetly. Communication was clear and professional throughout.', 'rating' => 5],
            ['name' => 'Hina T.', 'role' => 'EdTech Program Manager', 'quote' => 'OCR + cleanup on 400+ pages with consistent headings. Flawless for our LMS import.', 'rating' => 5],
            ['name' => 'Oliver Grant', 'role' => 'Real Estate Broker', 'quote' => 'Flyers and listing sheets look premium. Small edits never break the layout.', 'rating' => 5],
            ['name' => 'Rachel Kim', 'role' => 'Design Agency Owner', 'quote' => 'Our client edits go straight to Pdfixed now. It is like having a production desk on call.', 'rating' => 5],
        ];
    }

    /**
     * @return list<array{id: string, title: string, before: string, after: string, alt_before: string, alt_after: string}>
     */
    public static function portfolioItems(): array
    {
        return [
            [
                'id' => 'annual-report',
                'title' => 'Annual report — layout & color correction',
                'before' => '/images/pdfforge/portfolio-before-1.svg',
                'after' => '/images/pdfforge/portfolio-after-1.svg',
                'alt_before' => 'Before: skewed blocks and muted colors on a sample PDF cover',
                'alt_after' => 'After: aligned grid, crisp typography, and balanced brand colors',
            ],
            [
                'id' => 'legal-bundle',
                'title' => 'Legal bundle — redaction & bookmarks',
                'before' => '/images/pdfforge/portfolio-before-2.svg',
                'after' => '/images/pdfforge/portfolio-after-2.svg',
                'alt_before' => 'Before: messy highlight-style marks and missing navigation',
                'alt_after' => 'After: proper redaction bars and structured bookmarks panel',
            ],
            [
                'id' => 'proposal-deck',
                'title' => 'Client proposal — image swap & polish',
                'before' => '/images/pdfforge/portfolio-before-3.svg',
                'after' => '/images/pdfforge/portfolio-after-3.svg',
                'alt_before' => 'Before: low-resolution hero image and inconsistent margins',
                'alt_after' => 'After: sharp hero visual and consistent margins throughout',
            ],
            [
                'id' => 'forms-pack',
                'title' => 'HR forms — fields & accessibility',
                'before' => '/images/pdfforge/portfolio-before-4.svg',
                'after' => '/images/pdfforge/portfolio-after-4.svg',
                'alt_before' => 'Before: untagged fields and unclear tab order',
                'alt_after' => 'After: tagged fields, tooltips, and logical reading order',
            ],
        ];
    }
}
