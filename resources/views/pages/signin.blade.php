@extends('layouts.app')

@section('title', 'Sign In | Pinned by ESN')

@section(
    'description',
    'Sign in to the Pinned by ESN customer portal.'
)

@section('content')

<div class="relative flex min-h-screen items-center justify-center overflow-hidden bg-[#fffaf6] px-6 py-12">

    {{-- Decorative backgrounds --}}
    <div
        class="pointer-events-none absolute -left-32 top-20 h-80 w-80 rounded-full bg-red-100/50 blur-3xl"
        aria-hidden="true"
    ></div>

    <div
        class="pointer-events-none absolute -right-32 bottom-10 h-96 w-96 rounded-full bg-rose-100/50 blur-3xl"
        aria-hidden="true"
    ></div>

    <div class="relative w-full max-w-md">

        {{-- Back to Home --}}
        <a
            href="{{ url('/') }}"
            class="mb-8 inline-flex items-center gap-2 text-sm font-semibold text-red-900 transition hover:text-red-700"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.8"
                stroke="currentColor"
                class="h-4 w-4"
                aria-hidden="true"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                />
            </svg>

            Back to home
        </a>

        {{-- Sign In Card --}}
        <div class="rounded-[2rem] border border-red-100 bg-white p-8 shadow-xl shadow-red-950/5 sm:p-10">

            {{-- Logo --}}
            <div class="text-center">
                <a
                    href="{{ url('/') }}"
                    class="inline-flex justify-center"
                    aria-label="Pinned by ESN home"
                >
                    <img
                        src="{{ asset('images/logo/pinned-logo-navbar.png') }}"
                        alt="Pinned by ESN"
                        class="h-16 w-auto object-contain"
                    >
                </a>

                <p class="mt-6 text-xs font-bold uppercase tracking-[0.3em] text-red-800">
                    Customer Portal
                </p>

                <h1 class="mt-3 text-4xl font-bold tracking-tight text-red-950">
                    Welcome back.
                </h1>

                <p class="mt-3 text-sm leading-6 text-stone-500">
                    Sign in to access your PINNED. account.
                </p>
            </div>

            {{-- Mock Form --}}
            <form class="mt-8 space-y-5" onsubmit="return false;">

                <div>
                    <label
                        for="email"
                        class="mb-2 block text-sm font-semibold text-red-950"
                    >
                        Email address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                        autocomplete="email"
                        class="w-full rounded-xl border border-red-100 bg-stone-50 px-4 py-3 text-sm text-stone-900 outline-none transition placeholder:text-stone-400 focus:border-red-800 focus:ring-2 focus:ring-red-100"
                    >
                </div>

                <div>
                    <div class="mb-2 flex items-center justify-between">
                        <label
                            for="password"
                            class="block text-sm font-semibold text-red-950"
                        >
                            Password
                        </label>

                        <span class="text-xs text-stone-400">
                            Forgot password?
                        </span>
                    </div>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        class="w-full rounded-xl border border-red-100 bg-stone-50 px-4 py-3 text-sm text-stone-900 outline-none transition placeholder:text-stone-400 focus:border-red-800 focus:ring-2 focus:ring-red-100"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full rounded-full bg-red-900 px-5 py-3 font-semibold text-white transition hover:bg-red-800"
                >
                    Sign In
                </button>

            </form>

            {{-- Mock Notice --}}
            <div class="mt-7 rounded-2xl border border-red-100 bg-red-50/70 px-4 py-4 text-center">
                <p class="text-xs font-bold uppercase tracking-[0.16em] text-red-900">
                    Coming Soon
                </p>

                <p class="mt-1 text-xs leading-5 text-stone-500">
                    The PINNED. customer portal is currently being prepared.
                    Sign in functionality is for interface demonstration only.
                </p>
            </div>

        </div>

        <p class="mt-6 text-center text-xs text-stone-400">
            © {{ date('Y') }} Pinned by ESN. All rights reserved.
        </p>

    </div>
</div>

@endsection