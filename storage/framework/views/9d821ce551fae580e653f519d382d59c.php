<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="h-full scroll-smooth dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Pdfixed — professional PDF editing: precise text, images, OCR, redaction, accessibility, and print-ready finishing.'); ?>">
    <meta name="theme-color" content="#b91c1c">

    <meta property="og:site_name" content="Pdfixed">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', ($title ?? 'Pdfixed').' — '.config('app.name')); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', 'Professional PDF editing with precise, fast, flawless delivery.'); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('twitter_title', ($title ?? 'Pdfixed')); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('twitter_description', 'Professional PDF editing — precise, fast, and flawless results every time.'); ?>">

    <?php echo $__env->yieldPushContent('meta'); ?>

    <title><?php echo e(filled($title ?? null) ? $title.' — Pdfixed' : 'Pdfixed — Professional PDF Editing'); ?></title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700" rel="stylesheet" />

    <script>
        try {
            if (localStorage.getItem('pf-theme') === 'light') {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
            }
        } catch (e) {}
    </script>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body
    class="min-h-screen bg-white text-slate-900 antialiased selection:bg-pdf-cyan/30 selection:text-slate-900 dark:bg-pdf-navy-deep dark:text-slate-100 dark:selection:bg-pdf-cyan/25 dark:selection:text-white"
    x-data="{
        mobileOpen: false,
        toggleTheme() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem(
                'pf-theme',
                document.documentElement.classList.contains('dark') ? 'dark' : 'light',
            );
        },
    }"
    @keydown.window.escape="mobileOpen = false"
>
    <?php if (isset($component)) { $__componentOriginal0ac90cdeff6602d25177c5f92a8b3b13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ac90cdeff6602d25177c5f92a8b3b13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pdfforge-navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pdfforge-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ac90cdeff6602d25177c5f92a8b3b13)): ?>
<?php $attributes = $__attributesOriginal0ac90cdeff6602d25177c5f92a8b3b13; ?>
<?php unset($__attributesOriginal0ac90cdeff6602d25177c5f92a8b3b13); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ac90cdeff6602d25177c5f92a8b3b13)): ?>
<?php $component = $__componentOriginal0ac90cdeff6602d25177c5f92a8b3b13; ?>
<?php unset($__componentOriginal0ac90cdeff6602d25177c5f92a8b3b13); ?>
<?php endif; ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if (isset($component)) { $__componentOriginal3f905ed6fc1398646cc302907992c266 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f905ed6fc1398646cc302907992c266 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pdfforge-footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pdfforge-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f905ed6fc1398646cc302907992c266)): ?>
<?php $attributes = $__attributesOriginal3f905ed6fc1398646cc302907992c266; ?>
<?php unset($__attributesOriginal3f905ed6fc1398646cc302907992c266); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f905ed6fc1398646cc302907992c266)): ?>
<?php $component = $__componentOriginal3f905ed6fc1398646cc302907992c266; ?>
<?php unset($__componentOriginal3f905ed6fc1398646cc302907992c266); ?>
<?php endif; ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/layouts/pdfforge.blade.php ENDPATH**/ ?>