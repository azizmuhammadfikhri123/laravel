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
                        
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content') 
<div class="content mt-3">

    <div class="animated fadeIn">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>
                            <h4>Data Lengkap Siswa</h4>      
                        </strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{$student->id}}/edit" class="btn btn-warning">
                            <i class="fa fa-gear"></i> edit
                        </a>
                        <form method="post" action="/siswa/{{ $student->id }}" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-x-circle"></i> delete
                            </button>
                        </form>
                        <a href="/siswa" class="btn btn-primary">
                            <i class="fa fa-backspace-fill"></i> Kembali
                        </a>
                    </div>
                </div>      
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>   
                    @endif
                        
                    <ul class="list-group ">
                        <li class="list-group-item d-flex justify-content-between align-items-center  text-black">
                            Nama : {{$student->nama}}
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center  text-black">
                            NIS : {{$student->nis}}
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center  text-black">
                            Rombel : {{$student->rombel}}
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center  text-black">
                            Rayon : {{$student->rayon}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection                 


