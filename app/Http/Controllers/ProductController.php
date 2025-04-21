<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Ikan Cupang'],
            ['id' => 2, 'produk' => 'Ikan Koi'],
            ['id' => 3, 'produk' => 'Ikan Arwana']
        ];

        return view('list_product', compact('data'));
    }
}
