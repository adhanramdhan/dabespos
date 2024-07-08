@extends('layout.app')
@section('title' , 'Data Kategori')
@section('content')
@include('sweetalert::alert') 
    <div class="table-responsive">

        <div align="right" class="mb-3">
            <a href="{{ route('satuan.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
           

        </div>





        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="col-1 text-center">No</th>
                    <th>Nama Satuan</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
         
                    <tr>
                        @foreach ($data as $key => $d )
              
                        <td class="text-center">{{ $loop->iteration }}</td>                       
                        <td>{{ $d->nama_satuan }}</td>
                        <td>
                            <a href="{{ route('satuan.edit' , $d->id) }}" class="btn btn-xs bg-success">Edit
                                <i class="fas fa-edit"></i>
                            </a>
{{--                             
                            <a href="{{ route('Satuan.destroy', $d->id) }}" class="btn btn-xs bg-danger" value="delete">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </a> --}}

                            

                                {{-- <form method="POST" action="{{ route('Satuan.destroy', $d->id) }}"
                                    class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                </form> --}}

                                <form action="{{ route('satuan.destroy' , $d->id) }}" method="POST">
                                    @csrf
                                    <input value="delete" type="hidden" name="_method">
                                    <button type="submit" class="btn btn-xs btn-danger show_confirm">Delete</button>
                                </form>

                               
                        </td>
                        
                    </tr>
                    @endforeach
            </tbody>     
        </table>
    </div>
@endsection



