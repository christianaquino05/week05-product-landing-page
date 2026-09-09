@extends('layouts.app')

@section('title', 'Pinned by ESN | Custom Button Pins')

@section(
    'description',
    'Pinned by ESN creates pre-designed, customized, commissioned, and bulk button pins for individuals, organizations, and events.'
)

@section('content')
<x-navbar />
    <section id="home" class="min-h-screen flex items-center justify-center px-6">
        <div class="text-center">
            <p class="mb-4 text-sm font-semibold uppercase tracking-[0.25em] text-red-800">
                Pinned by ESN
            </p>

            <h1 class="text-5xl font-bold text-red-950 md:text-7xl">
                Pinning your ideas to life.
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-stone-600">
                Custom and pre-designed button pins made for your ideas,
                organizations, events, and everyday style.
            </p>

            <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                <x-button href="#products">
                    Order Now
                </x-button>

                <x-button href="#products" variant="secondary">
                    Explore Pins
                </x-button>
            </div>
        </div>
    </section>
@endsection