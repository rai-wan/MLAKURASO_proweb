<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tblproduk'; // Sesuai instruksi kamu
    public $timestamps = false;     // Nonaktifkan created_at & updated_at
    protected $fillable = ['nama', 'deskripsi', 'harga'];
}
