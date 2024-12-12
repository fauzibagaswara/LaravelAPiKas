<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return response()->json([
            'status' => 'success',
            'data' => $kategoris
        ], 200);
    }

    // Tambah kategori baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NamaKategori' => 'required|string|max:255',
        ]);

        $kategori = Kategori::create([
            'NamaKategori' => $validatedData['NamaKategori'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Kategori berhasil ditambahkan.',
            'data' => $kategori
        ], 201);
    }

    // Update kategori
    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $validatedData = $request->validate([
            'NamaKategori' => 'required|string|max:255',
        ]);

        $kategori->update($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Kategori berhasil diperbarui.',
            'data' => $kategori
        ], 200);
    }

    // Hapus kategori
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Kategori berhasil dihapus.'
        ], 200);
    }
}
