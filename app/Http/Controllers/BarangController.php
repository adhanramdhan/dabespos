<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use App\Models\Satuan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Barang::with('category' , 'satuan')->get();
        // return $datas;
        $data = Category::orderBy('id' , 'desc')->get();
        return view('barang.index', compact('data' , 'datas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $cc = Category::orderBy('id' , 'desc')->get();
        $st = Satuan::orderBy('id' , 'desc')->get();
        return view('barang.create' , compact('cc' , 'st'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create($request->all()); 
   

        // Barang::create([
           
        //     'id_category' => $request->id_category,
        //     'nama_barang' => $request->nama_barang,
        //     'stock' => $request->stock,
        //     'harga' => $request->harga,
        //     'satuan' => $request->satuan,
        // ]); 
        Alert::success('Berhasil', 'Anda berhasil');

        return redirect()->to('barang')->with('success' , 'Tamvag Berhasil');
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
        $barang = Barang::findOrFail($id);
        $cc = Category::all();
        $st = Satuan::all();
        $edit = Barang::find($id);
        return view('barang.edit' , compact('edit' , 'cc' , 'barang' , 'st'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        // Barang::where('id' , $id)->update($request->all()); 
        Barang::where('id' , $id)->update([
          
            'id_category' => $request->id_category,
            'nama_barang' => $request->nama_barang,
            'stock' => $request->stock,
            'harga' => $request->harga,
            'id_satuan' => $request->id_satuan,
        ]); 
        Alert::success('Berhasil', 'Anda berhasil mengupdate');
        return redirect()->to('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            Barang::where('id', $id)->delete();
            Alert::success('Berhasil', 'Anda berhasil Menghapus kategodri');
            return redirect()->to('barang')->with('massage', 'data berhasil dihapus');
        }
    }
}
