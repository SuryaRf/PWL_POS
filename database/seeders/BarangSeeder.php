<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('m_barang')->insert([
                'barang_id'    => $i,
                'barang_kode'  => 'BRG' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'barang_nama'  => 'Barang ' . $i,
                'kategori_id'  => rand(1, 5),  // Acak kategori dari 1 sampai 5
                'harga_beli'   => rand(10000, 50000),
                'harga_jual'   => rand(60000, 100000),
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}
