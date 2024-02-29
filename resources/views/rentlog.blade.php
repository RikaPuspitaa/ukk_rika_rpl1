@extends('layouts.mainlayout')

@section('title', 'peminjam')

@section('content')

<h1>Daftar Peminjaman</h1>
<div><a href="pinjam"  class="btn  btn-info">Report</a></div> 


<div class="mt-5">
    <table class="table" id="tabel-data">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
               

            </tr>
        </thead>
        <tbody>
            @foreach ($rent_logs as $item)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item->user->name}}</td>
                <td>{{ $item->company->judul}}</td>
                <td>{{ $item->rent_date}}</td>
                <td>{{ $item->return_date}}</td>
                
            </tr>
            @endforeach 
        </tbody>
    </table>
</div>

@endsection