<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{


    protected $table = 'keuangans';
    protected $fillable = ['Tanggal', 'Kategori', 'Catatan', 'Jumlah', 'KategoriID', 'UserID'];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'KategoriID');
    }

    // Relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
    
  
    use HasFactory;
}
