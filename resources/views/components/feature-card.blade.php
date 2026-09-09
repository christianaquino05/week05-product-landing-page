@props([
    'number',
    'icon',
    'title',
    'description',
])

<article
    class="group rounded-3xl border border-red-100 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
>
    <div class="mb-6 flex items-start justify-between">
        {{-- Feature Icon --}}
        <div
            class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-900 transition duration-300 group-hover:bg-red-900 group-hover:text-white"
        >
            @switch($icon)

                {{-- Mystery Pins --}}
                @case('mystery')
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3.75c-3.314 0-6 2.35-6 5.25 0 2.025 1.31 3.78 3.225 4.658.633.29 1.025.891 1.025 1.587v.255h3.5v-.255c0-.696.392-1.297 1.025-1.587C16.69 12.78 18 11.025 18 9c0-2.9-2.686-5.25-6-5.25Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.25 18h3.5M10.75 20.25h2.5M9.75 9.25a2.25 2.25 0 1 1 3.912 1.525c-.637.664-1.162 1.1-1.162 2.225"
                        />
                    </svg>
                    @break

                {{-- Pre-Designed Pins --}}
                @case('collection')
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M7.5 4.5h9A3 3 0 0 1 19.5 7.5v9a3 3 0 0 1-3 3h-9a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7.5 15 2.75-3 2.25 2.25 1.75-1.75L16.5 15M15.25 8.25h.01"
                        />
                    </svg>
                    @break

                {{-- Custom Pins --}}
                @case('custom')
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m14.25 5.25 4.5 4.5M5.25 18.75l2.216-.492a3 3 0 0 0 1.444-.79L18.75 7.628a1.5 1.5 0 0 0 0-2.121l-.257-.257a1.5 1.5 0 0 0-2.121 0l-9.84 9.84a3 3 0 0 0-.79 1.444L5.25 18.75Z"
                        />
                    </svg>
                    @break

                {{-- Commissioned Pins --}}
                @case('commission')
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3.75a8.25 8.25 0 1 0 8.25 8.25A8.25 8.25 0 0 0 12 3.75Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9.5 14.5 5-5M9.5 9.5h.01M14.5 14.5h.01"
                        />
                    </svg>
                    @break

                {{-- Bulk Orders --}}
                @case('bulk')
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4.5 7.5 12 3.75l7.5 3.75L12 11.25 4.5 7.5Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m4.5 12 7.5 3.75L19.5 12M4.5 16.5 12 20.25l7.5-3.75"
                        />
                    </svg>
                    @break

                {{-- Finishes --}}
                @case('finish')
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m12 3 1.25 3.75L17 8l-3.75 1.25L12 13l-1.25-3.75L7 8l3.75-1.25L12 3Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m18 13 .75 2.25L21 16l-2.25.75L18 19l-.75-2.25L15 16l2.25-.75L18 13ZM6 14l.5 1.5L8 16l-1.5.5L6 18l-.5-1.5L4 16l1.5-.5L6 14Z"
                        />
                    </svg>
                    @break

            @endswitch
        </div>

        {{-- Feature Number --}}
        <span class="text-xs font-bold tracking-[0.2em] text-red-300">
            {{ $number }}
        </span>
    </div>

    <h3 class="text-xl font-bold text-red-950">
        {{ $title }}
    </h3>

    <p class="mt-3 text-sm leading-7 text-stone-600">
        {{ $description }}
    </p>
</article>