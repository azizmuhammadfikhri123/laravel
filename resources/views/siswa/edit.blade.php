@extends('layout.main')
@section('title', 'Update Data Siswa')
    
@section('container') 
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class='mt-3'>Update Data Siswa</h1>
            
            <form method="post" action="/siswa/{{ $student->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" placeholder="Masukan nama" name="nama" value="{{ $student->nama }}">
                    @error('nama')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control @error('nis')is-invalid @enderror" id="nis" placeholder="Masukan nis" name="nis" value="{{ $student->nis }}">
                    @error('nis')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rombel">Rombel</label>
                    <input type="text" class="form-control @error('rombel')is-invalid @enderror" id="rombel" placeholder="Masukan rombel" name="rombel" value="{{ $student->rombel}}">
                    @error('rombel')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rayon">Rayon</label>
                    <input type="text" class="form-control @error('rayon')is-invalid @enderror" id="rayon" placeholder="Masukan rayon" name="rayon" value="{{ $student->rayon }}">
                    @error('rayon')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-outline-info">Update data </button>
                <a href="/siswa/{{ $student->id }}" class="btn btn-outline-primary">Kembali</a>
            </form>
            
        </div>
    </div>
</div>
@endsection