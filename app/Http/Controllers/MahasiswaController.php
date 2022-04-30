<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('dashboard-admin.mahasiswa.detail-mahasiswa.detail-mahasiswa',[
            'title' => 'Data Mahasiswa - Pradita University\'s Guest Lecturers',
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.mahasiswa.input-mahasiswa.input-mahasiswa',[
            'title' => 'Input Mahasiswa - Pradita University\'s Guest Lecturers',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|numeric',
            'nama_mahasiswa' => 'required|string',
            'jenis_kelamin' => 'required|string|min:1|max:1',
            'prodi' => 'required|string',
            'angkatan' => 'required|numeric',
        ]);

        $mahasiswaAwal = [
            'nim' => $validatedData['nim'],
            'nama_mahasiswa' => strtoupper($validatedData['nama_mahasiswa']),
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'prodi' => $validatedData['prodi'],
            'angkatan' => $validatedData['angkatan']
        ];

        Mahasiswa::create($mahasiswaAwal);

        return redirect()->intended(route('mahasiswa.index'))->with('success','Mahasiswa has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        $validatedData = $request->validate([
            'nim' => 'required|numeric',
            'nama_mahasiswa' => 'required|string',
            'jenis_kelamin' => 'required|string|min:1|max:1',
            'prodi' => 'required|string',
            'angkatan' => 'required|numeric',
        ]);

        $mahasiswaAwal = [
            'nim' => $validatedData['nim'],
            'nama_mahasiswa' => strtoupper($validatedData['nama_mahasiswa']),
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'prodi' => $validatedData['prodi'],
            'angkatan' => $validatedData['angkatan']
        ];

        Mahasiswa::where('nim',$nim)->update($mahasiswaAwal);

        return redirect()->intended(route('mahasiswa.index'))->with('success','Mahasiswa has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim);
        $mahasiswa->delete();
        return redirect()->intended(route('mahasiswa.index'))->with('success','Mahasiswa has been successfully deleted');
    }
}
