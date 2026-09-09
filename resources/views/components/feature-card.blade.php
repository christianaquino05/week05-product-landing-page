@props([
    'number',
    'title',
    'description',
])

<article
    class="group rounded-3xl border border-red-100 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
>
    <div
        class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-sm font-bold text-red-900 transition group-hover:bg-red-900 group-hover:text-white"
    >
        {{ $number }}
    </div>

    <h3 class="text-xl font-bold text-red-950">
        {{ $title }}
    </h3>

    <p class="mt-3 text-sm leading-7 text-stone-600">
        {{ $description }}
    </p>
</article>