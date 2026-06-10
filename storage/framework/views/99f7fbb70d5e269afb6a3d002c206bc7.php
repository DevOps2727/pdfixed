<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'icon' => '📄',
    'title',
    'description',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'icon' => '📄',
    'title',
    'description',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div
    class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-pdf-cyan/35 hover:shadow-lg dark:border-white/10 dark:bg-white/5 dark:hover:border-pdf-cyan/35"
>
    <div class="text-2xl"><?php echo e($icon); ?></div>
    <h3 class="mt-3 text-base font-semibold text-slate-900 dark:text-white"><?php echo e($title); ?></h3>
    <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-300"><?php echo e($description); ?></p>
    <div
        class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-pdf-cyan/60 to-transparent opacity-0 transition group-hover:opacity-100"
    ></div>
</div>
<?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/components/service-card.blade.php ENDPATH**/ ?>