<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'master_barang';

    protected $fillable = [
        'id', 'nama_barang', 'harga_satuan',
    ];
}
