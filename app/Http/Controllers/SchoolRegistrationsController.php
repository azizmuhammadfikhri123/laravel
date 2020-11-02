<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\SchoolRegistration;
use Illuminate\Http\Request;

class SchoolRegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = SchoolRegistration::all();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required' ,
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' =>'required',
            'kabupaten' => 'required',
            'kode_pos' => 'required',
            'nomor_hp' =>'required',
            'email' => 'required',
            'nama_ayah' => 'required' ,
            'nama_ibu' => 'required',
            'asal_smp' => 'required',
            'nisn' => 'required',
            'kartu_keluarga' => 'required',
            'nik_siswa' => 'required',
            'nik_ayah' => 'required',
            'nik_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'minat_bidang' => 'required',
        ]);

        SchoolRegistration::create($request->all());
        return redirect('/pendaftaran')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolRegistration  $schoolRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolRegistration $id)
    {
        return view('pendaftaran.show', ['SchoolRegistration' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolRegistration  $schoolRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolRegistration $schoolRegistration)
    {
        return view( 'pendaftaran.show', compact('schoolRegistration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolRegistration  $schoolRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolRegistration $schoolRegistration)
    {
        $request->validate([
            'nama_lengkap' => 'required' ,
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' =>'required',
            'kabupaten' => 'required',
            'kode_pos' => 'required',
            'nomor_hp' =>'required',
            'email' => 'required',
            'nama_ayah' => 'required' ,
            'nama_ibu' => 'required',
            'asal_smp' => 'required',
            'nisn' => 'required',
            'kartu_keluarga' => 'required',
            'nik_siswa' => 'required',
            'nik_ayah' => 'required',
            'nik_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'minat_bidang' => 'required',
        ]);

        SchoolRegistration::where('id', $schoolRegistration->id)
            ->update([
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten' => $request->kabupaten,
                'kode_pos' => $request->kode_pos,
                'nomor_hp' => $request->nomor_hp,
                'email' => $request->email,
                'nama_ayah' => $request->nama_ayah ,
                'nama_ibu' => $request->nama_ibu,
                'asal_smp' => $request->asal_smp,
                'nisn' => $request->nisn,
                'kartu_keluarga' => $request->kartu_keluarga,
                'nik_siswa' => $request->nik_siswa,
                'nik_ayah' => $request->nik_ayah,
                'nik_ibu' => $request->nik_ibu,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'minat_bidang' => $request->minat_bidang

            ]);
        
            return redirect('/pendaftaran')->with('status', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolRegistration  $schoolRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolRegistration $SchoolRegistration)
    {
        SchoolRegistration::destroy( $SchoolRegistration->id );
        return redirect('/pendaftaran')->with('status', 'Data berhasil dihapus!');
    }
}
