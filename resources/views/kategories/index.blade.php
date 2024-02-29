@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-center mt-2">
            <h2>Kategori Buku </h2>
        </div>
        <div class="pull-right mb-3 ">
            <a class="btn btn-success mt-2" href="{{ route('kategories.create') }}">Create Kategori</a>
            {!! $kategories->links() !!}
            <div class="d-flex " style=" float: right; display: block;">
                <div><a href="category"  class="btn  btn-info">Report</a></div> 
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table id="tabel-data" class="table table-bordered mt-3">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama kategori</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategories as $kategori)
            <tr>
                <td>{{ $kategori->id }}</td>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>
                   {{--  <form action="{{ route('kategories.destroy', $kategori->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('kategories.edit',$kategori->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>  --}}
                    {{-- <a class="btn btn-primary" href="{{ route('kategories.edit',$kategori->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('kategories.destroy',$kategori->id) }} " method="Post">Delete</a>
                    @method('DELETE')
                        @csrf --}}
                        <a href="/ubah/{{$kategori->id}}" class="btn btn-warning ">Edit</a>  @csrf
                        <a href="/hapus/{{$kategori->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>

{!! $kategories->links() !!}
@endsection 