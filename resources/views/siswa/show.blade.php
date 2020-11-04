@extends('layout.main')
@section('title', 'Halaman Show')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Show</h1>
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
@endsection
            
       