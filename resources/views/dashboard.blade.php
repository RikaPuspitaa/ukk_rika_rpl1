@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
     {{-- @if (Auth::user()->role == 'Administator')
        <p> Ini halaman dasboard Admin </p>
    @elseif (Auth::user()->role == 'Petugas')
        <p> Ini halaman dasboard Petugas </p>
    @else
        <p> Ini halaman dasboard Peminjam </p>  --}}

       @if(Auth::user()->role == 'Administrator')
            <h1>Selamat Datang di Halaman Admin </h1>
        @endif
       
        @if(Auth::user()->role == 'Petugas')
        <h1>Selamat Datang di Halaman Petugas </h1>
        @endif

        @if(Auth::user()->role == 'Peminjam')
        <h1>Selamat Datang di Halaman Peminjam </h1>
        @endif



        
@endsection
