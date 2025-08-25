<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class Pemenang1Controller extends Controller
{
    public function export()
    {
        // Data dummy
        $items = [
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'RSS I', 'berat' => 678, 'keterangan' => ''],
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'RSS II', 'berat' => 113, 'keterangan' => ''],
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'RSS III', 'berat' => 385, 'keterangan' => ''],
            ['perkebunan' => 'Sumberwadung', 'jenis' => 'Cutting', 'berat' => 540, 'keterangan' => ''],
        ];
        $total = 1716;

        $pdf = Pdf::loadView('pdf.pemenang1', compact('items', 'total'))
                  ->setPaper('A4', 'portrait');

        return $pdf->download('pemenang1.pdf');
    }
}
