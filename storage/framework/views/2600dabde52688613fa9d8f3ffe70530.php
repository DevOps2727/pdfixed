<?php $__env->startSection('meta_description', 'Pdfixed pricing tiers — Starter, Professional, and Enterprise — plus a custom quote option for complex PDF programs.'); ?>

<?php $__env->startSection('content'); ?>
    <section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50 py-16 dark:border-white/10 dark:from-pdf-navy dark:to-black/20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white">Pricing</h1>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                Clear tiers for common needs — every engagement still starts with a quick scope so you’re never surprised.
            </p>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-pdf-navy">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 lg:grid-cols-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                    [
                        'name' => 'Starter',
                        'price' => '$149',
                        'subtitle' => 'Single-document polish',
                        'features' => ['Up to 25 pages', 'Text + image edits', 'Export-ready PDF', '48h turnaround*'],
                        'cta' => 'Book Starter',
                        'highlight' => false,
                    ],
                    [
                        'name' => 'Professional',
                        'price' => '$449',
                        'subtitle' => 'Complex edits + QA',
                        'features' => ['Up to 120 pages', 'Forms / bookmarks / links', 'OCR cleanup (as needed)', 'Priority queue*'],
                        'cta' => 'Book Professional',
                        'highlight' => true,
                    ],
                    [
                        'name' => 'Enterprise',
                        'price' => 'Custom',
                        'subtitle' => 'Volume + standards',
                        'features' => ['Dedicated turnaround', 'Templates + playbooks', 'Security / NDA workflows', 'Monthly reporting*'],
                        'cta' => 'Request a retainer',
                        'highlight' => false,
                    ],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'relative overflow-hidden rounded-3xl border p-8',
                        'border-slate-200 bg-slate-50 dark:border-white/10 dark:bg-white/5' => ! $tier['highlight'],
                        'border-pdf-cyan/40 bg-gradient-to-b from-white to-slate-50 shadow-lg shadow-pdf-cyan/10 dark:from-white/10 dark:to-white/5' => $tier['highlight'],
                    ]); ?>">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($tier['highlight']): ?>
                            <div class="absolute right-4 top-4 rounded-full bg-pdf-cyan px-3 py-1 text-xs font-semibold text-white">Most popular</div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <div class="text-sm font-semibold text-pdf-cyan"><?php echo e($tier['name']); ?></div>
                        <div class="mt-3 text-4xl font-semibold tracking-tight text-slate-900 dark:text-white"><?php echo e($tier['price']); ?></div>
                        <div class="mt-2 text-sm text-slate-600 dark:text-slate-300"><?php echo e($tier['subtitle']); ?></div>
                        <ul class="mt-6 space-y-3 text-sm text-slate-700 dark:text-slate-200">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $tier['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <li class="flex gap-2">
                                    <span class="text-pdf-cyan">✓</span>
                                    <span><?php echo e($f); ?></span>
                                </li>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </ul>
                        <a
                            href="<?php echo e(route('contact')); ?>"
                            class="mt-8 inline-flex w-full items-center justify-center rounded-xl px-5 py-3 text-sm font-semibold transition <?php if($tier['highlight']): ?> bg-pdf-cyan text-white hover:brightness-110 <?php else: ?> border border-slate-200 bg-white text-slate-900 hover:border-pdf-cyan/40 dark:border-white/10 dark:bg-transparent dark:text-white dark:hover:border-pdf-cyan/35 <?php endif; ?>"
                        >
                            <?php echo e($tier['cta']); ?>

                        </a>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>

            <p class="mt-6 text-xs text-slate-500 dark:text-slate-400">*Turnaround depends on complexity; confirmed in writing before work begins.</p>

            <div class="mt-14 overflow-hidden rounded-3xl border border-slate-200 dark:border-white/10">
                <table class="w-full border-collapse text-left text-sm">
                    <thead class="bg-slate-50 text-slate-900 dark:bg-white/5 dark:text-white">
                        <tr>
                            <th class="px-5 py-4 font-semibold">Feature</th>
                            <th class="px-5 py-4 font-semibold">Starter</th>
                            <th class="px-5 py-4 font-semibold">Professional</th>
                            <th class="px-5 py-4 font-semibold">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 bg-white text-slate-700 dark:divide-white/10 dark:bg-pdf-navy dark:text-slate-200">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                            ['Advanced OCR cleanup', '—', '✓', '✓'],
                            ['Accessibility tagging', '—', 'Add-on', '✓'],
                            ['Redaction workflow', '—', '✓', '✓'],
                            ['Template standardization', '—', '—', '✓'],
                            ['Dedicated Slack / email channel', '—', '—', '✓'],
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $s, $p, $e]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <tr>
                                <td class="px-5 py-4 font-medium text-slate-900 dark:text-white"><?php echo e($label); ?></td>
                                <td class="px-5 py-4"><?php echo e($s); ?></td>
                                <td class="px-5 py-4"><?php echo e($p); ?></td>
                                <td class="px-5 py-4"><?php echo e($e); ?></td>
                            </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-10 flex flex-col items-start justify-between gap-4 rounded-3xl border border-slate-200 bg-slate-50 p-8 dark:border-white/10 dark:bg-white/5 md:flex-row md:items-center">
                <div>
                    <div class="text-lg font-semibold text-slate-900 dark:text-white">Need a custom quote?</div>
                    <div class="mt-2 text-sm text-slate-600 dark:text-slate-300">Large bundles, recurring programs, and regulated environments — scoped precisely.</div>
                </div>
                <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center rounded-xl bg-pdf-cyan px-6 py-3 text-sm font-semibold text-white transition hover:brightness-110">
                    Request custom pricing
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pdfforge', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/pages/pricing.blade.php ENDPATH**/ ?>