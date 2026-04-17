<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_buah',
        'jenis',
        'harga',
        'stok'
    ];
}