<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

     protected $table  = 'kategoris';
     protected $fillable = ['NamaKategori'];
    use HasFactory;


    
    public function keuangans()
    {
        return $this->hasMany(Keuangan::class,'KategoriID');
    }

}
