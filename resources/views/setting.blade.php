@extends('Layout.navbar')
@section('content')

<div class="container mx-auto py-4 px-3">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Pengaturan Pengguna</h2>

    <!-- Formulir Pengaturan Pengguna -->
    <div class="bg-white shadow-md rounded-lg p-4">
        <form action="{{ url('') }}" method="POST">
            @csrf
            <!-- Nama -->
            <div class="mb-3">
                <label class="block text-gray-700 text-sm font-medium mb-1" for="name">Nama</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    {{-- value="{{ auth()->user()->name }}" --}}
                    class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500 text-sm"
                />
            </div>

            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label class="block text-gray-700 text-sm font-medium mb-1" for="fullname">Nama Lengkap</label>
                <input
                    type="text"
                    name="fullname"
                    id="fullname"
                    {{-- value="{{ auth()->user()->name }}" --}}
                    class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500 text-sm"
                />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="block text-gray-700 text-sm font-medium mb-1" for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    {{-- value="{{ auth()->user()->email }}" --}}
                    class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500 text-sm"
                />
            </div>

            <!-- Ganti Password -->
            <div x-show="showPassword" class="mt-3 space-y-3">

                <!-- Password Baru -->
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1" for="new_password">Password Baru</label>
                    <input
                        type="password"
                        name="new_password"
                        id="new_password"
                        class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500 text-sm"
                    />
                </div>

           
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label class="block text-gray-700 text-sm font-medium mb-1" for="address">Alamat</label>
                <input
                    type="text"
                    name="address"
                    id="address"
                    class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500 text-sm"
                />
            </div>

            <!-- Tombol Simpan -->
            <div class="flex justify-end mt-4">
                <button
                    type="submit"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-md text-sm transition duration-200"
                >
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
