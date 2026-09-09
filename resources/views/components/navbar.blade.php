<header class="absolute inset-x-0 top-0 z-50">
    <nav
        class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6 lg:px-8"
        aria-label="Main navigation"
    >
        {{-- Brand --}}
        <a
            href="#home"
            class="text-2xl font-bold tracking-wide text-red-950"
            aria-label="Pinned by ESN home"
        >
            PINNED<span class="text-red-700">.</span>
        </a>

        {{-- Desktop Navigation --}}
        <div class="hidden items-center gap-8 lg:flex">
            <a
                href="#home"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Home
            </a>

            <a
                href="#features"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Pins
            </a>

            <a
                href="#process"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                How It Works
            </a>

            <a
                href="#pricing"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Pricing
            </a>

            <a
                href="#testimonials"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Reviews
            </a>

            <a
                href="#contact"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Contact
            </a>
        </div>

        {{-- Desktop Actions --}}
        <div class="hidden items-center gap-3 lg:flex">
            <x-button
                href="#"
                variant="secondary"
                class="px-5 py-2.5 text-sm"
            >
                Sign In
            </x-button>

            <x-button
                href="#contact"
                class="px-5 py-2.5 text-sm"
            >
                Get Started
            </x-button>
        </div>

        {{-- Mobile Menu Button --}}
        <button
            type="button"
            id="mobile-menu-button"
            class="inline-flex items-center justify-center rounded-lg p-2 text-red-950 transition hover:bg-red-50 lg:hidden"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                aria-hidden="true"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4 7h16M4 12h16M4 17h16"
                />
            </svg>
        </button>
    </nav>

    {{-- Mobile Navigation --}}
    <div
        id="mobile-menu"
        class="mx-6 hidden rounded-2xl border border-red-100 bg-white p-5 shadow-lg lg:hidden"
    >
        <div class="flex flex-col gap-1">
            <a
                href="#home"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Home
            </a>

            <a
                href="#features"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Pins
            </a>

            <a
                href="#process"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                How It Works
            </a>

            <a
                href="#pricing"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Pricing
            </a>

            <a
                href="#testimonials"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Reviews
            </a>

            <a
                href="#contact"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Contact
            </a>
        </div>

        <div class="mt-4 grid grid-cols-2 gap-3 border-t border-stone-100 pt-4">
            <x-button
                href="#"
                variant="secondary"
                class="text-sm"
            >
                Sign In
            </x-button>

            <x-button
                href="#contact"
                class="text-sm"
            >
                Get Started
            </x-button>
        </div>
    </div>
</header>