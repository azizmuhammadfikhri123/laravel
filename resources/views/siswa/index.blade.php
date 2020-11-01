@extends('layout.main')
@section('title', 'Halaman Siswa')
    
@section('container') 
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class='mt-3'>Daftar Siswa</h1>
            
            <a href="/siswa/create" class= "btn btn-outline-info my-3">Tambah Data Siswa</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>   
            @endif

            <ul class="list-group ">
                @foreach ($siswa as $ssw)
                <li class="list-group-item d-flex justify-content-between align-items-center  text-black">
                    {{$ssw->nama}}
                        <a href="/siswa/{{ $ssw->id}}" class="btn btn-outline-info">Detail</a> 
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection