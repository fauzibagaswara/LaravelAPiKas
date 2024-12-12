@extends('Layout.navbar')
@section('content')
    <div class="mt-5 mb-5 py-8 dark:bg-slate-900">
        <div class="max-w-screen-md mx-auto text-center">
            <h1 class="mb-4 text-2xl font-bold dark:text-white">Photos <span class="text-indigo-600">Diri kamu dan
                    orang</span></h1>
        </div>
        <div class="flex">
            <div class="max-w-xs rounded-lg overflow-hidden shadow-md bg-white dark:bg-slate-800">
                <!-- Gambar dengan ukuran lebih kecil -->
                <img class="w-full h-48 object-cover" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-4 py-4">
                    <h2 class="font-semibold text-lg mb-2 dark:text-white">The Sunset</h2>
                    <p class="text-gray-700 dark:text-gray-300 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia.
                    </p>
                </div>
                <div class="px-4 py-3 flex justify-between">
                    <button class="bg-blue-200 hover:bg-blue-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 transition duration-200 ease-in-out">
                        <a href="{{ url('/photos/page') }}">View Photo</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
