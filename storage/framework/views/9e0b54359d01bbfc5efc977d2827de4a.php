<?php $__env->startSection('meta_description', 'Client reviews for Pdfixed — five-star outcomes across legal, operations, marketing, and publishing PDF work.'); ?>

<?php $__env->startSection('content'); ?>
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Reviews</h1>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                A sample of recent feedback — names and contexts are realistic placeholders you can personalize.
            </p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal6426b16f7e43cdd8260215c3f2dbf890 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6426b16f7e43cdd8260215c3f2dbf890 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.testimonial-card','data' => ['quote' => $t['quote'],'name' => $t['name'],'role' => $t['role'],'rating' => $t['rating']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('testimonial-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['quote' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($t['quote']),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($t['name']),'role' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($t['role']),'rating' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($t['rating'])]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6426b16f7e43cdd8260215c3f2dbf890)): ?>
<?php $attributes = $__attributesOriginal6426b16f7e43cdd8260215c3f2dbf890; ?>
<?php unset($__attributesOriginal6426b16f7e43cdd8260215c3f2dbf890); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6426b16f7e43cdd8260215c3f2dbf890)): ?>
<?php $component = $__componentOriginal6426b16f7e43cdd8260215c3f2dbf890; ?>
<?php unset($__componentOriginal6426b16f7e43cdd8260215c3f2dbf890); ?>
<?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pdfforge', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/pages/reviews.blade.php ENDPATH**/ ?>