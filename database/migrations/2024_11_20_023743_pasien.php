<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id(); // Primary key (ID otomatis)
            $table->string('nik')->unique(); // NIK (Nomor Induk Kependudukan)
            $table->string('nama'); // Nama Pasien
            $table->string('tempat_lahir'); // Tempat Lahir
            $table->date('tanggal_lahir'); // Tanggal Lahir
            $table->integer('usia'); // Usia Pasien
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']); // Jenis Kelamin
            $table->text('alamat'); // Alamat
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
};
