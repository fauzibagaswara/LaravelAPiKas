@extends('Layout.navbar')
@section('content')
<div class="pt-8">


    <div class="flex justify-end">
        <!-- Tombol untuk membuka modal -->
        <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2"
            onclick="openModal()">
            <span>Buat Photo</span>
        </button>
    </div>



    <div class=" mb-2 py-12 dark:bg-slate-900">
        <div class="max-w-screen-md mx-auto text-center">
            <h1 class="mb-2 text-3xl font-bold dark:text-white">Photo Saya</h1>
        </div>
        <div class="flex px-3 py-3">
            <div class="max-w-xs w-60 rounded overflow-hidden shadow-lg">
                <!-- Mengatur ukuran card lebih kecil -->
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-4 py-4">
                    <div class="font-bold text-xl mb-2">The Sunset</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia,
                    </p>

                </div>
                <div class="px-6 py-4">
                    {{-- <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Suka</span>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Komentar</span>
                    --}}
                    <button
                        class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"><a
                            href="{{ url('') }}">2024-10-08
                        </a></button>
                </div>
            </div>
        </div>


    </div>
</div>

<div id="albumModal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white w-96 rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Buat Foto Baru</h2>

        <!-- Form Input Modal -->
        <form>
            <div class="mb-4">
                <label for="albumName" class="block text-sm font-medium text-gray-700">Tanggal Dibuat</label>
                <input type="file" id="albumName"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan Gambar Photo">
            </div>

            <div class="mb-4">
                <label for="albumName" class="block text-sm font-medium text-gray-700">Nama Album</label>
                <input type="text" id="albumName"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan nama photo">
            </div>

            <div class="mb-4">
                <label for="albumDescription" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="albumDescription"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    rows="3" placeholder="Masukkan deskripsi Foto"></textarea>
            </div>

            <div class="mb-4">
                <label for="albumName" class="block text-sm font-medium text-gray-700">Tanggal Dibuat</label>
                <input type="date" id="albumName"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan Tanggal Foto">
            </div>

            <!-- Tombol Aksi -->
            <div class="flex justify-end">
                <button type="button" class="px-4 py-2 bg-gray-300 rounded-lg mr-2 hover:bg-gray-400"
                    onclick="closeModal()">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Script untuk membuka dan menutup modal -->
<script>
    function openModal() {
        document.getElementById('albumModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('albumModal').classList.add('hidden');
    }
</script>

@endsection
