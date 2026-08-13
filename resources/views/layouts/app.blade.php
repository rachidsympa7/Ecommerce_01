{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Tiz Market')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Tiz Market')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo -->
            <a href="/" class="text-2xl font-bold">
                Tiz Market
            </a>

            <!-- Navigation -->
            <div class="flex items-center gap-6">
                <a href="/" class="hover:text-gray-600">
                    Home
                </a>

                <a href="{{ route('products.index') }}" class="hover:text-gray-600">
                    Products
                </a>

                <a href="#" class="hover:text-gray-600">
                    Categories
                </a>

                <a href="#" class="hover:text-gray-600">
                    Cart
                </a>
            </div>

        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-20 border-t bg-white">
        <div class="max-w-7xl mx-auto px-6 py-8 text-center text-gray-500">
            © {{ date('Y') }} Tiz Market. All rights reserved.
        </div>
    </footer>

</body>
</html>