@extends('layout.main')
@section('title', 'Halaman Pendaftaran')
    
@section('container') 
<div class="container">
    <div class="row">
        <div class="col-6">     
            <h1 class="my-4">Pendaftaran Sekolah</h1>

            <a href="/pendaftaran/create" class="btn btn-outline-primary my-3">Input Siswa</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>   
            @endif

            <ul class="list-group table table-striped ">
                @foreach ($pendaftaran as $pendaftaran)  
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$pendaftaran->nama_lengkap}}
                    <a href="/pendaftaran/{{$pendaftaran->id}}" class="btn btn-outline-primary">Detail</a>
                </li>
                @endforeach
            
            </ul>

        </div>
    </div>
</div>
@endsection