<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->unsignedBigInteger('barang_id'); // Definisikan kolom foreign key secara eksplisit
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
        
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
        
            $table->datetime('stok_tanggal');
            $table->integer('stok_jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
