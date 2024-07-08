@extends('layout.app')
@section('title' , 'Edit Satuan' )
@section('content')

    
    <form action="{{ route('satuan.update' , $edit->id) }}" method="POST">
        {{-- {{ csrf_field() }}   --}}
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Nama Satuan</label>
            <input value="{{ $edit->nama_stuan }}" type="text" class="form-control" name="nama_satuan" placeholder="Nama Kategori">
        </div>
        {{-- <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
        </div> --}}
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan">
            <a href="{{url()->previous() }}" class="btn btn-danger">Batal</a>
        </div>
       
    </form>

    
@endsection
