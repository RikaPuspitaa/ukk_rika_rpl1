<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategories = Kategori::orderBy('id','desc')->paginate(0);
        return view('kategories.index', compact('kategories'));
    }
    
    public function create()
    {
        return view('kategories.crate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);
        
        kategori::create($request->post());

        return redirect()->route('kategories.index')->with('success','Kategori berhasil dibuat');
    }

     public function show(Kategori $kategori)
    {
        return view('kategories.index',compact('kategori'));
    }
 

    public function edit(Kategori $kategori)
    {
        return view('kategories.edit',compact('kategori'));
    }


    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);
        
        $kategori->fill($request->post())->save();

        return redirect()->route('kategories.index')->with('success','kategori Has Been updated successfully');
    }

    public function destroy(Kategori $id)
    {
        $id->delete();

        return redirect()->route('kategories.index') ->with('success','Kategori berhasil di hapus');
    }
}
