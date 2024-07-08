@extends('layout.app')
@section('title' , 'Tambah Satuan' )
@section('content')

    
    <form action="{{ route('satuan.store') }}" method="POST">
        {{ csrf_field() }}  
        <div class="form-group mb-3">
            <label for="">Nama Satuan</label>
            <input type="text" class="form-control" name="nama_satuan" placeholder="Nama Kategori">
        </div>
        {{-- <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
        </div> --}}
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="submit" class="btn btn-danger" value="Batal">
        </div>
        <div align="right">
            <a href="{{url()->previous() }}" class="btn btn-primary">Kembali</a>
        </div>
    </form>

    
@endsection
