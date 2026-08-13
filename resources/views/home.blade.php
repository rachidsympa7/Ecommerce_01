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
    <!-- Featured Products -->
<section id="products" class="max-w-7xl mx-auto px-6 py-20">

    <div class="flex items-end justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                Our Collection
            </p>

            <h2 class="mt-2 text-3xl font-bold">
                Featured Products
            </h2>

            <p class="mt-2 text-gray-600">
                Discover some of our most popular products.
            </p>
        </div>

        <a href="#" class="hidden md:block font-semibold hover:underline">
            View All
        </a>
    </div>


    <!-- Products Grid -->
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Product 1 -->
        <div class="group rounded-xl border bg-white overflow-hidden hover:shadow-lg transition">

            <div class="h-56 bg-gray-100 flex items-center justify-center">
                <span class="text-gray-300 text-2xl font-bold">
                    Product Image
                </span>
            </div>

            <div class="p-5">
                <p class="text-sm text-gray-500">
                    Accessories
                </p>

                <h3 class="mt-1 text-lg font-semibold">
                    Premium Phone Case
                </h3>

                <p class="mt-2 text-gray-600">
                    Stylish and durable phone case.
                </p>

                <div class="mt-4 flex items-center justify-between">
                    <span class="text-lg font-bold">
                        $19.99
                    </span>

                    <button class="rounded-lg bg-black px-4 py-2 text-sm font-semibold text-white hover:bg-gray-800">
                        Add to Cart
                    </button>
                </div>
            </div>

        </div>


        <!-- Product 2 -->
        <div class="group rounded-xl border bg-white overflow-hidden hover:shadow-lg transition">

            <div class="h-56 bg-gray-100 flex items-center justify-center">
                <span class="text-gray-300 text-2xl font-bold">
                    Product Image
                </span>
            </div>

            <div class="p-5">
                <p class="text-sm text-gray-500">
                    Electronics
                </p>

                <h3 class="mt-1 text-lg font-semibold">
                    Wireless Earbuds
                </h3>

                <p class="mt-2 text-gray-600">
                    Enjoy your music anywhere.
                </p>

                <div class="mt-4 flex items-center justify-between">
                    <span class="text-lg font-bold">
                        $39.99
                    </span>

                    <button class="rounded-lg bg-black px-4 py-2 text-sm font-semibold text-white hover:bg-gray-800">
                        Add to Cart
                    </button>
                </div>
            </div>

        </div>


        <!-- Product 3 -->
        <div class="group rounded-xl border bg-white overflow-hidden hover:shadow-lg transition">

            <div class="h-56 bg-gray-100 flex items-center justify-center">
                <span class="text-gray-300 text-2xl font-bold">
                    Product Image
                </span>
            </div>

            <div class="p-5">
                <p class="text-sm text-gray-500">
                    Fashion
                </p>

                <h3 class="mt-1 text-lg font-semibold">
                    Classic Hoodie
                </h3>

                <p class="mt-2 text-gray-600">
                    Comfortable everyday hoodie.
                </p>

                <div class="mt-4 flex items-center justify-between">
                    <span class="text-lg font-bold">
                        $49.99
                    </span>

                    <button class="rounded-lg bg-black px-4 py-2 text-sm font-semibold text-white hover:bg-gray-800">
                        Add to Cart
                    </button>
                </div>
            </div>

        </div>


        <!-- Product 4 -->
        <div class="group rounded-xl border bg-white overflow-hidden hover:shadow-lg transition">

            <div class="h-56 bg-gray-100 flex items-center justify-center">
                <span class="text-gray-300 text-2xl font-bold">
                    Product Image
                </span>
            </div>

            <div class="p-5">
                <p class="text-sm text-gray-500">
                    Accessories
                </p>

                <h3 class="mt-1 text-lg font-semibold">
                    Leather Wallet
                </h3>

                <p class="mt-2 text-gray-600">
                    Simple and elegant leather wallet.
                </p>

                <div class="mt-4 flex items-center justify-between">
                    <span class="text-lg font-bold">
                        $29.99
                    </span>

                    <button class="rounded-lg bg-black px-4 py-2 text-sm font-semibold text-white hover:bg-gray-800">
                        Add to Cart
                    </button>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection