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

                            <form method="post" action="/pendaftaran/{{$SchoolRegistration->id}}">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap"  name="nama_lengkap" value="{{$SchoolRegistration->nama_lengkap}}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis_kelamin"  name="jenis_kelamin" value="{{$SchoolRegistration->jenis_kelamin}}">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir"  name="tempat_lahir" value="{{$SchoolRegistration->tempat_lahir}}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal_lahir"  name="tanggal_lahir" value="{{$SchoolRegistration->tanggal_lahir}}">
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama" value="{{$SchoolRegistration->agama}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control" id="alamat"  name="alamat">{{$SchoolRegistration->alamat}}</textarea> 
                                </div>
                                <div class="form-group">
                                    <label for="rt">Rt</label>
                                    <input type="text" class="form-control" id="rt" name="rt" value="{{$SchoolRegistration->rt}}">
                                </div>
                                <div class="form-group">
                                    <label for="rw">Rw</label>
                                    <input type="text" class="form-control" id="rw"  name="rw" value="{{$SchoolRegistration->rw}}">
                                </div>
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan</label>
                                    <input type="text" class="form-control" id="kelurahan"  name="kelurahan" value="{{$SchoolRegistration->kelurahan }}">
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan"  name="kecamatan" value="{{$SchoolRegistration->kecamatan}}">
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input type="text" class="form-control" id="kabupaten"  name="kabupaten" value="{{$SchoolRegistration->kabupaten}}">
                                </div>
                                <div class="form-group">
                                    <label for="kode_pos">Kode Pos</label>
                                    <input type="text" class="form-control" id="kode_pos"  name="kode_pos" value="{{$SchoolRegistration->kode_pos}}">
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp">NO Hp</label>
                                    <input type="text" class="form-control" id="nomor_hp"  name="nomor_hp" value="{{$SchoolRegistration->nomor_hp}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"  name="email" value="{{$SchoolRegistration->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{$SchoolRegistration->nama_ayah}}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu"  name="nama_ibu" value="{{$SchoolRegistration->nama_ibu}}">
                                </div>
                                <div class="form-group">
                                    <label for="asal_smp">Asal SMP</label>
                                    <input type="text" class="form-control" id="asal_smp"  name="asal_smp" value="{{$SchoolRegistration->asal_smp}}">
                                </div>
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input type="text" class="form-control" id="nisn" name="nisn" value="{{$SchoolRegistration->nisn}}">
                                </div>
                                <div class="form-group">
                                    <label for="kartu_keluarga">Kartu Keluarga</label>
                                    <input type="text" class="form-control" id="kartu_keluarga" name="kartu_keluarga" value="{{$SchoolRegistration->kartu_keluarga}}">
                                </div>
                                <div class="form-group">
                                    <label for="nik_siswa">NIK Siswa</label>
                                    <input type="text" class="form-control" id="nik_siswa" name="nik_siswa" value="{{$SchoolRegistration->nik_siswa}}">
                                </div>
                                <div class="form-group">
                                    <label for="nik_ayah">NIK Ayah</label>
                                    <input type="text" class="form-control" id="nik_ayah"  name="nik_ayah" value="{{$SchoolRegistration->nik_ayah}}">
                                </div>
                                <div class="form-group">
                                    <label for="nik_ibu">NIK Ibu</label>
                                    <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" value="{{$SchoolRegistration->nik_ibu}}">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{$SchoolRegistration->pekerjaan_ayah}}">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" id="pekerjaan_ibu"  name="pekerjaan_ibu" value="{{$SchoolRegistration->pekerjaan_ibu}}">
                                </div>
                                <div class="form-group">
                                    <label for="minat_bidang">Minat Bidang</label>
                                    <input type="text" class="form-control" id="minat_bidang" name="minat_bidang" value="{{$SchoolRegistration->minat_bidang}}">
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning" data-dismiss="modal">Update</button>
                            <a href="/pendaftaran/{{$SchoolRegistration->id}}" class="btn btn-outline-secondary">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection