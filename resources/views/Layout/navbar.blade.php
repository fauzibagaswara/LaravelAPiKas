<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Album')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900">

    <!-- Navigasi -->
    <nav class="bg-gray-200 shadow shadow-gray-300 w-full px-8">
        <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
            <!-- Logo -->
            <div class="text-indigo-500 md:order-1 flex items-center justify-center text-center py-4 pt-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                </svg>
                <h1 class="ml-3 text-lg font-semibold">GalleryPhoto</h1>
            </div>

            <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
                <ul class="flex font-semibold justify-between">
                    <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href={{ url('dashboard/photos') }}>Photo</a></li>
                    <li class="md:px-4 md:py-2 hover:text-indigo-500"><a href={{ url('/dashboard/album') }}>Album</a></li>
                </ul>
            </div>

            <!-- Tombol Profile dengan Dropdown -->
            <div class="order-2 md:order-3 relative" x-data="{ open: false }">
                <button
                    @click="open = !open"
                    class="px-2 py-2 hover:bg-indigo-600   bg-cyan-800  text-gray-900 rounded-xl flex items-center gap-2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-950" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-2.5 0-4.71-1.28-6.02-3.22.03-.99.8-1.78 1.78-1.78 1.38 0 2.66.56 3.62 1.43a7.896 7.896 0 0 1 4.62-1.43c.98 0 1.75.79 1.78 1.78C16.71 18.72 14.5 20 12 20zm0-16a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"/>
                    </svg>
                    <span>Profile</span>
                </button>

                <!-- Dropdown Menu -->
                <div
                    x-show="open"
                    @click.away="open = false"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-20"
                >
                    <a href="{{ url('/setting') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                    <a href="{{ url('/logout') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="container mx-auto py-6">
        @yield('content')
    </div>

</body>
</html>
