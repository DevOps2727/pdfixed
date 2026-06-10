<?php

test('renders Pdfixed marketing pages', function (string $path) {
    $this->get($path)->assertSuccessful();
})->with([
    '/',
    '/about',
    '/services',
    '/portfolio',
    '/pricing',
    '/reviews',
    '/faq',
    '/blog',
    '/contact',
]);

test('renders blog articles for known slugs', function (string $slug) {
    $this->get('/blog/'.$slug)->assertSuccessful();
})->with([
    'sharp-pdf-exports-from-design-tools',
    'redaction-checklist-for-sensitive-pdfs',
    'pdf-accessibility-tags-reading-order',
]);

test('returns not found for unknown blog slugs', function () {
    $this->get('/blog/does-not-exist')->assertNotFound();
});

test('home includes client stories slider', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('data-home-cool-slider', false)
        ->assertSee('Client stories', false);
});
