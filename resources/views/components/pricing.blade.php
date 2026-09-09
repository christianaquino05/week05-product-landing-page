<section
    id="pricing"
    class="bg-stone-50 py-24 sm:py-28"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl text-center">
            <p class="text-xs font-bold uppercase tracking-[0.3em] text-red-800 sm:text-sm">
                Simple pricing
            </p>

            <h2 class="mt-4 text-4xl font-bold tracking-tight text-red-950 sm:text-5xl">
                Pick the pin that works for you.
            </h2>

            <p class="mt-5 text-base leading-7 text-stone-600 sm:text-lg">
                Choose from pre-designed, custom, or commissioned button pins,
                with pricing based on your preferred size.
            </p>
        </div>

        {{-- Main Pricing Cards --}}
        <div class="mt-14 grid gap-6 lg:grid-cols-3">

            <x-pricing-card
                title="Pre-Designed"
                price="From ₱15"
                subtitle="Choose from existing PINNED. collections."
                buttonText="Browse Designs"
                buttonHref="#products"
            >
                <p>✓ 32mm — ₱15</p>
                <p>✓ 44mm — ₱20</p>
                <p>✓ Bloom Buddies</p>
                <p>✓ Spirit Animal</p>
                <p>✓ College Series</p>
                <p>✓ Vocal Stims</p>
            </x-pricing-card>

            <x-pricing-card
                title="Custom"
                price="From ₱15"
                subtitle="Turn your own design into a button pin."
                :featured="true"
                buttonText="Customize Yours"
                buttonHref="#contact"
            >
                <p>✓ 32mm — ₱15</p>
                <p>✓ 44mm — ₱20</p>
                <p>✓ Submit your own artwork</p>
                <p>✓ Choose your preferred size</p>
                <p>✓ Matte, Glossy, or Holo</p>
                <p>✓ Glitter or Rainbow +₱2</p>
            </x-pricing-card>

            <x-pricing-card
                title="Commissioned"
                price="From ₱20"
                subtitle="Have PINNED. create the design for you."
                buttonText="Start a Commission"
                buttonHref="#contact"
            >
                <p>✓ 32mm — ₱20</p>
                <p>✓ 44mm — ₱25</p>
                <p>✓ Original commissioned design</p>
                <p>✓ Choose your preferred size</p>
                <p>✓ Matte, Glossy, or Holo</p>
                <p>✓ Glitter or Rainbow +₱2</p>
            </x-pricing-card>

        </div>

        {{-- Bulk Pricing --}}
        <div class="mt-16 overflow-hidden rounded-[2rem] border border-red-100 bg-white shadow-sm">
            <div class="grid gap-8 px-6 py-8 sm:px-8 lg:grid-cols-[1fr_auto] lg:items-center lg:px-10">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.25em] text-red-800">
                        Events & Organizations
                    </p>

                    <h3 class="mt-3 text-3xl font-bold text-red-950">
                        Need pins in bulk?
                    </h3>

                    <p class="mt-3 max-w-2xl leading-7 text-stone-600">
                        Bulk pricing is available for orders with a minimum
                        quantity of 100 pieces.
                    </p>
                </div>

                <x-button href="#contact">
                    Request Bulk Order
                </x-button>
            </div>

            <div class="overflow-x-auto border-t border-red-100">
                <table class="w-full min-w-[620px] text-left">
                    <thead class="bg-red-50">
                        <tr>
                            <th class="px-6 py-4 text-sm font-bold text-red-950">
                                Bulk Order
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-red-950">
                                32mm
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-red-950">
                                44mm
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-stone-100">
                        <tr>
                            <td class="px-6 py-4 text-sm text-stone-700">
                                No Packaging
                            </td>

                            <td class="px-6 py-4 text-sm font-semibold text-red-900">
                                ₱6.75 / pc
                            </td>

                            <td class="px-6 py-4 text-sm font-semibold text-red-900">
                                ₱9.25 / pc
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 text-sm text-stone-700">
                                With Packaging
                            </td>

                            <td class="px-6 py-4 text-sm font-semibold text-red-900">
                                ₱9.75 / pc
                            </td>

                            <td class="px-6 py-4 text-sm font-semibold text-red-900">
                                ₱12.40 / pc
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Add-ons --}}
        <div class="mt-10 text-center">
            <p class="text-sm text-stone-500">
                Available finishes:
                <span class="font-semibold text-red-950">Matte</span>,
                <span class="font-semibold text-red-950">Glossy</span>,
                and
                <span class="font-semibold text-red-950">Holo</span>.
                Glitter and Rainbow options are available for
                <span class="font-semibold text-red-950">+₱2</span>.
            </p>
        </div>

    </div>
</section>