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
                        <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan Nama lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" value="{{old('jenis_kelamin')}}"> 
                            <option >Jenis Kelamin</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" placeholder="Masukan Agama" name="agama" value="{{old('agama')}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{old('alamat')}}"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="rt">Rt</label>
                        <input type="text" class="form-control" id="rt" placeholder="Masukan Rt" name="rt" value="{{old('rt')}}">
                    </div>
                    <div class="form-group">
                        <label for="rw">Rw</label>
                        <input type="text" class="form-control" id="rw" placeholder="Masukan Rw" name="rw" value="{{old('rw')}}">
                    </div>
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" placeholder="Masukan kelurahan" name="kelurahan" value="{{old('kelurahan')}}">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" placeholder="Masukan Kecamatan" name="kecamatan" value="{{old('kecamatan')}}">
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" placeholder="Masukan Kabupaten" name="kabupaten" value="{{old('kabupaten')}}">
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="text" class="form-control" id="kode_pos" placeholder="Masukan Kode Pos" name="kode_pos" value="{{old('kode_pos')}}">
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">NO Hp</label>
                        <input type="text" class="form-control" id="nomor_hp" placeholder="Masukan Nomor Hp" name="nomor_hp" value="{{old('nomor_hp')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukan email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" placeholder="Masukan Nama Ayah" name="nama_ayah" value="{{old('nama_ayah')}}">
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" placeholder="Masukan Nama Ibu" name="nama_ibu" value="{{old('nama_ibu')}}">
                    </div>
                    <div class="form-group">
                        <label for="asal_smp">Asal SMP</label>
                        <input type="text" class="form-control" id="asal_smp" placeholder="Masukan Asal SMP" name="asal_smp" value="{{old('asal_smp')}}">
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control" id="nisn" placeholder="Masukan NISN" name="nisn" value="{{old('nisn')}}">
                    </div>
                    <div class="form-group">
                        <label for="kartu_keluarga">Kartu Keluarga</label>
                        <input type="text" class="form-control" id="kartu_keluarga" placeholder="Masukan Kartu Keluarga" name="kartu_keluarga" value="{{old('kartu_keluarga')}}">
                    </div>
                    <div class="form-group">
                        <label for="nik_siswa">NIK Siswa</label>
                        <input type="text" class="form-control" id="nik_siswa" placeholder="Masukan NIK siswa" name="nik_siswa" value="{{old('nik_siswa')}}">
                    </div>
                    <div class="form-group">
                        <label for="nik_ayah">NIK Ayah</label>
                        <input type="text" class="form-control" id="nik_ayah" placeholder="Masukan NIK Ayah" name="nik_ayah" value="{{old('nik_ayah')}}">
                    </div>
                    <div class="form-group">
                        <label for="nik_ibu">NIK Ibu</label>
                        <input type="text" class="form-control" id="nik_ibu" placeholder="Masukan NIK Ibu" name="nik_ibu" value="{{old('nik_ibu')}}">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Masukan Pekerjaan Ayah" name="pekerjaan_ayah" value="{{old('pekerjaan_ayah')}}">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Masukan Pekerjaan Ibu" name="pekerjaan_ibu" value="{{old('pekerjaan_ibu')}}">
                    </div>
                    <div class="form-group">
                        <label for="minat_bidang">Minat Bidang</label>
                        <input type="text" class="form-control" id="minat_bidang" placeholder="Masukan Minat bidang" name="minat_bidang" value="{{old('minat_bidang')}}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Input Data</button>
                    <a href="/pendaftaran" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection