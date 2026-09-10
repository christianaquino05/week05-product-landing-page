<section
    id="testimonials"
    class="relative overflow-hidden bg-[#fffaf6] py-24 sm:py-28"
>
    {{-- Decorative background --}}
    <div
        class="pointer-events-none absolute -left-20 top-16 h-56 w-56 rounded-full bg-red-100/40 blur-3xl"
        aria-hidden="true"
    ></div>

    <div
        class="pointer-events-none absolute -right-20 bottom-12 h-64 w-64 rounded-full bg-rose-100/40 blur-3xl"
        aria-hidden="true"
    ></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Section Heading --}}
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-xs font-bold uppercase tracking-[0.3em] text-red-800 sm:text-sm">
                Loved by our customers
            </p>

            <h2 class="mt-4 text-4xl font-bold tracking-tight text-red-950 sm:text-5xl">
                Little pins, happy people.
            </h2>

            <p class="mt-5 text-base leading-7 text-stone-600 sm:text-lg">
                See what customers have to say about their PINNED. orders
                and favorite designs.
            </p>
        </div>

        {{-- Testimonials --}}
        <div class="mt-14 grid gap-6 md:grid-cols-3">

            <x-testimonial-card
                name="Brenda Bagabagon"
                initials="BB"
                photo="images/testimonials/brenda-bagabagon.jfif"
                feedback="ang cute ng pins!! thank you so much!"
            />

            <x-testimonial-card
                name="JM Billones"
                initials="JB"
                photo="images/testimonials/jm-billones.jfif"
                feedback="i really loved your Spirit Animal series!! will order again soon"
            />

            <x-testimonial-card
                name="Danmiella Jolo"
                initials="DJ"
                photo="images/testimonials/danmiella-jolo.jpg"
                feedback="i loveeee! worth the price!!"
            />

        </div>

        {{-- Trust Note --}}
        <div class="mt-10 flex justify-center">
            <div
                class="inline-flex items-center gap-2 rounded-full border border-red-100 bg-white px-4 py-2 text-xs font-medium text-stone-500 shadow-sm"
            >
                <span class="h-2 w-2 rounded-full bg-red-700"></span>
                Real feedback from PINNED. customers
            </div>
        </div>

    </div>
</section>