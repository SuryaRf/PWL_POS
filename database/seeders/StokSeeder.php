<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_stok')->insert([
                'barang_id'    => $i,      // Mengacu ke barang 1 s/d 10
                'user_id'      => 1,       // Asumsi: user dengan ID 1 sudah ada
                'stok_tanggal' => now(),
                'stok_jumlah'  => rand(10, 100),
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}
