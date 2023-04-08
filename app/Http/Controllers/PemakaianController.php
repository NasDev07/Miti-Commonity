<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pemakaian;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PemakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuPakai = 'active';
        $pakai = Pemakaian::latest()->paginate(3);
        return view('dashboard.pemakaian.index', compact('pakai', 'menuPakai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuPakai = 'active';
        return view('dashboard.pemakaian.create', compact('menuPakai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|min:5',
                'body' => 'required|min:10',
            ]);

            $validatedData['user_id'] = auth()->user()->id;

            Pemakaian::create($validatedData);

            return redirect()->route('pemakaian.index')->with(['success' => 'created successfully']);
        } catch (Exception $e) {
            return redirect()->route('pemakaian.index')->with(['failed' => 'Ada kesalahan system. error :' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $menuPakai = 'active';
            $pakai = Pemakaian::findOrFail($id);
            return view('dashboard.pemakaian.show', compact('pakai', 'menuPakai'));
        } catch (\Throwable $e) {
            return view('home.notfound');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menuPakai = 'active';
        $pakai = Pemakaian::findOrFail($id);
        return view('dashboard.pemakaian.edit', [
            'pakai' => $pakai,
            'menuPosts' => $menuPakai,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|min:5',
                'body' => 'required|min:10',
            ]);

            $pakai = Pemakaian::findOrFail($id);

            $validatedData['user_id'] = auth()->user()->id;

            $pakai->update($validatedData);

            return redirect()->route('pemakaian.index')->with(['success' => 'Update successfully']);
        } catch (Exception $e) {
            return redirect()->route('pemakaian.index')->with(['failed' => 'Ada kesalahan system. error :' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pakai = Pemakaian::findOrFail($id);
        if ($pakai) {
            $pakai->delete();
            return redirect()->back()->with(['success' => 'deleted successfully']);
        } else {
            return redirect()->back()->with(['failed' => 'Ada kesalahan system']);
        }
    }

    public function postsdel()
    {
        $menuPakai = 'active';
        $pakaideleted = Pemakaian::onlyTrashed('user_id', auth()->user()->id)->get();
        return view('dashboard.pemakaian.delete-list', [
            'pakaideleted' => $pakaideleted,
            'menuPakai' =>  $menuPakai,
        ]);
    }

    public function restore($id)
    {
        Pemakaian::withTrashed()->where('id', $id,)->restore();

        return redirect()->back()->with(['success' => 'successfully']);
    }
}
