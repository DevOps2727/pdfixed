
<header class="sticky top-0 z-50 border-b border-slate-200/70 bg-white/80 backdrop-blur-md dark:border-white/10 dark:bg-pdf-navy/75">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
        <a href="<?php echo e(route('home')); ?>" class="group inline-flex items-center gap-2">
            <span
                class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-pdf-cyan text-sm font-bold text-white shadow-sm ring-1 ring-red-600/25"
            >
                P
            </span>
            <span class="text-sm font-semibold tracking-tight text-slate-900 dark:text-white">
                Pdfi<span class="text-pdf-cyan">xed</span>
            </span>
        </a>

        <nav class="hidden items-center gap-1 lg:flex" aria-label="Primary">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                ['About', route('about')],
                ['Services', route('services')],
                ['Pricing', route('pricing')],
                ['Reviews', route('reviews')],
                ['FAQ', route('faq')],
                ['Blog', route('blog')],
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $href]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <a
                    href="<?php echo e($href); ?>"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-white/5 dark:hover:text-white"
                >
                    <?php echo e($label); ?>

                </a>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </nav>

        <div class="flex items-center gap-2">
            <button
                type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-700 transition hover:border-pdf-cyan/40 hover:text-slate-900 dark:border-white/10 dark:text-slate-200 dark:hover:border-pdf-cyan/35 dark:hover:text-white"
                @click="toggleTheme()"
                aria-label="Toggle color theme"
            >
                <span class="hidden dark:inline">☀︎</span>
                <span class="inline dark:hidden">☾</span>
            </button>

            <a
                href="<?php echo e(route('contact')); ?>"
                class="hidden rounded-lg bg-pdf-cyan px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:brightness-110 sm:inline-flex"
            >
                Get a quote
            </a>

            <button
                type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-800 lg:hidden dark:border-white/10 dark:text-white"
                @click="mobileOpen = !mobileOpen"
                :aria-expanded="mobileOpen.toString()"
                aria-controls="pf-mobile-nav"
                aria-label="Open menu"
            >
                <span x-show="!mobileOpen" x-cloak>☰</span>
                <span x-show="mobileOpen" x-cloak>✕</span>
            </button>
        </div>
    </div>

    <div
        id="pf-mobile-nav"
        class="border-t border-slate-200 bg-white lg:hidden dark:border-white/10 dark:bg-pdf-navy"
        x-show="mobileOpen"
        x-cloak
        x-transition
    >
        <div class="mx-auto max-w-7xl space-y-1 px-4 py-3 sm:px-6">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                ['Home', route('home')],
                ['About', route('about')],
                ['Services', route('services')],
                ['Pricing', route('pricing')],
                ['Reviews', route('reviews')],
                ['FAQ', route('faq')],
                ['Blog', route('blog')],
                ['Contact', route('contact')],
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $href]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <a
                    href="<?php echo e($href); ?>"
                    class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-200 dark:hover:bg-white/5"
                    @click="mobileOpen = false"
                >
                    <?php echo e($label); ?>

                </a>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
    </div>
</header>
<?php /**PATH /home/ahmad-fraza/pdfix/pdfixed/resources/views/components/pdfforge-navbar.blade.php ENDPATH**/ ?>