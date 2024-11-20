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
        Schema::create('rekam_medis_laboratorium', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('rekam_medis')->unique(); // Nomor Rekam Medis
            $table->string('jenis_pemeriksaan'); // Jenis pemeriksaan (misalnya: darah, urine)
            $table->text('hasil_pemeriksaan'); // Hasil laboratorium
            $table->string('satuan')->nullable(); // Satuan (misalnya: g/dL, mmol/L)
            $table->string('nilai_normal')->nullable(); // Rentang nilai normal
            $table->date('tanggal_pemeriksaan'); // Tanggal pemeriksaan dilakukan
            $table->text('catatan_tambahan')->nullable(); // Catatan tambahan
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
        //
    }
};
