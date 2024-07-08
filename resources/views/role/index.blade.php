@extends('layout.app')
@section('title' , 'Data Role')
@section('content')
@include('sweetalert::alert') 
    <div class="table-responsive">

        <div align="right" class="mb-3">
            <a href="{{ route('role.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
           

        </div>





        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="col-1 text-center">No</th>
                    <th>Role</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            {{-- <tbody>
         
                    <tr>
                        @foreach ($data as $key => $d )
              
                        <td class="text-center">{{ $loop->iteration }}</td>                       
                        <td>{{ $d->name }}</td>
                        <td>
                            <a href="{{ route('category.edit' , $d->id) }}" class="btn btn-xs bg-success">Edit
                                <i class="fas fa-edit"></i>
                            </a>

                                <form action="{{ route('category.destroy' , $d->id) }}" method="POST">
                                    @csrf
                                    <input value="delete" type="hidden" name="_method">
                                    <button type="submit" class="btn btn-xs btn-danger show_confirm">Delete</button>
                                </form>

                               
                        </td>
                        
                    </tr>
                    @endforeach
            </tbody>      --}}
        </table>
    </div>
@endsection



