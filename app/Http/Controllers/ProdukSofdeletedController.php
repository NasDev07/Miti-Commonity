<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukSofdeletedController extends Controller
{

    public function postsdel()
    {
        $menuProduk = 'active';
        $produkdeleted = Produk::onlyTrashed('user_id', auth()->user()->id)->get();
        return view('dashboard.produk.delete-list', [
            'produkdeleted' => $produkdeleted,
            'menuProduk' =>  $menuProduk,
        ]);
    }

    public function restore($id)
    {
        Produk::withTrashed()->where('id', $id,)->restore();
        return redirect()->back()->with(['success' => 'successfully']);
    }
}