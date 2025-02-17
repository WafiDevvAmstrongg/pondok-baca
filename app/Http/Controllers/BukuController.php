<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Buku::all(); // Mengambil semua data buku dari database
        return view('admin.buku', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'year' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $buku = new Buku($request->all());
        
        if ($request->hasFile('photo')) {
            $buku->photo = $request->file('photo')->store('buku', 'public');
        }
        
        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('admin.buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('admin.buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'year' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $buku = Buku::findOrFail($id);
        $buku->fill($request->all());
        
        if ($request->hasFile('photo')) {
            $buku->photo = $request->file('photo')->store('buku', 'public');
        }
        
        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
