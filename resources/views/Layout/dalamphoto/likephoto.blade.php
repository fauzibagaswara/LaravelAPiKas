@extends('Layout.navbar')
@section('content')

<div class="container mx-auto mt-10 px-4">
    <!-- Post -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8 max-w-xl mx-auto">
        <!-- Post Header -->
        <div class="flex items-center px-6 py-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-950" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-2.5 0-4.71-1.28-6.02-3.22.03-.99.8-1.78 1.78-1.78 1.38 0 2.66.56 3.62 1.43a7.896 7.896 0 0 1 4.62-1.43c.98 0 1.75.79 1.78 1.78C16.71 18.72 14.5 20 12 20zm0-16a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"/>
            </svg>            <div class="ml-4">
                <h3 class="font-semibold text-lg">Nama Pengguna</h3>
                <p class="text-gray-600 text-sm">2 jam yang lalu</p>
            </div>
        </div>

        <!-- Post Image -->
        <div class="w-full">
            <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
        </div>

        <!-- Post Content -->
        <div class="px-6 py-4">
            <p class="text-gray-800">Ini adalah teks deskripsi dari postingan ini, bisa berupa status atau keterangan dari gambar yang diposting.</p>
        </div>

        <!-- Post Actions -->
        <div class="flex justify-between items-center px-6 py-4 border-t">
            <div class="flex items-center">
                <button class="flex items-center text-gray-600 hover:text-indigo-600">
                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <span>Like</span>
                </button>
            </div>
            <div class="flex items-center">
                <button class="flex items-center text-gray-600 hover:text-indigo-600">
                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 6h-2v-2c0-1.1-.9-2-2-2h-10c-1.1 0-2 .9-2 2v2h-2c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2zm-10 2h4v6h-4v-6zm2 8c-1.1 0-2-.9-2-2h4c0 1.1-.9 2-2 2zm-6-8h4v6h-4v-6zm2 8c-1.1 0-2-.9-2-2h4c0 1.1-.9 2-2 2zm8-8h4v6h-4v-6zm2 8c-1.1 0-2-.9-2-2h4c0 1.1-.9 2-2 2z"/>
                    </svg>
                    <span>Komentar</span>
                </button>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="px-6 py-4 border-t">
            <div class="mb-4">
                <input type="text" placeholder="Tulis komentar..." class="w-full p-2 border rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div class="space-y-4">
                <div class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-950" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-2.5 0-4.71-1.28-6.02-3.22.03-.99.8-1.78 1.78-1.78 1.38 0 2.66.56 3.62 1.43a7.896 7.896 0 0 1 4.62-1.43c.98 0 1.75.79 1.78 1.78C16.71 18.72 14.5 20 12 20zm0-16a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"/>
                    </svg>                    <div>
                        <p class="text-sm font-semibold">Pengguna Lain</p>
                        <p class="text-gray-700">Ini adalah komentar dari pengguna lain.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-950" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-2.5 0-4.71-1.28-6.02-3.22.03-.99.8-1.78 1.78-1.78 1.38 0 2.66.56 3.62 1.43a7.896 7.896 0 0 1 4.62-1.43c.98 0 1.75.79 1.78 1.78C16.71 18.72 14.5 20 12 20zm0-16a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"/>
                    </svg>                    <div>
                        <p class="text-sm font-semibold">Pengguna Lain 2</p>
                        <p class="text-gray-700">Komentar yang kedua dari pengguna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
