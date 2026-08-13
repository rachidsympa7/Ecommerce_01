@extends('layouts.app')

@section('title', 'Home - Tiz Market')

@section('content')

    <!-- Hero Section -->
    <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-24">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- Hero Content -->
                <div>
                    <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                        Welcome to Tiz Market
                    </p>

                    <h1 class="mt-4 text-5xl md:text-6xl font-bold leading-tight">
                        Discover products
                        <span class="text-gray-500">you'll love.</span>
                    </h1>

                    <p class="mt-6 text-lg text-gray-600 max-w-xl">
                        Shop quality products at great prices.
                        Discover our latest collection and find something perfect for you.
                    </p>

                    <div class="mt-8 flex gap-4">
                        <a
                            href="#products"
                            class="rounded-lg bg-black px-6 py-3 font-semibold text-white hover:bg-gray-800"
                        >
                            Shop Now
                        </a>

                        <a
                            href="#categories"
                            class="rounded-lg border border-gray-300 px-6 py-3 font-semibold hover:bg-white"
                        >
                            Explore Categories
                        </a>
                    </div>
                </div>

                <!-- Hero Visual -->
                <div class="flex justify-center">
                    <div class="flex h-80 w-full max-w-md items-center justify-center rounded-2xl bg-white shadow-sm">
                        <span class="text-4xl font-bold text-gray-300">
                            Tiz Market
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Products placeholder -->
    <section id="products" class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold">
            Featured Products
        </h2>

        <p class="mt-2 text-gray-600">
            Our latest products will appear here.
        </p>
    </section>

@endsection