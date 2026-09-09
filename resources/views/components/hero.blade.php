<section
    id="home"
    class="relative min-h-screen overflow-hidden bg-stone-50 pt-28"
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
        class="relative mx-auto grid min-h-[calc(100vh-7rem)] max-w-7xl items-center gap-14 px-6 pb-16 lg:grid-cols-2 lg:gap-10 lg:px-8"
    >
        {{-- Hero Content --}}
        <div class="max-w-2xl text-center lg:text-left">
            <p class="mb-5 text-xs font-bold uppercase tracking-[0.3em] text-red-800 sm:text-sm">
                Made for you. Pinned by us.
            </p>

            <h1 class="text-5xl font-bold leading-[0.95] tracking-tight text-red-950 sm:text-6xl lg:text-7xl">
                Pinning your
                <span class="block italic font-medium">
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
        <div class="relative mx-auto h-[390px] w-full max-w-lg sm:h-[500px]">

            {{-- Decorative dotted pattern --}}
            <div
                class="absolute right-2 top-8 grid grid-cols-5 gap-3 opacity-30"
                aria-hidden="true"
            >
                @for ($i = 0; $i < 20; $i++)
                    <span class="h-1.5 w-1.5 rounded-full bg-red-700"></span>
                @endfor
            </div>

            {{-- Large pin --}}
            <div
                class="absolute left-1/2 top-1/2 flex h-56 w-56 -translate-x-1/2 -translate-y-1/2 rotate-3 items-center justify-center rounded-full border-[10px] border-white bg-red-900 text-center text-white shadow-2xl sm:h-72 sm:w-72"
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

            {{-- Small pin: 32mm --}}
            <div
                class="absolute left-2 top-8 flex h-28 w-28 -rotate-12 items-center justify-center rounded-full border-[7px] border-white bg-rose-200 text-center text-red-950 shadow-xl sm:left-4 sm:h-36 sm:w-36"
            >
                <div>
                    <span class="block text-2xl font-bold">32</span>
                    <span class="text-xs font-semibold uppercase tracking-widest">
                        mm
                    </span>
                </div>
            </div>

            {{-- Small pin: 44mm --}}
            <div
                class="absolute bottom-6 right-3 flex h-32 w-32 rotate-12 items-center justify-center rounded-full border-[7px] border-white bg-stone-800 text-center text-white shadow-xl sm:h-40 sm:w-40"
            >
                <div>
                    <span class="block text-3xl font-bold">44</span>
                    <span class="text-xs font-semibold uppercase tracking-widest">
                        mm
                    </span>
                </div>
            </div>

            {{-- Small custom pin --}}
            <div
                class="absolute bottom-2 left-5 flex h-24 w-24 -rotate-6 items-center justify-center rounded-full border-[6px] border-white bg-red-100 text-center text-red-950 shadow-lg sm:bottom-10 sm:left-0 sm:h-28 sm:w-28"
            >
                <span class="text-xs font-bold uppercase leading-4 tracking-wider">
                    Custom<br>Pin
                </span>
            </div>
        </div>
    </div>
</section>