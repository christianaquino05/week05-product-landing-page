<header class="absolute inset-x-0 top-0 z-50">
    <nav
        class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8"
        aria-label="Main navigation"
    >
        {{-- Brand Logo --}}
        <a
            href="{{ url('/') }}#home"
            class="inline-flex items-center"
            aria-label="Pinned by ESN home"
        >
            <img
                src="{{ asset('images/logo/pinned-logo-navbar.png') }}"
                alt="Pinned by ESN"
                class="h-12 w-auto object-contain sm:h-14"
            >
        </a>

        {{-- Desktop Navigation --}}
        <div class="hidden items-center gap-8 lg:flex">
            <a
                href="{{ url('/') }}#home"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Home
            </a>

            <a
                href="{{ url('/') }}#features"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Pins
            </a>

            <a
                href="{{ url('/') }}#process"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                How It Works
            </a>

            <a
                href="{{ url('/') }}#pricing"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Pricing
            </a>

            <a
                href="{{ url('/') }}#testimonials"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Reviews
            </a>

            <a
                href="{{ url('/') }}#contact"
                class="text-sm font-medium text-stone-700 transition hover:text-red-900"
            >
                Contact
            </a>
        </div>

        {{-- Desktop Actions --}}
        <div class="hidden items-center gap-5 lg:flex">
            <a
                href="{{ route('signin') }}"
                class="text-sm font-semibold text-red-950 transition hover:text-red-700"
            >
                Sign In
            </a>

            <x-button
                href="{{ url('/') }}#contact"
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
                href="{{ url('/') }}#home"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Home
            </a>

            <a
                href="{{ url('/') }}#features"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Pins
            </a>

            <a
                href="{{ url('/') }}#process"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                How It Works
            </a>

            <a
                href="{{ url('/') }}#pricing"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Pricing
            </a>

            <a
                href="{{ url('/') }}#testimonials"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Reviews
            </a>

            <a
                href="{{ url('/') }}#contact"
                class="rounded-lg px-3 py-2.5 text-sm font-medium text-stone-700 hover:bg-red-50 hover:text-red-900"
            >
                Contact
            </a>

            <a
                href="{{ route('signin') }}"
                class="rounded-lg px-3 py-2.5 text-sm font-semibold text-red-950 transition hover:bg-red-50 hover:text-red-900"
            >
                Sign In
            </a>
        </div>

        {{-- Mobile Action --}}
        <div class="mt-4 border-t border-stone-100 pt-4">
            <x-button
                href="{{ url('/') }}#contact"
                class="w-full text-sm"
            >
                Get Started
            </x-button>
        </div>
    </div>
</header>