@props([
    'title',
    'price',
    'subtitle' => null,
    'featured' => false,
    'buttonText' => 'Order Now',
    'buttonHref' => '#contact',
])

<article
    class="
        flex h-full flex-col rounded-3xl border p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg
        {{ $featured
            ? 'border-red-900 bg-red-950 text-white'
            : 'border-red-100 bg-white text-stone-900'
        }}
    "
>
    {{-- Featured Label --}}
    @if ($featured)
        <div class="mb-1">
            <span
                class="inline-flex rounded-full border border-white/10 bg-white/10 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.2em] text-red-100"
            >
                Made Your Way
            </span>
        </div>
    @endif

    {{-- Pricing Heading --}}
    <h3
        class="
            mt-5 text-2xl font-bold
            {{ $featured ? 'text-white' : 'text-red-950' }}
        "
    >
        {{ $title }}
    </h3>

    {{-- Price --}}
    <div class="mt-5">
        <span
            class="
                text-4xl font-bold tracking-tight
                {{ $featured ? 'text-white' : 'text-red-950' }}
            "
        >
            {{ $price }}
        </span>

        @if ($subtitle)
            <p
                class="
                    mt-2 min-h-10 text-sm leading-6
                    {{ $featured ? 'text-red-200' : 'text-stone-500' }}
                "
            >
                {{ $subtitle }}
            </p>
        @endif
    </div>

    {{-- Divider --}}
    <div
        class="
            my-7 h-px
            {{ $featured ? 'bg-white/10' : 'bg-red-100' }}
        "
        aria-hidden="true"
    ></div>

    {{-- Features --}}
    <div
        class="
            flex-1 space-y-3 text-sm leading-6
            {{ $featured ? 'text-red-100' : 'text-stone-600' }}
        "
    >
        {{ $slot }}
    </div>

    {{-- CTA --}}
    <a
        href="{{ $buttonHref }}"
        class="
            mt-8 inline-flex w-full items-center justify-center rounded-full px-5 py-3 text-sm font-semibold transition
            hover:-translate-y-0.5
            {{ $featured
                ? 'bg-white text-red-950 hover:bg-red-100'
                : 'bg-red-900 text-white hover:bg-red-800'
            }}
        "
    >
        {{ $buttonText }}
    </a>
</article>