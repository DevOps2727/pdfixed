import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.querySelectorAll('[data-pdf-hero]').forEach((root) => {
    if (!(root instanceof HTMLElement)) {
        return;
    }

    void import('./pdfforge-hero-three.js').then(({ initPdfForgeHero }) => {
        initPdfForgeHero(root);
    });
});
