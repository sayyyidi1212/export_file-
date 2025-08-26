<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class LelangController extends Controller
{
    public function index()
    {
        $pemenang = [
            ['nama' => 'Andi', 'barang' => 'Laptop', 'harga' => 5000000, 'created_at' => Carbon::now()],
            ['nama' => 'Budi', 'barang' => 'HP', 'harga' => 2000000, 'created_at' => Carbon::now()],
        ];

        return view('pemenang.index', compact('pemenang'));
    }

    public function exportPemenang()
    {
        $pemenang = [
            ['nama' => 'Andi', 'barang' => 'Laptop', 'harga' => 5000000, 'created_at' => Carbon::now()],
            ['nama' => 'Budi', 'barang' => 'HP', 'harga' => 2000000, 'created_at' => Carbon::now()],
        ];

        $pdf = Pdf::loadView('pdf.pemenang', compact('pemenang'))
            ->setPaper('A4', 'portrait');

        return $pdf->download('pemenang-lelang.pdf');
    }

    // pemenang 1
    public function exportPemenang1()
    {
        $items = [
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'RSS I', 'berat' => 678, 'keterangan' => ''],
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'RSS II', 'berat' => 113, 'keterangan' => ''],
        ];
        $total = 791;

        $pdf = Pdf::loadView('pdf.pemenang1', compact('items', 'total'))->setPaper('A4', 'portrait');
        return $pdf->download('pemenang1.pdf');
    }

    // Pemenang 2
    public function exportPemenang2()
    {
        $items = [
            'Sumberwadung' => [
                ['jenis' => 'RSS I', 'berat' => 678, 'harga' => 32500],
                ['jenis' => 'RSS II', 'berat' => 113, 'harga' => 32400],
                ['jenis' => 'RSS III', 'berat' => 565, 'harga' => 32300],
                ['jenis' => 'Cutting', 'berat' => 2260, 'harga' => 30500],
            ],
            'Kalimrawan' => [
                ['jenis' => 'RSS I', 'berat' => 1582, 'harga' => 32500],
                ['jenis' => 'RSS II', 'berat' => 339, 'harga' => 32400],
                ['jenis' => 'Cutting', 'berat' => 678, 'harga' => 30500],
            ]
        ];

        // Hitung total berat per perkebunan
        $totals = [];
        foreach ($items as $perkebunan => $list) {
            $totals[$perkebunan] = array_sum(array_column($list, 'berat'));
        }

        $pdf = Pdf::loadView('pdf.pemenang2', [
            'items'  => $items,
            'totals' => $totals,
        ])->setPaper('A4', 'portrait');

        return $pdf->download('pemenang2.pdf');
    }


    // pemenang 3
    public function exportPemenang3()
    {
        $items = [
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Mix A', 'berat' => 300, 'keterangan' => ''],
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Mix B', 'berat' => 400, 'keterangan' => ''],
        ];
        $total = 700;

        $pdf = Pdf::loadView('pdf.pemenang3', compact('items', 'total'))->setPaper('A4', 'portrait');
        return $pdf->download('pemenang3.pdf');
    }

    // pemenang 4
    public function exportPemenang4()
    {
        $items = [
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Mix C', 'berat' => 250, 'keterangan' => ''],
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Mix D', 'berat' => 350, 'keterangan' => ''],
        ];
        $total = 600;

        $pdf = Pdf::loadView('pdf.pemenang4', compact('items', 'total'))->setPaper('A4', 'portrait');
        return $pdf->download('pemenang4.pdf');
    }

    // pemenang 5
    public function exportPemenang5()
    {
        $items = [
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Mix E', 'berat' => 200, 'keterangan' => ''],
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Mix F', 'berat' => 300, 'keterangan' => ''],
        ];
        $total = 500;

        $pdf = Pdf::loadView('pdf.pemenang5', compact('items', 'total'))->setPaper('A4', 'portrait');
        return $pdf->download('pemenang5.pdf');
    }

    // pemenang 6
    public function exportPemenang6()
    {
        $items = [
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Mix G', 'berat' => 150, 'keterangan' => ''],
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Mix H', 'berat' => 350, 'keterangan' => ''],
        ];
        $total = 500;

        $pdf = Pdf::loadView('pdf.pemenang6', compact('items', 'total'))->setPaper('A4', 'portrait');
        return $pdf->download('pemenang6.pdf');
    }
}
