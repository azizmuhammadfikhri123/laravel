@extends('layout.main')
@section('title', 'Halaman Input')
    
@section('container') 
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="jumbotron">
                <h1 class='mt-3'>Input Siswa</h1>
                <hr class="my-4">
                <form method="post" action="/pendaftaran">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap')is-invalid @enderror" id="nama_lengkap" placeholder="Masukan Nama lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                        @error('nama_lengkap')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-control @error('jenis_kelamin')is-invalid @enderror" name="jenis_kelamin" value="{{old('jenis_kelamin')}}"> 
                            <option >Jenis Kelamin</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir')is-invalid @enderror" id="tempat_lahir" placeholder="Masukan Tempat lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}">
                        @error('tempat_lahir')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control @error('tanggal_lahir')is-invalid @enderror" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                        @error('tanggal_lahir')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control @error('agama')is-invalid @enderror" id="agama" placeholder="Masukan Agama" name="agama" value="{{old('agama')}}">
                        @error('agama')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control @error('alamat')is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{old('alamat')}}"></textarea> 
                        @error('alamat')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="rt">Rt</label>
                        <input type="text" class="form-control @error('rt')is-invalid @enderror" id="rt" placeholder="Masukan Rt" name="rt" value="{{old('rt')}}">
                        @error('rt')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="rw">Rw</label>
                        <input type="text" class="form-control @error('rw')is-invalid @enderror" id="rw" placeholder="Masukan Rw" name="rw" value="{{old('rw')}}">
                        @error('rw')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control @error('kelurahan')is-invalid @enderror" id="kelurahan" placeholder="Masukan kelurahan" name="kelurahan" value="{{old('kelurahan')}}">
                        @error('kelurahan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" id="kecamatan" placeholder="Masukan Kecamatan" name="kecamatan" value="{{old('kecamatan')}}">
                        @error('kecamatan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <input type="text" class="form-control @error('kabupaten')is-invalid @enderror" id="kabupaten" placeholder="Masukan Kabupaten" name="kabupaten" value="{{old('kabupaten')}}">
                        @error('kabupaten')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="text" class="form-control @error('kode_pos')is-invalid @enderror" id="kode_pos" placeholder="Masukan Kode Pos" name="kode_pos" value="{{old('kode_pos')}}">
                        @error('kode_pos')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">No Hp</label>
                        <input type="text" class="form-control @error('nomor_hp')is-invalid @enderror" id="nomor_hp" placeholder="Masukan Nomor Hp" name="nomor_hp" value="{{old('nomor_hp')}}">
                        @error('nomor_hp')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Masukan email" name="email" value="{{old('email')}}">
                        @error('email')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control @error('nama_ayah')is-invalid @enderror" id="nama_ayah" placeholder="Masukan Nama Ayah" name="nama_ayah" value="{{old('nama_ayah')}}">
                        @error('nama_ayah')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control @error('nama_ibu')is-invalid @enderror" id="nama_ibu" placeholder="Masukan Nama Ibu" name="nama_ibu" value="{{old('nama_ibu')}}">
                        @error('nama_ibu')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="asal_smp">Asal SMP</label>
                        <input type="text" class="form-control @error('asal_smp')is-invalid @enderror" id="asal_smp" placeholder="Masukan Asal SMP" name="asal_smp" value="{{old('asal_smp')}}">
                        @error('asal_smp')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control @error('nisn')is-invalid @enderror" id="nisn" placeholder="Masukan NISN" name="nisn" value="{{old('nisn')}}">
                        @error('nisn')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kartu_keluarga">Kartu Keluarga</label>
                        <input type="text" class="form-control @error('kartu_keluarga')is-invalid @enderror" id="kartu_keluarga" placeholder="Masukan Kartu Keluarga" name="kartu_keluarga" value="{{old('kartu_keluarga')}}">
                        @error('kartu_keluarga')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik_siswa">NIK Siswa</label>
                        <input type="text" class="form-control @error('nik_siswa')is-invalid @enderror" id="nik_siswa" placeholder="Masukan NIK siswa" name="nik_siswa" value="{{old('nik_siswa')}}">
                        @error('nik_siswa')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik_ayah">NIK Ayah</label>
                        <input type="text" class="form-control @error('nik_ayah')is-invalid @enderror" id="nik_ayah" placeholder="Masukan NIK Ayah" name="nik_ayah" value="{{old('nik_ayah')}}">
                        @error('nik_ayah')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik_ibu">NIK Ibu</label>
                        <input type="text" class="form-control @error('nik_ibu')is-invalid @enderror" id="nik_ibu" placeholder="Masukan NIK Ibu" name="nik_ibu" value="{{old('nik_ibu')}}">
                        @error('nik_ibu')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control @error('pekerjaan_ayah')is-invalid @enderror" id="pekerjaan_ayah" placeholder="Masukan Pekerjaan Ayah" name="pekerjaan_ayah" value="{{old('pekerjaan_ayah')}}">
                        @error('pekerjaan_ayah')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" class="form-control @error('pekerjaan_ibu')is-invalid @enderror" id="pekerjaan_ibu" placeholder="Masukan Pekerjaan Ibu" name="pekerjaan_ibu" value="{{old('pekerjaan_ibu')}}">
                        @error('pekerjaan_ibu')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="minat_bidang">Minat Bidang</label>
                        <input type="text" class="form-control @error('minat_bidang')is-invalid @enderror" id="minat_bidang" placeholder="Masukan Minat bidang" name="minat_bidang" value="{{old('minat_bidang')}}">
                        @error('minat_bidang')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Input Data</button>
                    <a href="/pendaftaran" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection