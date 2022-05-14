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
        Schema::create('tb_pinjam_buku', function (Blueprint $table) {
            $table->string('id_peminjaman')->primary();
            $table->unsignedBigInteger('id_buku');
            $table->foreign('id_buku')->references('id_buku')->on('tb_detail_buku');
            $table->string('judul_buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pinjam_buku');
    }
};
