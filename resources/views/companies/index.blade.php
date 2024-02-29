@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')


<div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left text-center">
                    <h2>Buku Perpustakaan Digital</h2>
                </div><br><br>
                <div class="pull-right mb-4">
                    <a class="btn btn-primary" href="{{ route('companies.create') }}"> Create </a>
                    <div class="d-flex " style=" float: right; display: block;">
                        {!! $companies->links() !!}
            
                        <div><a href="generate.laporan"  class="btn  btn-info">Report</a></div> 

                    </div>

                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table id="tabel-data" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->judul }}</td>
                        <td>{{ $company->penulis }}</td>
                        <td>{{ $company->penerbit }}</td>
                        <td>{{ $company->tahun }}</td>
                        <td>
                            <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
                                <a class="btn btn-warning" href="{{ route('companies.edit',$company->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
       


       
@endsection 