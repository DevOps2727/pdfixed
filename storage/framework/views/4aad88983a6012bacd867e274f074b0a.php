<?php $__env->startSection('meta_description', 'Frequently asked questions about Pdfixed — turnaround, tooling, confidentiality, accessibility, and pricing.'); ?>

<?php $__env->startSection('content'); ?>
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">FAQ</h1>
            <p class="mt-4 text-lg leading-relaxed text-slate-600 dark:text-slate-300">Straight answers — if you do not see your case, ask on the contact page.</p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="space-y-3" x-data="{ open: <?php echo \Illuminate\Support\Js::from(null)->toHtml() ?> }">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 dark:border-white/10 dark:bg-white/5">
                        <button
                            type="button"
                            class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white"
                            @click="open === <?php echo e($index); ?> ? open = null : open = <?php echo e($index); ?>"
                            :aria-expanded="(open === <?php echo e($index); ?>).toString()"
                            aria-controls="faq-panel-<?php echo e($index); ?>"
                        >
                            <span><?php echo e($faq['q']); ?></span>
                            <span class="text-pdf-cyan" x-show="open !== <?php echo e($index); ?>" x-cloak>+</span>
                            <span class="text-pdf-cyan" x-show="open === <?php echo e($index); ?>" x-cloak>−</span>
                        </button>
                        <div
                            id="faq-panel-<?php echo e($index); ?>"
                            class="px-5 pb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-300"
                            x-show="open === <?php echo e($index); ?>"
                            x-transition
                            x-cloak
                        >
                            <?php echo e($faq['a']); ?>

                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pdfforge', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/pages/faq.blade.php ENDPATH**/ ?>