@extends('layout.app')
@section('title' , 'Tambah Kategori' )
@section('content')

    
    <form action="{{ route('barang.store') }}" method="POST">
        {{ csrf_field() }}  
        @csrf
        <div class="form-group mb-3">
            <label for="id_category">Kategori</label>
            <select name="id_category" id="id_category" class="form-control">
                <option value="">Pilih Category</option>
                @foreach ($cc as $cc)
                    <option  value="{{ $cc->id }}">
                        {{ $cc->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="id_satuan">Kategori</label>
            <select name="id_satuan" id="id_satuan" class="form-control">
                <option value="">Pilih Satuan</option>
                @foreach ($st as $st)
                    <option  value="{{ $st->id }}">
                        {{ $st->nama_satuan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Kategori">
        </div>

        {{-- <div class="form-group mb-3">
            <label for="">satuan</label>
            <input type="text" class="form-control" name="satuan" placeholder="Nama Kategori">
        </div> --}}

        <div class="form-group mb-3">
            <label for="">Harga</label>
            <input type="text" class="form-control" name="harga" placeholder="Nama Kategori">
        </div>

        <div class="form-group mb-3">
            <label for="">Stock</label>
            <input type="text" class="form-control" name="stock" placeholder="Nama Kategori">
        </div>

        
      

        <div>
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="submit" class="btn btn-danger" value="Batal">
        </div>
        <div align="right">
            <a href="{{url()->previous() }}" class="btn btn-primary">Kembali</a>
        </div>
    </form>

    
@endsection
