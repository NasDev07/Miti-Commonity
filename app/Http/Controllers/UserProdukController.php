<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Produk;
use Illuminate\Http\Request;

class UserProdukController extends Controller
{
    public function index()
    {
        $menuHome = 'active';
        $dataProduk = Produk::with('categori')->paginate(3);
        return view('home.PortfolioSection', compact('dataProduk', 'menuHome'));
    }

    public function show($id)
    {
        try {
            $dataproduk = Produk::with('categori')->findOrFail($id);
            return view('home.detail-produk', compact('dataproduk'));
        } catch (Exception $e) {
            return view('home.notfound');
        }
    }
}