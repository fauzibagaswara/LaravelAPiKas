@extends('Layout.navbar')

@section('content')
<div class="pt-8">
    <div class="flex justify-end">
        <!-- Tombol untuk membuka modal -->
        <button
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2"
            onclick="openModal()"
        >
            <span>Buat Album</span>
        </button>
    </div>

    <div class="flex flex-row items-start space-y-5 gap-4 ">
        <a href="{{url('photos/users')}}">
        <div class="mt-4 mb-5">
            <div
                class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
                <img class="block mx-auto h-24 sm:mx-0 sm:shrink-0" src="/img/icon.png" alt="Woman's Face">
                <div class="space-y-2 sm:text-left">
                    <div class="space-y-0.5">
                        <p class="text-lg text-black font-semibold">Album Foto</p>
                        <p class="text-slate-500">Foto Kesehatan</p>
                    </div>
                    <p class="text-slate-500 text-sm">2024</p>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>

<!-- Modal -->

<div id="albumModal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white w-96 rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Buat Album Baru</h2>

        <!-- Form Input Modal -->
        <form>
            <div class="mb-4">
                <label for="albumName" class="block text-sm font-medium text-gray-700">Nama Album</label>
                <input
                    type="text"
                    id="albumName"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan nama album"
                >
            </div>

            <div class="mb-4">
                <label for="albumDescription" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea
                    id="albumDescription"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    rows="3"
                    placeholder="Masukkan deskripsi album"
                ></textarea>
            </div>

            <div class="mb-4">
                <label for="albumName" class="block text-sm font-medium text-gray-700">Tanggal Dibuat</label>
                <input
                    type="date"
                    id="albumName"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan nama album"
                >
            </div>
            <!-- Tombol Aksi -->
            <div class="flex justify-end">
                <button
                    type="button"
                    class="px-4 py-2 bg-gray-300 rounded-lg mr-2 hover:bg-gray-400"
                    onclick="closeModal()"
                >
                    Batal
                </button>
                <button
                    type="submit"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg"
                >
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
