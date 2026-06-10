<?php $__env->startSection('meta_description', 'PDF tips and best practices from Pdfixed — exports, redaction, accessibility, and dependable document hygiene.'); ?>

<?php $__env->startSection('content'); ?>
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Blog</h1>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                Short, practical notes you can apply immediately — written for people who ship PDFs under real deadlines.
            </p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 lg:grid-cols-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <article class="flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-slate-50 dark:border-white/10 dark:bg-white/5">
                        <div class="p-8">
                            <div class="text-xs font-semibold uppercase tracking-wide text-pdf-cyan"><?php echo e($post['date']); ?></div>
                            <h2 class="mt-3 text-lg font-semibold text-slate-900 dark:text-white"><?php echo e($post['title']); ?></h2>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300"><?php echo e($post['excerpt']); ?></p>
                        </div>
                        <div class="mt-auto border-t border-slate-200 p-6 dark:border-white/10">
                            <a href="<?php echo e(route('blog.show', $post['slug'])); ?>" class="text-sm font-semibold text-pdf-cyan hover:underline">Read more →</a>
                        </div>
                    </article>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pdfforge', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/pages/blog.blade.php ENDPATH**/ ?>