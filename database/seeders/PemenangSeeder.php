<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pemenang;

class PemenangSeeder extends Seeder
{
    public function run(): void
    {
        Pemenang::create([
            'nama_peserta' => 'Andi Wijaya',
            'barang' => 'Laptop Dell',
            'harga_menang' => 5500000,
        ]);

        Pemenang::create([
            'nama_peserta' => 'Siti Rahma',
            'barang' => 'Handphone Samsung',
            'harga_menang' => 3200000,
        ]);
    }
}
