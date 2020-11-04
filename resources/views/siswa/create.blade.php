@extends('layout.main')
@section('title', 'Halaman Create')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>New Data</h1>
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
        <form method="post" action="/siswa">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" placeholder="Masukan nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control @error('nis')is-invalid @enderror" id="nis" placeholder="Masukan nis" name="nis" value="{{ old('nis') }}">
                @error('nis')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="rombel">Rombel</label>
                <input type="text" class="form-control @error('rombel')is-invalid @enderror" id="rombel" placeholder="Masukan rombel" name="rombel" value="{{ old('rombel') }}">
                @error('rombel')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="rayon">Rayon</label>
                <input type="text" class="form-control @error('rayon')is-invalid @enderror" id="rayon" placeholder="Masukan rayon" name="rayon" value="{{ old('rayon') }}">
                @error('rayon')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-primary">Tambah data </button>
            <a href="/siswa" class="btn btn-outline-info">Kembali</a>
        </form>
    </div>
</div>
@endsection
            
        