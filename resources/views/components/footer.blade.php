<footer class="border-t border-red-100 bg-[#fffaf6]">
    <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div>
                <a
                    href="#home"
                    class="text-2xl font-bold tracking-wide text-red-950"
                >
                    PINNED<span class="text-red-700">.</span>
                </a>

                <p class="mt-4 max-w-xs text-sm leading-6 text-stone-600">
                    Pinning your ideas to life through pre-designed,
                    customized, commissioned, and bulk button pins.
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="font-bold text-red-950">
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
                <h3 class="font-bold text-red-950">
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
                <h3 class="font-bold text-red-950">
                    Contact
                </h3>

                <div class="mt-4 flex flex-col gap-3 text-sm text-stone-600">
                    <span>Facebook: Pinned by ESN</span>
                    <span>GCash & MariBank accepted</span>
                    <span>Sta. Cruz, Pila, Laguna</span>
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