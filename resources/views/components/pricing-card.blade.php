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
        rounded-3xl border p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg
        {{ $featured
            ? 'border-red-900 bg-red-950 text-white'
            : 'border-red-100 bg-white text-stone-900'
        }}
    "
>
    @if ($featured)
        <span class="inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-[0.18em] text-red-100">
            Most Popular
        </span>
    @endif

    <h3 class="mt-5 text-2xl font-bold {{ $featured ? 'text-white' : 'text-red-950' }}">
        {{ $title }}
    </h3>

    <div class="mt-5">
        <span class="text-4xl font-bold {{ $featured ? 'text-white' : 'text-red-950' }}">
            {{ $price }}
        </span>

        @if ($subtitle)
            <p class="mt-2 text-sm {{ $featured ? 'text-red-200' : 'text-stone-500' }}">
                {{ $subtitle }}
            </p>
        @endif
    </div>

    <div
        class="mt-7 space-y-3 text-sm leading-6
        {{ $featured ? 'text-red-100' : 'text-stone-600' }}"
    >
        {{ $slot }}
    </div>

    <a
        href="{{ $buttonHref }}"
        class="
            mt-8 inline-flex w-full items-center justify-center rounded-full px-5 py-3 text-sm font-semibold transition
            {{ $featured
                ? 'bg-white text-red-950 hover:bg-red-100'
                : 'bg-red-900 text-white hover:bg-red-800'
            }}
        "
    >
        {{ $buttonText }}
    </a>
</article>