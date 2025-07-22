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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('nik_sap');
            $table->string('person_grade');
            $table->text('tujuan_dinas');
            $table->string('keperluan_dinas');
            $table->date('berangkat_tanggal')->nullable(); // Tambahkan ->nullable()
            $table->date('kembali_tanggal')->nullable();
            $table->string('fasilitas_transport');
            $table->string('pelatihan');
            $table->string('rombongan');
            // $table->enum('jenis_surat', ['masuk', 'keluar']);
            // $table->string('file_surat')->nullable(); // path file PDF
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
};
