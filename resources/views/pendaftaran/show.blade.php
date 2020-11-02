@extends('layout.main')
@section('title', 'Halaman Detail')
    
@section('container') 
<div class="container">
    <div class="row">
        <div class="col-6">     
            <h1 class="my-4">Detail Siswa</h1>
            <hr>

            {{-- <a href="" class="btn btn-outline-warning">Update</a> --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#formModal">
                Update
            </button>
            
            <!-- Button trigger modal delete -->
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                Delete
            </button>

            <a href="/pendaftaran" class="btn btn-outline-primary">Kembali</a>


            <div class="card my-3">
                <div class="card-header">
                    {{ $SchoolRegistration->nama_lengkap }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Jenis Kelamin : {{ $SchoolRegistration->jenis_kelamin }}</li>
                    <li class="list-group-item">Tempat Lahir : {{ $SchoolRegistration->tempat_lahir}}</li>
                    <li class="list-group-item">Tanggal Lahir : {{ $SchoolRegistration->tanggal_lahir}}</li>
                    <li class="list-group-item">Agama : {{ $SchoolRegistration->agama}}</li>
                    <li class="list-group-item">Alamat : {{ $SchoolRegistration->alamat}}</li>
                    <li class="list-group-item">Rt : {{ $SchoolRegistration->rt}}</li>
                    <li class="list-group-item">Rw : {{ $SchoolRegistration->rw}}</li>
                    <li class="list-group-item">Kelurahan : {{ $SchoolRegistration->kelurahan}}</li>
                    <li class="list-group-item">Kecamatan : {{ $SchoolRegistration->kecamatan}}</li>
                    <li class="list-group-item">Kabupaten : {{ $SchoolRegistration->kabupaten}}</li>
                    <li class="list-group-item">Kode Pos : {{ $SchoolRegistration->kode_pos}}</li>
                    <li class="list-group-item">Nomor Hp : {{ $SchoolRegistration->nomor_hp}}</li>
                    <li class="list-group-item">Email : {{ $SchoolRegistration->email}}</li>
                    <li class="list-group-item">Nama Ayah : {{ $SchoolRegistration->nama_ayah}}</li>
                    <li class="list-group-item">Nama Ibu : {{ $SchoolRegistration->nama_ibu}}</li>
                    <li class="list-group-item">Asal SMP : {{ $SchoolRegistration->asal_smp}}</li>
                    <li class="list-group-item">NISN : {{ $SchoolRegistration->nisn}}</li>
                    <li class="list-group-item">Kartu Keluarga : {{ $SchoolRegistration->kartu_keluarga}}</li>
                    <li class="list-group-item">NIK Siswa : {{ $SchoolRegistration->nik_siswa}}</li>
                    <li class="list-group-item">NIK Ayah : {{ $SchoolRegistration->nik_ayah}}</li>
                    <li class="list-group-item">NIK Ibu : {{ $SchoolRegistration->nik_ibu}}</li>
                    <li class="list-group-item">Pekerjaan Ayah : {{ $SchoolRegistration->pekerjaan_ayah}}</li>
                    <li class="list-group-item">Pekerjaan Ibu : {{ $SchoolRegistration->pekerjaan_ibu}}</li>
                    <li class="list-group-item">Minat Bidang : {{ $SchoolRegistration->minat_bidang}}</li>  
                </ul>
            </div>


            <!-- Modal delete-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda Yakin Ingin Menghapus data ini ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="/pendaftaran/{{$SchoolRegistration->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal update-->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"> 

                            <form method="post" action="{{url('pendaftaran/update/' . $SchoolRegistration->id)}}">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama_lengkap')is-invalid @enderror" id="nama_lengkap"  name="nama_lengkap" value="{{$SchoolRegistration->nama_lengkap}}">
                                    @error('nama_lengkap')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control @error('jenis_kelamin')is-invalid @enderror" id="jenis_kelamin"  name="jenis_kelamin" value="{{$SchoolRegistration->jenis_kelamin}}">
                                    @error('jenis_kelamin')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat lahir</label>
                                    <input type="text" class="form-control @error('tempat_lahir')is-invalid @enderror" id="tempat_lahir"  name="tempat_lahir" value="{{$SchoolRegistration->tempat_lahir}}">
                                    @error('tempat_lahir')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control @error('tanggal_lahir')is-invalid @enderror" id="tanggal_lahir"  name="tanggal_lahir" value="{{$SchoolRegistration->tanggal_lahir}}">
                                    @error('tanggal_lahir')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control @error('agama')is-invalid @enderror" id="agama" name="agama" value="{{$SchoolRegistration->agama}}">
                                    @error('agama')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control @error('alamat')is-invalid @enderror" id="alamat"  name="alamat">{{$SchoolRegistration->alamat}}</textarea> 
                                    @error('alamat')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rt">Rt</label>
                                    <input type="text" class="form-control @error('rt')is-invalid @enderror" id="rt" name="rt" value="{{$SchoolRegistration->rt}}">
                                    @error('rt')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rw">Rw</label>
                                    <input type="text" class="form-control @error('rw')is-invalid @enderror" id="rw"  name="rw" value="{{$SchoolRegistration->rw}}">
                                    @error('rw')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan</label>
                                    <input type="text" class="form-control @error('kelurahan')is-invalid @enderror" id="kelurahan"  name="kelurahan" value="{{$SchoolRegistration->kelurahan }}">
                                    @error('kelurahan')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" id="kecamatan"  name="kecamatan" value="{{$SchoolRegistration->kecamatan}}">
                                    @error('kecamatan')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input type="text" class="form-control @error('kabupaten')is-invalid @enderror" id="kabupaten"  name="kabupaten" value="{{$SchoolRegistration->kabupaten}}">
                                    @error('kabupaten')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kode_pos">Kode Pos</label>
                                    <input type="text" class="form-control @error('kode_pos')is-invalid @enderror" id="kode_pos"  name="kode_pos" value="{{$SchoolRegistration->kode_pos}}">
                                    @error('tanggal_lahir')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp">No Hp</label>
                                    <input type="text" class="form-control @error('nomor_hp')is-invalid @enderror" id="nomor_hp"  name="nomor_hp" value="{{$SchoolRegistration->nomor_hp}}">
                                    @error('nomor_hp')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email')is-invalid @enderror" id="email"  name="email" value="{{$SchoolRegistration->email}}">
                                    @error('email')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input type="text" class="form-control @error('nama_ayah')is-invalid @enderror" id="nama_ayah" name="nama_ayah" value="{{$SchoolRegistration->nama_ayah}}">
                                    @error('nama_ayah')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input type="text" class="form-control @error('nama_ibu')is-invalid @enderror" id="nama_ibu"  name="nama_ibu" value="{{$SchoolRegistration->nama_ibu}}">
                                    @error('nama_ibu')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="asal_smp">Asal SMP</label>
                                    <input type="text" class="form-control @error('asal_smp')is-invalid @enderror" id="asal_smp"  name="asal_smp" value="{{$SchoolRegistration->asal_smp}}">
                                    @error('asal_smp')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input type="text" class="form-control @error('nisn')is-invalid @enderror" id="nisn" name="nisn" value="{{$SchoolRegistration->nisn}}">
                                    @error('nisn')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kartu_keluarga">Kartu Keluarga</label>
                                    <input type="text" class="form-control @error('kartu_keluarga')is-invalid @enderror" id="kartu_keluarga" name="kartu_keluarga" value="{{$SchoolRegistration->kartu_keluarga}}">
                                    @error('kartu_keluarga')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nik_siswa">NIK Siswa</label>
                                    <input type="text" class="form-control @error('nik_siswa')is-invalid @enderror" id="nik_siswa" name="nik_siswa" value="{{$SchoolRegistration->nik_siswa}}">
                                    @error('nik_siswa')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nik_ayah">NIK Ayah</label>
                                    <input type="text" class="form-control @error('nik_ayah')is-invalid @enderror" id="nik_ayah"  name="nik_ayah" value="{{$SchoolRegistration->nik_ayah}}">
                                    @error('nik_ayah')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nik_ibu">NIK Ibu</label>
                                    <input type="text" class="form-control @error('nik_ibu')is-invalid @enderror" id="nik_ibu" name="nik_ibu" value="{{$SchoolRegistration->nik_ibu}}">
                                    @error('nik_ibu')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control @error('pekerjaan_ayah')is-invalid @enderror" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{$SchoolRegistration->pekerjaan_ayah}}">
                                    @error('pekerjaan_ayah')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control @error('pekerjaan_ibu')is-invalid @enderror" id="pekerjaan_ibu"  name="pekerjaan_ibu" value="{{$SchoolRegistration->pekerjaan_ibu}}">
                                    @error('pekerjaan_ibu')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="minat_bidang">Minat Bidang</label>
                                    <input type="text" class="form-control @error('minat_bidang')is-invalid @enderror" id="minat_bidang" name="minat_bidang" value="{{$SchoolRegistration->minat_bidang}}">
                                    @error('minat_bidang')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning" >Update</button>
                                    <a href="/pendaftaran/{{$SchoolRegistration->id}}" class="btn btn-outline-secondary">Close</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection