<footer class="border-t border-red-100 bg-[#fffaf6]">
    <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div>
                <a
                    href="#home"
                    class="inline-flex items-center"
                    aria-label="Pinned by ESN home"
                >
                    <img
                        src="{{ asset('images/logo/pinned-logo-navbar.png') }}"
                        alt="Pinned by ESN"
                        class="h-16 w-auto object-contain"
                    >
                </a>

                <p class="mt-4 max-w-xs text-sm leading-6 text-stone-600">
                    Pinning your ideas to life through pre-designed,
                    customized, commissioned, and bulk button pins.
                </p>

                {{-- Social Media --}}
                <div class="mt-6 flex items-center gap-3">

                    {{-- Facebook --}}
                    <a
                        href="https://www.facebook.com/profile.php?id=61582134730573"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Visit Pinned by ESN on Facebook"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-red-200 text-red-900 transition hover:-translate-y-0.5 hover:border-red-900 hover:bg-red-900 hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-5 w-5"
                            aria-hidden="true"
                        >
                            <path
                                d="M13.5 8H16l.5-3h-3c-2.8 0-4.5 1.7-4.5 4.6V12H6v3h3v6h3.5v-6H16l.5-3h-4V9.8c0-1.2.4-1.8 1-1.8Z"
                            />
                        </svg>
                    </a>

                    {{-- Instagram --}}
                    <a
                        href="https://www.instagram.com/pinnedbyesn"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Visit Pinned by ESN on Instagram"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-red-200 text-red-900 transition hover:-translate-y-0.5 hover:border-red-900 hover:bg-red-900 hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.8"
                            stroke="currentColor"
                            class="h-5 w-5"
                            aria-hidden="true"
                        >
                            <rect x="3.5" y="3.5" width="17" height="17" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle
                                cx="17.4"
                                cy="6.7"
                                r="1"
                                fill="currentColor"
                                stroke="none"
                            />
                        </svg>
                    </a>

                    {{-- Messenger --}}
                    <a
                        href="https://www.facebook.com/profile.php?id=61582134730573"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Contact Pinned by ESN through Messenger"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-red-200 text-red-900 transition hover:-translate-y-0.5 hover:border-red-900 hover:bg-red-900 hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.8"
                            stroke="currentColor"
                            class="h-5 w-5"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 11.5a8.5 8.5 0 0 1-9 8.48 9.2 9.2 0 0 1-3.45-.84L4 20.5l1.2-4.05A8.48 8.48 0 1 1 21 11.5Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m7.5 13.5 3-3 2.2 2 3.8-3"
                            />
                        </svg>
                    </a>

                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-lg font-bold text-red-950">
                    Quick Links
                </h3>

                <div class="mt-4 flex flex-col gap-3 text-sm">
                    <a href="#home" class="text-stone-600 transition hover:text-red-900">
                        Home
                    </a>

                    <a href="#features" class="text-stone-600 transition hover:text-red-900">
                        Pins
                    </a>

                    <a href="#process" class="text-stone-600 transition hover:text-red-900">
                        How It Works
                    </a>

                    <a href="#pricing" class="text-stone-600 transition hover:text-red-900">
                        Pricing
                    </a>

                    <a href="#testimonials" class="text-stone-600 transition hover:text-red-900">
                        Reviews
                    </a>
                </div>
            </div>

            {{-- Products --}}
            <div>
                <h3 class="text-lg font-bold text-red-950">
                    Products
                </h3>

                <div class="mt-4 flex flex-col gap-3 text-sm text-stone-600">
                    <span>Mystery Pins</span>
                    <span>Pre-Designed Pins</span>
                    <span>Custom Pins</span>
                    <span>Commissioned Pins</span>
                    <span>Bulk Orders</span>
                </div>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-lg font-bold text-red-950">
                    Contact
                </h3>

                <div class="mt-4 flex flex-col gap-3 text-sm text-stone-600">
                    <span>Facebook: Pinned by ESN</span>
                    <span>GCash & MariBank accepted</span>
                    <span>National Highway, Sta. Clara Sur, Pila, Laguna</span>
                </div>

                <a
                    href="https://www.facebook.com/profile.php?id=61582134730573"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="mt-5 inline-flex text-sm font-semibold text-red-900 transition hover:text-red-700"
                >
                    Visit Facebook →
                </a>
            </div>

        </div>

        <div
            class="mt-12 flex flex-col gap-3 border-t border-red-100 pt-6 text-xs text-stone-500 sm:flex-row sm:items-center sm:justify-between"
        >
            <p>
                © {{ date('Y') }} Pinned by ESN.
            </p>

            <p>
                Landing page redesign created for ITST 302 academic purposes.
            </p>
        </div>

    </div>
</footer>