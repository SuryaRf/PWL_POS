<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'KTG001', 'kategori_nama' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 2, 'kategori_kode' => 'KTG002', 'kategori_nama' => 'Pakaian',     'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 3, 'kategori_kode' => 'KTG003', 'kategori_nama' => 'Makanan',     'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 4, 'kategori_kode' => 'KTG004', 'kategori_nama' => 'Minuman',     'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 5, 'kategori_kode' => 'KTG005', 'kategori_nama' => 'Alat Tulis',  'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
