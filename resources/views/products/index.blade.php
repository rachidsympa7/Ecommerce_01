@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mb-10 text-center">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Our Products
                </h1>

                <p class="mt-3 text-gray-600">
                    Discover our latest products.
                </p>
            </div>

            {{-- @forelse($products as $product)
                <div class="mb-8">
                    <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">
                        <div class="p-5">
                            <h2 class="text-lg font-semibold text-gray-900">
                                {{ $product->name }}
                            </h2>

                            <p class="mt-2 text-sm text-gray-600">
                                {{ $product->description }}
                            </p>

                            <div class="mt-5 flex items-center justify-between">
                                <span class="text-xl font-bold text-gray-900">
                                    ${{ number_format($product->price, 2) }}
                                </span>

                                <span class="text-sm text-gray-500">
                                    {{ $product->stock }} in stock
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="rounded-2xl bg-white p-12 text-center shadow-sm">
                    <h2 class="text-xl font-semibold text-gray-900">
                        No products found
                    </h2>

                    <p class="mt-2 text-gray-600">
                        We don't have any products available yet.
                    </p>
                </div>
            @endforelse --}}
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @forelse($products as $product)
        <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-lg">

            <div class="aspect-square overflow-hidden bg-gray-100">
                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="h-full w-full object-cover transition duration-300 hover:scale-105"
                >
            </div>

            <div class="p-5">
                <h2 class="text-lg font-semibold text-gray-900">
                    {{ $product->name }}
                </h2>

                <p class="mt-2 line-clamp-2 text-sm text-gray-600">
                    {{ $product->description }}
                </p>

                <div class="mt-5 flex items-center justify-between">
                    <span class="text-xl font-bold text-gray-900">
                        ${{ number_format($product->price, 2) }}
                    </span>

                    <span class="text-sm text-gray-500">
                        {{ $product->stock }} left
                    </span>
                </div>
            </div>

        </article>
    @empty
        <div class="col-span-full rounded-2xl bg-white p-12 text-center shadow-sm">
            <h2 class="text-xl font-semibold text-gray-900">
                No products found
            </h2>

            <p class="mt-2 text-gray-600">
                We don't have any products available yet.
            </p>
        </div>
    @endforelse
</div>

        </div>
    </div>
@endsection