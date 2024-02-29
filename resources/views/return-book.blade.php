@extends('layouts.mainlayout')

@section('title', 'peminjam')

@section('content')

<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
    <h1 class="mb-5">Pengembalian Buku</h1>



<div class="mt-5">
    @if (session('message'))
    <div class="alert {{session('alert-class')}}">
        {{ session('message')}}
    </div>
    @endif
</div>
    
    <form action="book-return" method="post">
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user_id" id="user" class="form-control">
                <option value="">Select User</option>
                @foreach ($users as $item)
                <option value="{{ $item->id}}">{{ $item->name}}</option>
                    
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="book" class="form-label">Book</label>
            <select name="company_id" id="book" class="form-control">
                <option value="">Select Book</option>
                @foreach ($companies as $company)
                <option value="{{ $company->id}}">{{ $company->judul}}</option>
                    
                @endforeach
            </select>

        </div>

        <div class="">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>
    </form>
</div>

@endsection