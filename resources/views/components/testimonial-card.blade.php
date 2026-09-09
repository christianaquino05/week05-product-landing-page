@props([
    'name',
    'feedback',
    'initials',
    'photo' => null,
])

<article
    class="rounded-3xl border border-red-100 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
>
    {{-- Quote mark --}}
    <div class="text-4xl font-bold leading-none text-red-200">
        “
    </div>

    <p class="mt-4 min-h-24 text-base leading-7 text-stone-700">
        {{ $feedback }}
    </p>

    <div class="mt-7 flex items-center gap-4">

        @if ($photo)
            <img
                src="{{ asset($photo) }}"
                alt="{{ $name }} profile photo"
                class="h-12 w-12 rounded-full object-cover"
            >
        @else
            <div
                class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-sm font-bold text-red-900"
            >
                {{ $initials }}
            </div>
        @endif

        <div>
            <h3 class="font-bold text-red-950">
                {{ $name }}
            </h3>

            <p class="text-sm text-stone-500">
                PINNED. Customer
            </p>
        </div>
    </div>
</article>