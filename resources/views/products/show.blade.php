@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 py-8 sm:py-12">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

            {{-- Back to products --}}
            <div class="mb-6">
                <a
                    href="{{ route('products.index') }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 transition hover:text-gray-900"
                >
                    <span>←</span>
                    Back to products
                </a>
            </div>

            {{-- Product --}}
            <div class="overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-gray-200">

                <div class="grid md:grid-cols-2">

                    {{-- Product Image --}}
                    <div class="flex min-h-[480px] items-center justify-center bg-gray-50 p-8 sm:p-10">
                        <div class="relative">

                            @if($product->stock > 0)
                                <span
                                    class="absolute left-4 top-4 z-10 rounded-full bg-white px-3 py-1 text-xs font-semibold text-green-700 shadow-sm"
                                >
                                    In stock
                                </span>
                            @else
                                <span
                                    class="absolute left-4 top-4 z-10 rounded-full bg-white px-3 py-1 text-xs font-semibold text-red-600 shadow-sm"
                                >
                                    Out of stock
                                </span>
                            @endif

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="h-80 w-80 rounded-2xl object-contain transition duration-500 hover:scale-105 sm:h-96 sm:w-96"
                            >

                        </div>
                    </div>

                    {{-- Product Details --}}
                    <div class="flex flex-col justify-center p-8 sm:p-10 lg:p-12">

                        <p class="text-sm font-medium uppercase tracking-wider text-gray-500">
                            Product
                        </p>

                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                            {{ $product->name }}
                        </h1>

                        {{-- Description --}}
                        <p class="mt-5 text-base leading-7 text-gray-600">
                            {{ $product->description }}
                        </p>

                        {{-- Price & Stock --}}
                        <div class="mt-7 border-y border-gray-100 py-5">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">
                                ${{ number_format($product->price, 2) }}
                            </span>

                            <p class="mt-2 text-sm text-gray-500">
                                {{ $product->stock }} items available
                            </p>
                        </div>

                        {{-- Quantity --}}
                        <div class="mt-6">
                            <label
                                for="quantity"
                                class="mb-2 block text-sm font-semibold text-gray-700"
                            >
                                Quantity
                            </label>

                            <input
                                id="quantity"
                                type="number"
                                min="1"
                                max="{{ $product->stock }}"
                                value="1"
                                @disabled($product->stock === 0)
                                class="w-24 rounded-xl border border-gray-300 px-4 py-3 text-center text-sm outline-none transition focus:border-gray-900 focus:ring-1 focus:ring-gray-900 disabled:bg-gray-100"
                            >
                        </div>

                        {{-- Actions --}}
                        <div class="mt-7 flex flex-col gap-3 sm:flex-row">

                            <button
                                type="button"
                                @disabled($product->stock === 0)
                                class="flex-1 rounded-xl bg-gray-900 px-6 py-3.5 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:bg-gray-700 hover:shadow-lg disabled:cursor-not-allowed disabled:bg-gray-300 disabled:hover:translate-y-0 disabled:hover:shadow-none"
                            >
                                Add to cart
                            </button>

                            <a
                                href="{{ route('products.index') }}"
                                class="flex-1 rounded-xl border border-gray-300 px-6 py-3.5 text-center text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
                            >
                                Continue shopping
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection