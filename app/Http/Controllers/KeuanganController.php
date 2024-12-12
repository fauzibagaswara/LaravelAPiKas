<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KeuanganController extends Controller
{
    // List semua data keuangan berdasarkan user



    public function uploadProfileImage(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $user = auth()->user(); // Ambil user yang sedang login
        $image = $request->file('profile_image');
        $imagePath = $image->store('profile_images', 'public'); // Simpan gambar di folder public/profile_images

        // Menggunakan query builder untuk update profile_image
        \Illuminate\Support\Facades\DB::table('users')
            ->where('id', $user->id)
            ->update(['profile_image' => $imagePath]);

        return response()->json([
            'status' => 'success',
            'message' => 'Profile image uploaded successfully',
            'data' => $user,
        ]);
    }
        public function index(Request $request)
    {
        // Mengambil parameter tahun dan bulan dari request
        $year = $request->input('year');
        $month = $request->input('month');
        $day = $request->input('day'); // Filter hari


        // Membuat query untuk mengambil data keuangan berdasarkan UserID yang sudah login
        $query = Keuangan::where('UserID', Auth::id());

        // Jika tahun diberikan, filter data berdasarkan tahun
        if ($year) {
            $query->whereYear('Tanggal', $year);
        }

        // Jika bulan diberikan, filter data berdasarkan bulan
        if ($month) {
            $query->whereMonth('Tanggal', $month);
        }
        if ($day) {
            $query->whereDay('Tanggal', $day);
        }

        // Mendapatkan data keuangan setelah difilter
        $keuangans = $query->get();

        return response()->json([
            'status' => 'success',
            'data' => $keuangans
        ], 200);
    }

    public function getProfile(Request $request)
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang login
        $saldo = Keuangan::where('UserID', Auth::id())->sum('jumlah'); // Menjumlahkan saldo keuangan berdasarkan UserID
        $joinedAt = $user->created_at->format('M d, Y'); // Mengambil tanggal bergabung pengguna

        // Menambahkan profile_image pengguna
        $profileImage = $user->profile_image ? asset('storage/' . $user->profile_image) : null;

        return response()->json([
            'status' => 'success',
            'data' => [
                'email' => $user->Email,
                'saldo' => $saldo,
                'joined_at' => $joinedAt,
                'profile_image' => $profileImage,  // Menambahkan URL profile image
            ]
        ]);
    }


    // Tambah data keuangan baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Tanggal' => 'required|date',
            'Kategori' => 'required|in:Pemasukan,Pengeluaran',
            'Catatan' => 'required|string|max:255',
            'Jumlah' => 'required|integer',
            'KategoriID' => 'required|exists:kategoris,id',
        ]);

        $keuangan = Keuangan::create([
            'Tanggal' => $validatedData['Tanggal'],
            'Kategori' => $validatedData['Kategori'],
            'Catatan' => $validatedData['Catatan'],
            'Jumlah' => $validatedData['Jumlah'],
            'KategoriID' => $validatedData['KategoriID'],
            'UserID' => Auth::id(),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data keuangan berhasil ditambahkan.',
            'data' => $keuangan
        ], 201);
    }

    // Update data keuangan
    public function update(Request $request, $id)
    {
        $keuangan = Keuangan::where('id', $id)->where('UserID', Auth::id())->firstOrFail();

        $validatedData = $request->validate([
            'Tanggal' => 'required|date',
            'Kategori' => 'required|in:Pemasukan,Pengeluaran',
            'Catatan' => 'required|string|max:255',
            'Jumlah' => 'required|integer',
            'KategoriID' => 'required|exists:kategoris,id',
        ]);

        $keuangan->update($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Data keuangan berhasil diperbarui.',
            'data' => $keuangan
        ], 200);
    }

    // Hapus data keuangan
    public function destroy($id)
    {
        $keuangan = Keuangan::where('id', $id)->where('UserID', Auth::id())->firstOrFail();
        $keuangan->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data keuangan berhasil dihapus.'
        ], 200);
    }
}
