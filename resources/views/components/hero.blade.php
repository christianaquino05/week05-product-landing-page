<section
    id="home"
    class="relative min-h-screen overflow-x-hidden bg-stone-50 pt-28"
>
    {{-- Decorative background --}}
    <div
        class="pointer-events-none absolute -left-32 top-1/3 h-72 w-72 rounded-full bg-red-100/50 blur-3xl"
        aria-hidden="true"
    ></div>

    <div
        class="pointer-events-none absolute -right-32 top-20 h-96 w-96 rounded-full bg-red-100/40 blur-3xl"
        aria-hidden="true"
    ></div>

    <div
        class="relative mx-auto grid min-h-[calc(100vh-7rem)] max-w-7xl items-center gap-8 px-6 pb-16 lg:grid-cols-2 lg:gap-10 lg:px-8"
    >
        {{-- Hero Content --}}
        <div class="mx-auto w-full max-w-2xl text-center lg:mx-0 lg:text-left">
            <p class="mb-5 text-xs font-bold uppercase tracking-[0.3em] text-red-800 sm:text-sm">
                Made for you. Pinned by us.
            </p>

            <h1 class="text-5xl font-bold leading-[0.95] tracking-[-0.025em] text-red-950 sm:text-6xl lg:text-7xl">
                Pinning your
                <span class="block italic font-semibold">
                    ideas to life.
                </span>
            </h1>

            <p class="mx-auto mt-7 max-w-xl text-base leading-7 text-stone-600 sm:text-lg sm:leading-8 lg:mx-0">
                From ready-made designs to pins created just for you,
                PINNED. turns your ideas into something you can wear,
                share, and make your own.
            </p>

            <div
                class="mt-9 flex flex-col items-center gap-3 sm:flex-row sm:justify-center lg:justify-start"
            >
                <x-button href="#pricing">
                    Order Your Pins
                </x-button>

                <x-button href="#products" variant="secondary">
                    Explore Designs
                </x-button>
            </div>

            {{-- Quick product details --}}
            <div
                class="mt-10 flex flex-wrap items-center justify-center gap-x-7 gap-y-3 text-sm text-stone-500 lg:justify-start"
            >
                <span>
                    <strong class="font-semibold text-red-950">32mm</strong>
                    Size
                </span>

                <span class="hidden h-4 w-px bg-stone-300 sm:block"></span>

                <span>
                    <strong class="font-semibold text-red-950">44mm</strong>
                    Size
                </span>

                <span class="hidden h-4 w-px bg-stone-300 sm:block"></span>

                <span>
                    <strong class="font-semibold text-red-950">Custom</strong>
                    Designs
                </span>
            </div>
        </div>

        {{-- Product Visual --}}
        <div class="relative mx-auto h-[480px] w-full max-w-lg sm:h-[520px]">

            {{-- Decorative dotted pattern --}}
            <div
                class="absolute right-3 top-8 grid grid-cols-5 gap-3 opacity-25"
                aria-hidden="true"
            >
                @for ($i = 0; $i < 20; $i++)
                    <span class="h-1.5 w-1.5 rounded-full bg-red-700"></span>
                @endfor
            </div>

            {{-- Decorative ring --}}
            <div
                class="absolute left-1/2 top-1/2 h-80 w-80 -translate-x-1/2 -translate-y-1/2 rounded-full border border-red-100 sm:h-[390px] sm:w-[390px]"
                aria-hidden="true"
            ></div>

            {{-- Main Custom Pin --}}
            <div
                class="absolute left-1/2 top-1/2 z-20 flex h-56 w-56 -translate-x-1/2 -translate-y-1/2 rotate-3 items-center justify-center rounded-full border-[10px] border-white bg-red-900 text-center text-white shadow-2xl transition duration-500 hover:rotate-0 hover:scale-[1.03] sm:h-72 sm:w-72"
            >
                <div>
                    <span class="block text-xs uppercase tracking-[0.3em] text-red-100">
                        Your
                    </span>

                    <span class="mt-1 block text-4xl font-bold sm:text-5xl">
                        IDEA
                    </span>

                    <span class="mt-1 block text-sm italic text-red-100">
                        pinned.
                    </span>
                </div>
            </div>

            {{-- Real Pin: Bloom Buddies --}}
            <div
                class="absolute left-0 top-6 z-30 w-28 -rotate-12 transition duration-500 hover:-translate-y-2 hover:rotate-0 sm:left-2 sm:w-36"
            >
                <img
                    src="{{ asset('images/pin-designs/bloombuddy2.png') }}"
                    alt="Bloom Buddies button pin by Pinned by ESN"
                    class="h-auto w-full drop-shadow-xl"
                >
            </div>

            {{-- Real Pin: Spirit Animal --}}
            <div
                class="absolute bottom-3 right-0 z-30 w-32 rotate-12 transition duration-500 hover:-translate-y-2 hover:rotate-3 sm:right-0 sm:w-40"
            >
                <img
                    src="{{ asset('images/pin-designs/spirit-animal2.png') }}"
                    alt="Spirit Animal button pin by Pinned by ESN"
                    class="h-auto w-full drop-shadow-xl"
                >
            </div>

            {{-- Real Pin: College Series --}}
            <div
                class="absolute bottom-4 left-2 z-30 w-28 -rotate-6 transition duration-500 hover:-translate-y-2 hover:rotate-0 sm:bottom-8 sm:left-0 sm:w-32"
            >
                <img
                    src="{{ asset('images/pin-designs/college-series3.png') }}"
                    alt="Vocal Stims button pin by Pinned by ESN"
                    class="h-auto w-full drop-shadow-lg"
                >
            </div>

            {{-- Floating size label --}}
            <div
                class="absolute right-5 top-24 z-30 rounded-full border border-red-100 bg-white/90 px-4 py-2 text-xs font-semibold text-red-950 shadow-sm backdrop-blur-sm sm:right-0"
            >
                32mm & 44mm
            </div>

            {{-- Custom label --}}
            <div
                class="absolute left-1/2 top-[82%] z-30 -translate-x-1/2 rounded-full border border-red-100 bg-white/90 px-4 py-2 text-xs font-semibold text-red-950 shadow-sm backdrop-blur-sm sm:top-[86%]"
            >
                Made your way.
            </div>

        </div>
    </div>
</section>