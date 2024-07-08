<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::orderBy('id' , 'desc')->get();
        return view('category.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create($request->all());
        Alert::success('Berhasil', 'Anda berhasil');

        return redirect()->to('category')->with('success' , 'Tamvag Berhasil');
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
        $edit = Category::find($id);
        return view('category.edit' , compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Category::where('id' , $id)->update([
            'name' => $request->name,
        ]); 
        Alert::success('Berhasil', 'Anda berhasil mengedit');
        return redirect()->to('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            Category::where('id', $id)->delete();
            Alert::success('Berhasil', 'Anda berhasil Menghapus kategodri');
            return redirect()->to('category')->with('massage', 'data berhasil dihapus');
        }
    }
}
