<?php

namespace App\Http\Controllers;

use App\Models\Pembicara;
use Illuminate\Http\Request;

class PembicaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembicara = Pembicara::all();
        return view('dashboard-admin.pembicara.detail-pembicara.detail-pembicara',[
            'title' => 'Data Pembicara - Pradita University\'s Guest Lecturers',
            'pembicara' => $pembicara
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.pembicara.input-pembicara.input-pembicara',[
            'title' => 'Input Pembicara - Pradita University\'s Guest Lecturers',
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
            'nama' => 'required|string',
            'institusi' => 'required|string',
            'jabatan' => 'required|string',
            'foto' => 'required|file|mimes:jpeg,png,jpg|max:3072',
            'cv' => 'required|file|mimes:pdf,docx,doc|max:3072',
            'npwp' => 'nullable|numeric',
            'no_rekening' => 'nullable|numeric',
            'sertifikat' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:3072',
            'bank' => 'nullable|string',
        ]);

        $pembicara = [
            'nama' => $validatedData['nama'],
            'institusi' => $validatedData['institusi'],
            'jabatan' => $validatedData['jabatan'],
            'foto' => $validatedData['foto'],
            'cv' => $validatedData['cv'],
            'npwp' => $validatedData['npwp'],
            'no_rekening' => $validatedData['no_rekening'],
            'sertifikat' => $validatedData['sertifikat'],
            'bank' => $validatedData['bank']
        ];

        Pembicara::create($pembicara);

        return redirect()->intended(route('pembicara.index'))->with('success', 'Pembicara has been successfully added');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'institusi' => 'required|string',
            'jabatan' => 'required|string',
            'foto' => 'required|file|mimes:jpeg,png,jpg|max:3072',
            'cv' => 'required|file|mimes:pdf,docx,doc|max:3072',
            'npwp' => 'nullable|numeric',
            'no_rekening' => 'nullable|numeric',
            'sertifikat' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:3072',
            'bank' => 'nullable|string',
        ]);

        $pembicara = [
            'nama' => $validatedData['nama'],
            'institusi' => $validatedData['institusi'],
            'jabatan' => $validatedData['jabatan'],
            'foto' => $validatedData['foto'],
            'cv' => $validatedData['cv'],
            'npwp' => $validatedData['npwp'],
            'no_rekening' => $validatedData['no_rekening'],
            'sertifikat' => $validatedData['sertifikat'],
            'bank' => $validatedData['bank']
        ];

        Pembicara::where('id_pembicara',$id)->update($pembicara);

        return redirect()->intended(route('pembicara.index'))->with('success', 'Pembicara has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
