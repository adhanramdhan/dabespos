<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Satuan::orderBy('id' , 'desc')->get();
        return view('satuan.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('satuan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Satuan::create($request->all());
        Alert::success('Berhasil', 'Anda berhasil');

        return redirect()->to('satuan')->with('success' , 'Tamvag Berhasil');
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
        $edit = Satuan::find($id);
        return view('satuan.edit' , compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Satuan::where('id' , $id)->update([
            'name' => $request->name,
        ]); 
        Alert::success('Berhasil', 'Anda berhasil mengedit');
        return redirect()->to('satuan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            Satuan::where('id', $id)->delete();
            Alert::success('Berhasil', 'Anda berhasil Menghapus kategodri');
            return redirect()->to('satuan')->with('massage', 'data berhasil dihapus');
        }
    }
}
