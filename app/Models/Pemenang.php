<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemenang extends Model
{
    use HasFactory;

    protected $table = 'pemenang';

    protected $fillable = [
        'nama_peserta',
        'barang',
        'harga_menang',
    ];
}
