@extends('layout.main')
@section('title', 'Halaman Siswa')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Siswa</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fa fa-dashboard"></i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content') 
<div class="content mt-3">

    <div class="animated fadeIn">  
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
@endsection
            
