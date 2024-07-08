@extends('layout.app')
@section('title' , 'Edit Kategori' )
@section('content')

    
    <form action="{{ route('barang.update' , $edit->id) }}" method="POST">
        {{-- {{ csrf_field() }}   --}}
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="id_category">Category</label>
            <select name="id_category" id="id_category" class="form-control">
                <option value="">Pilih Category</option>
                @foreach ($cc as $cc)
                    <option  value="{{ $cc->id }}" {{ $barang->id_category == $cc->id ? 'selected' : '' }}>
                        {{ $cc->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="id_satuan">satuan</label>
            <select name="id_satuan" id="id_satuan" class="form-control">
                <option value="">Pilih satuan</option>
                @foreach ($st as $st)
                    <option  value="{{ $st->id }}" {{ $barang->id_satuan == $st->id ? 'selected' : '' }}>
                        {{ $st->nama_satuan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="title">nama barang</label>
            <input type="text" name="nama_barang" id="title" value="{{ $edit->nama_barang }}" class="form-control">
        </div>

        {{-- <div class="form-group mb-3">
            <label for="caption">satuan</label>
            <textarea name="satuan" id="caption" cols="30" rows="10" class="form-control">{{ $edit->satuan }}</textarea>
        </div> --}}

        <div class="form-group mb-3">
            <label for="caption">harga</label>
            <textarea name="harga" id="caption" cols="30" rows="10" class="form-control">{{ $edit->harga }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="caption">stock</label>
            <textarea name="stock" id="caption" cols="30" rows="10" class="form-control">{{ $edit->stock }}</textarea>
        </div>

        <div class="form-group mb-3">
            <input type="submit" value="Update" class="btn btn-primary">
            <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
        </div>
       
    </form>

    
@endsection
