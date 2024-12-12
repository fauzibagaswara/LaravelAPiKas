<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal');
            $table->enum('Kate1gori', ['Pemasukan', 'Pengeluaran']);
            $table->string('Catatan', 255);
            $table->integer('Jumlah');
            $table->unsignedBigInteger('KategoriID');
            $table->unsignedBigInteger('UserID');
            $table->foreign('KategoriID')->references('id')->on('kategoris')->onDelete('cascade');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
