@extends('layout.main')
@section('title', 'Halaman Detail')
    
@section('container') 
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class='mt-3'>Info Data Siswa</h1>
            
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nama     : {{ $student->nama}}</h5>
                    <h5 class="card-title">NIS      : {{ $student->nis}}</h5>
                    <h5 class="card-title">Rombel   : {{ $student->rombel}}</h5>
                    <h5 class="card-title">Rayon    : {{ $student->rayon}}</h5>
                    <a href="{{$student->id}}/edit" class="btn btn-outline-warning">Edit</a>
                    <form method="post" action="/siswa/{{ $student->id }}" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-outline-danger">delete</button>
                    </form>
                    <a href="/siswa" class="btn btn-outline-primary">kembali</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection