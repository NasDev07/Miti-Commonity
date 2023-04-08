<?php

namespace App\Http\Controllers;

use App\Models\Pemakaian;
use Illuminate\Http\Request;

class UserPemakaianController extends Controller
{
    public function index()
    {
        $carapakai = Pemakaian::all();
        return view('home.cara-pakai', compact('carapakai'));
    }
}
