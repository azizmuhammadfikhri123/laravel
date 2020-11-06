<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $siswa = student::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
            'nama' => 'required' ,
            'nis' => 'required|size:8',
            'rombel' =>'required',
            'rayon' => 'required',
        ]);

        $siswa = new student;
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->rombel = $request->rombel;
        $siswa->rayon = $request->rayon;

        $siswa->save();

        return redirect('/siswa')->with('status', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('siswa.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('siswa.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required' ,
            'nis' => 'required|size:8',
            'rombel' =>'required',
            'rayon' => 'required',
        ]);

        student::where('id' , $student->id)
                ->update([
                    'nama' => $request->nama,
                    'nis' => $request->nis,
                    'rombel' => $request->rombel,
                    'rayon' => $request->rayon
                ]);
            return redirect('/siswa')->with('status', 'Data Berhasil diupdate!');
                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        student::destroy($student->id);
        return redirect('/siswa')->with('status', 'Data Berhasil dihapus!');
    }
}
