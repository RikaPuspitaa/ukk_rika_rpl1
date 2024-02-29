@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Books</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('companies.index') }}" enctype="multipart/form-data">
                Back</a>
        </div>
    </div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<form action="{{ route('companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul Buku:</strong>
                <input type="text" name="judul" value="{{ $company->judul }}" class="form-control"
                    placeholder="Judul Buku">
                @error('judul')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis</strong>
                <input type="text" name="penulis" class="form-control" placeholder="Penulis"
                    value="{{ $company->penulis }}">
                @error('penulis')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit</strong>
                <input type="text" name="penerbit" value="{{ $company->penerbit }}" class="form-control"
                    placeholder="Penerbit">
                @error('penerbit')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Terbit</strong>
                <input type="text" name="tahun" value="{{ $company->tahun }}" class="form-control"
                    placeholder="Tahun Terbit">
                @error('tahun')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
</form>
@endsection 