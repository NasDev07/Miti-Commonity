<?php

namespace App\Http\Controllers;

use App\Models\Datadiri;
use Illuminate\Http\Request;

class DatadiriUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Datadiri::where('user_id', auth()->user()->id)->first();
        $datauser = 'active';
        return view('dashboard.account.index', compact('datauser', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datauser = 'active';
        return view('dashboard.account.index', compact('datauser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5000',
            'gender' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'data_lahir' => 'nullable|date',
            'univ' => 'nullable|string|max:255',
            'nim' => 'nullable|string|max:255',
            'akungit' => 'nullable|string|max:255',
            'akunig' => 'nullable|string|max:255',
            'body' => 'nullable|min:10',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Datadiri::create($validatedData);

        // Kembalikan user ke halaman yang sama
        return redirect()->back()->with('success', 'successfully');
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
        $datauser = 'updated';
        $data = Datadiri::all();
        return view('dashboard.account.index', compact('datauser', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5000',
            'gender' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'data_lahir' => 'nullable|date', // corrected field name
            'univ' => 'nullable|string|max:255',
            'nim' => 'nullable|string|max:255',
            'akungit' => 'nullable|string|max:255',
            'akunig' => 'nullable|string|max:255',
            'body' => 'nullable|min:10',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Datadiri::where('id', $id)->update($validatedData); // update instead of create

        return redirect()->back()->with('success', 'successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Datadiri::findOrFail($id);
        $data->delete();
        return redirect()->back()->with(['success' => 'deleted successfully']);
    }
}
