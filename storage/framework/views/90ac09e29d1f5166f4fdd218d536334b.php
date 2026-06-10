<?php $__env->startSection('meta_description', 'Detailed PDF services: text & layout, images, merge/split/compress, redaction, forms, signatures, OCR, bookmarks, accessibility, and more.'); ?>

<?php $__env->startSection('content'); ?>
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Services</h1>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                A complete PDF desk — from surgical edits to large document remediation — delivered with clear communication and predictable output.
            </p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                    ['✍️', 'Text & formatting', 'Correct typos, reflow paragraphs, unify styles, fix widows/orphans, and keep brand typography consistent.'],
                    ['🖼️', 'Image editing / replacement', 'Swap photos, remove backgrounds, sharpen scans, and keep color faithful across print and screen.'],
                    ['🧩', 'Merge / split / compress', 'Combine exhibits, extract chapters, optimize for email, and keep links intact where possible.'],
                    ['🛡️', 'Redaction & security', 'Remove sensitive content for real (not faux highlights), sanitize hidden layers, and set sensible permissions.'],
                    ['📝', 'Form filling & creation', 'Build user-friendly fields, validate inputs, and export stable forms for distribution.'],
                    ['✒️', 'eSignatures readiness', 'Prepare signature flows, flatten where required, and avoid broken signature states.'],
                    ['🔎', 'OCR & conversion', 'Make scans searchable, rebuild reading order, and convert office exports into stable PDFs.'],
                    ['🔗', 'Bookmarks & hyperlinks', 'Create navigable long documents with reliable internal and external links.'],
                    ['♿', 'Accessibility compliance', 'Tag structure, alt text guidance, headings, artifacts cleanup, and audit-friendly output.'],
                    ['🧾', 'Print production prep', 'Bleed, marks, color checks, font embedding, and export profiles for vendors.'],
                    ['📎', 'Interactive enhancements', 'Buttons, basic multimedia packaging (where appropriate), and careful compatibility notes.'],
                    ['🧠', 'Consulting & templates', 'Standards for your team: naming, export settings, and reusable PDF templates.'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$icon, $title, $desc]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginale804957ecdb153e8c822de5ed47a4ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale804957ecdb153e8c822de5ed47a4ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service-card','data' => ['icon' => $icon,'title' => $title,'description' => $desc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($desc)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $attributes = $__attributesOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $component = $__componentOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__componentOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>

            <div class="mt-12 rounded-3xl border border-slate-200 bg-slate-50 p-8 dark:border-white/10 dark:bg-white/5">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <div class="text-lg font-semibold text-slate-900 dark:text-white">Not sure which service fits?</div>
                        <div class="mt-2 text-sm text-slate-600 dark:text-slate-300">Send the file and describe the outcome — I’ll recommend the fastest path.</div>
                    </div>
                    <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center rounded-xl bg-pdf-cyan px-6 py-3 text-sm font-semibold text-white transition hover:brightness-110">
                        Start a request
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pdfforge', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/pages/services.blade.php ENDPATH**/ ?>