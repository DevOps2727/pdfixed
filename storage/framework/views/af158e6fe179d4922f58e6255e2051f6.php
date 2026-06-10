<footer class="border-t border-slate-200 bg-slate-50 dark:border-white/10 dark:bg-black/20">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-3">
            <div>
                <div class="text-sm font-semibold text-slate-900 dark:text-white">Pdfixed</div>
                <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                    Professional PDF editing for teams that can’t afford sloppy output — precise, fast, and flawless.
                </p>
            </div>

            <div>
                <div class="text-sm font-semibold text-slate-900 dark:text-white">Explore</div>
                <ul class="mt-3 space-y-2 text-sm">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                        ['Services', route('services')],
                        ['Reviews', route('reviews')],
                        ['Pricing', route('pricing')],
                        ['Blog', route('blog')],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $href]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <li>
                            <a href="<?php echo e($href); ?>" class="text-slate-600 hover:text-pdf-cyan dark:text-slate-300"><?php echo e($label); ?></a>
                        </li>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </ul>
            </div>

            <div>
                <div class="text-sm font-semibold text-slate-900 dark:text-white">Contact</div>
                <ul class="mt-3 space-y-2 text-sm text-slate-600 dark:text-slate-300">
                    <li><span class="text-slate-500 dark:text-slate-400">Email:</span> hello@pdfixed.test</li>
                    <li><span class="text-slate-500 dark:text-slate-400">Phone:</span> +92 300 1234567</li>
                    <li><span class="text-slate-500 dark:text-slate-400">WhatsApp:</span> +92 300 1234567 (Karachi)</li>
                </ul>
            </div>
        </div>

        <div class="mt-10 flex flex-col gap-3 border-t border-slate-200 pt-8 text-xs text-slate-500 dark:border-white/10 dark:text-slate-400 sm:flex-row sm:items-center sm:justify-between">
            <p>© <?php echo e(now()->year); ?> Pdfixed. All rights reserved.</p>
            <p class="text-slate-400">Built with Laravel, Tailwind, Alpine, and Three.js.</p>
        </div>
    </div>
</footer>
<?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/components/pdfforge-footer.blade.php ENDPATH**/ ?>