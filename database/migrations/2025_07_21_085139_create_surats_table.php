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
            $table->string('nomor_surat');
            $table->string('nama_surat');
            $table->date('tanggal_surat');
            $table->string('pengirim');
            $table->string('perihal');
            $table->text('isi');
            $table->enum('jenis_surat', ['masuk', 'keluar']);
            $table->string('file_surat')->nullable(); // path file PDF
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
