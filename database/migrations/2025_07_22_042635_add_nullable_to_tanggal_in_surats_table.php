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
        Schema::table('surats', function (Blueprint $table) {
            $table->date('berangkat_tanggal')->nullable()->change();
            $table->date('kembali_tanggal')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surats', function (Blueprint $table) {
            // Jika Anda ingin mengembalikan ke NOT NULL
            // $table->date('berangkat_tanggal')->change();
            // $table->date('kembali_tanggal')->change();

        });
    }
};
