<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon; // jangan lupa import Carbon

class LelangController extends Controller
{
    public function index()
    {
        // dummy data dengan created_at
        $pemenang = [
            ['nama' => 'Andi', 'barang' => 'Laptop', 'harga' => 5000000, 'created_at' => Carbon::now()],
            ['nama' => 'Budi', 'barang' => 'HP', 'harga' => 2000000, 'created_at' => Carbon::now()],
        ];

        return view('pemenang.index', compact('pemenang'));
    }

    public function exportPemenang()
    {
        // dummy data dengan created_at
        $pemenang = [
            ['nama' => 'Andi', 'barang' => 'Laptop', 'harga' => 5000000, 'created_at' => Carbon::now()],
            ['nama' => 'Budi', 'barang' => 'HP', 'harga' => 2000000, 'created_at' => Carbon::now()],
        ];

        $pdf = Pdf::loadView('pdf.pemenang', compact('pemenang'))
                  ->setPaper('A4', 'portrait');

        return $pdf->download('pemenang-lelang.pdf');
    }
}
