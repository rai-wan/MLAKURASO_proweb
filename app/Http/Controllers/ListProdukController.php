<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show()
    {
        $produk = Produk::all();
        return view('list_produk', ['produk' => $produk]);
    }

    public function simpan(Request $request)
    {
        $produk = new Produk();
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->save();

        return redirect()->route('produk.list')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return redirect()->route('produk.list')->with('success', 'Produk berhasil dihapus.');
        }
        return redirect()->route('produk.list')->with('error', 'Produk tidak ditemukan.');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('edit_produk', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
            ]);
            return redirect()->route('produk.list')->with('success', 'Produk berhasil diperbarui.');
        }
        return redirect()->route('produk.list')->with('error', 'Produk tidak ditemukan.');
    }
}
