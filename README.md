# Pdfixed (Laravel)

Production-ready marketing site for **Pdfixed** — Blade + Tailwind + Alpine + Three.js (code-split), with a working contact form (validation, optional PDF upload, outbound mail).

> This repository is a Laravel application (currently **Laravel 13**) using **Tailwind CSS v4** (via `@tailwindcss/vite`). If you specifically need Laravel 11 + Tailwind v3, use the “greenfield” commands below and port the `resources/views`, `resources/js`, `routes/web.php`, and `app/` pieces across.

## Requirements

- PHP **8.3+** with **pdo_pgsql** (PostgreSQL)
- PostgreSQL **14+** (recommended)
- Composer
- Node.js **20+** (recommended) and npm

> PHPUnit is configured to use **SQLite in-memory** for the test suite so you do not need Postgres running to execute tests. The running app uses **PostgreSQL** per `.env.example`.

## Quick start (this repo)

```bash
composer install
cp .env.example .env
php artisan key:generate

# Create the database (example for psql CLI)
createdb pdfixed   # or: psql -c "CREATE DATABASE pdfixed;"

# Edit .env: set DB_DATABASE, DB_USERNAME, DB_PASSWORD to match your Postgres user
php artisan migrate

npm install
npm run build
php artisan serve
```

### Contact form mail

The contact form emails `CONTACT_MAIL_TO` (falls back to `MAIL_FROM_ADDRESS`).

Recommended local settings:

```env
APP_NAME="Pdfixed"
MAIL_MAILER=log
CONTACT_MAIL_TO="you@yourdomain.com"
```

## Greenfield setup commands (reference)

If you are creating a brand new Laravel app from scratch and want a similar stack:

```bash
composer create-project laravel/laravel pdfforge-pro
cd pdfforge-pro

# Install the usual frontend toolchain (exact packages vary by Laravel version)
npm install -D vite laravel-vite-plugin tailwindcss @tailwindcss/vite postcss autoprefixer
npm install alpinejs three

# If you are on Tailwind v3 instead of v4, you’d typically add PostCSS tailwind config files.
php artisan install:api # optional — not used here
```

Then copy the Pdfixed-specific files from this repository:

- `resources/views/layouts/pdfforge.blade.php`
- `resources/views/components/*` (navbar/footer/hero/cards)
- `resources/views/pages/*` + `resources/views/errors/404.blade.php`
- `resources/js/app.js`, `resources/js/pdfforge-hero-three.js`
- `routes/web.php` (merge carefully with your auth routes)
- `app/Http/Controllers/*`, `app/Http/Requests/*`, `app/Mail/*`, `app/Support/PdfforgeContent.php`
- `config/pdfforge.php`, `public/images/pdfforge/*`

## Tests

```bash
php artisan test --compact tests/Feature/PdfforgeMarketingPagesTest.php tests/Feature/ContactFormTest.php
```

## Development assets

```bash
npm run dev
```

If you change PHP code style:

```bash
vendor/bin/pint --dirty
