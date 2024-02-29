@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-center">
            <h2>Edit Kategori</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('kategories.index') }}" enctype="multipart/form-data">
                Back</a>
        </div>
    </div>
    
    @if (session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
     <form action="{{ route('kategories.update',$kategori->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kategori</strong>
                    <input type="text" name="nama_kategori" value="{{ $kategori->namakategori }}" class="form-control"
                        placeholder="Kategori">
                    @error('nama_kategori')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>

@endsection
