<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'foto',
        'nama',
        'berat',
        'stok',
        'harga_modal',
        'harga_jual',
        'harga_member',
        'detail',
    ];
}