<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use App\Models\CategoryProduk;

class CategoryProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuProduk = 'active';
        $categoryproduk = CategoryProduk::all();
        return view('dashboard.categories-pruduk.index', compact('categoryproduk', 'menuProduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuProduk = 'active';
        return view('dashboard.categories-pruduk.form_add', compact('menuProduk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);

            // insert data
            CategoryProduk::create([
                'name' => $request->name,
                'slug' => $request->slug,
            ]);

            return redirect()->route('categoryproduk.index')->with(['success' => 'berhasil ditambahkan']);
        } catch (Exception $e) {
            return redirect()->route('categoryproduk.index')->with(['failed' => 'Ada kesalahan system']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menuProduk = 'active';
        $edit = CategoryProduk::findOrFail($id);
        return view('dashboard.categories-pruduk.form_edit', compact('edit', 'menuProduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);
            $categories = CategoryProduk::findOrFail($id);

            $categories->name = $request->name;
            $categories->slug = $request->slug;

            $categories->update();

            return redirect()->route('categoryproduk.index')->with(['success' => 'berhasil diupdate']);
        } catch (Exception $e) {
            return redirect()->route('categoryproduk.index')->with(['failed' => 'gagal diupdate. error: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoryproduk = CategoryProduk::findOrFail($id);
        if ($categoryproduk) {
            $categoryproduk->delete();
            return redirect()->back()->with(['success' => ' berhasil dihapus']);
        } else {
            return redirect()->back()->with(['failed' => 'User not found']);
        }
    }
}