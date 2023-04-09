<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoryProduk;
use Illuminate\Support\Facades\Storage;

class ProducController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::where('user_id', auth()->user()->id)->paginate(10);
        $menuProduk = 'active';
        return view('dashboard.produk.index', compact('menuProduk', 'produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuProduk = 'active';
        $categories = CategoryProduk::all();
        return view('dashboard.produk.create', compact('menuProduk', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // category_produk_id	user_id	title	image	excerpt	harga	body
        try {
            $validatedData = $request->validate([
                'title' => 'nullable',
                'category_produk_id' => 'required',
                'image' => 'image|file|mimes:jpeg,png,jpg,max:3072',
            ]);

            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('images');
            }

            $validatedData['user_id'] = auth()->user()->id;
            $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

            Produk::create($validatedData);

            return redirect()->route('produk.index')->with(['success' => 'created successfully']);
        } catch (Exception $e) {
            return redirect()->route('produk.index')->with(['failed' => 'Ada kesalahan system. error :' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menuProduk = 'active';
        $produk = Produk::findOrFail($id);
        return view('dashboard.produk.show', compact('produk', 'menuProduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menuProduk = 'active';
        $produk = Produk::with('categori')->findOrFail($id);
        return view('dashboard.produk.edit', [
            'produk' => $produk,
            'menuProduk' => $menuProduk,
            'categories' => CategoryProduk::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'nullable',
                'category_produk_id' => 'required',
                'image' => 'image|file|mimes:jpeg,png,jpg,max:3024',
            ]);

            $post = Produk::findOrFail($id);

            if ($request->file('image')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $validatedData['image'] = $request->file('image')->store('images');
            }

            $validatedData['user_id'] = auth()->user()->id;
            $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);

            $post->update($validatedData);

            return redirect()->route('produk.index')->with(['success' => 'Update successfully']);
        } catch (Exception $e) {
            return redirect()->route('produk.index')->with(['failed' => 'Ada kesalahan system. error :' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk) {
            $produk->delete();
            return redirect()->back()->with(['success' => 'deleted successfully']);
        } else {
            return redirect()->back()->with(['failed' => 'Ada kesalahan system']);
        }
    }
}
