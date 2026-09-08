@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $classes = match ($variant) {
        'secondary' => 'border border-red-900 bg-transparent text-red-900 hover:bg-red-50',
        default => 'bg-red-900 text-white hover:bg-red-800',
    };
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "inline-flex items-center justify-center rounded-full px-6 py-3 font-semibold transition {$classes}"
    ]) }}
>
    {{ $slot }}
</a>