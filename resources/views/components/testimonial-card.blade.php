@props([
    'name',
    'feedback',
    'initials',
    'photo' => null,
])

<article
    class="group relative overflow-hidden rounded-3xl border border-red-100 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
>
    {{-- Decorative accent --}}
    <div
        class="pointer-events-none absolute -right-10 -top-10 h-28 w-28 rounded-full bg-red-50"
        aria-hidden="true"
    ></div>

    {{-- Quote mark --}}
    <div class="relative text-6xl font-bold leading-none text-red-200">
        “
    </div>

    {{-- Feedback --}}
    <p class="relative mt-3 min-h-24 text-base leading-7 text-stone-700">
        {{ $feedback }}
    </p>

    {{-- Customer --}}
    <div class="relative mt-8 flex items-center gap-4 border-t border-red-50 pt-6">

        @if ($photo)
            <div class="rounded-full bg-red-50 p-1">
                <img
                    src="{{ asset($photo) }}"
                    alt="{{ $name }} profile photo"
                    class="h-14 w-14 rounded-full object-cover"
                >
            </div>
        @else
            <div
                class="flex h-14 w-14 items-center justify-center rounded-full bg-red-100 text-sm font-bold text-red-900"
            >
                {{ $initials }}
            </div>
        @endif

        <div>
            <h3 class="text-lg font-bold text-red-950">
                {{ $name }}
            </h3>

            <p class="mt-0.5 text-xs font-semibold uppercase tracking-[0.16em] text-stone-400">
                PINNED. Customer
            </p>
        </div>
    </div>
</article>