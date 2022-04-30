<?php

namespace App\Http\Controllers;

use App\Models\Pembicara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'cv' => $request->file('cv')->store('cv'),
            'npwp' => $request->file('npwp')->store('npwp'),
            'no_rekening' => $validatedData['no_rekening'],
            'sertifikat' => $request->file('sertifikat')->store('sertifikat'),
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
            'foto' => 'nullable|file|mimes:jpeg,png,jpg|max:3072',
            'oldfoto' => 'required',
            'cv' => 'nullable|file|mimes:pdf,docx,doc|max:3072',
            'oldcv' => 'required',
            'npwp' => 'nullable|numeric',
            'no_rekening' => 'nullable|numeric',
            'sertifikat' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:3072',
            'oldsertifikat' => 'nullable',
            'bank' => 'nullable|string',
        ]);

        $pembicara = [
            'nama' => $validatedData['nama'],
            'institusi' => $validatedData['institusi'],
            'jabatan' => $validatedData['jabatan'],
            'npwp' => $validatedData['npwp'],
            'no_rekening' => $validatedData['no_rekening'],
            'sertifikat' => $validatedData['sertifikat'],
            'bank' => $validatedData['bank']
        ];

        if($validatedData['foto'] != null){
            $pembicara['foto'] = $request->file('foto')->store('foto');
            if($validatedData['oldfoto'] != null){
                Storage::delete($validatedData['oldfoto']);
            }
        }
        if($validatedData['cv'] != null){
            $pembicara['cv'] = $request->file('cv')->store('cv');
            if($validatedData['oldcv'] != null){
                Storage::delete($validatedData['oldcv']);
            }
        }
        if($validatedData['sertifikat'] != null){
            $pembicara['sertifikat'] = $request->file('sertifikat')->store('sertifikat');
            if($validatedData['oldsertifikat'] != null){
                Storage::delete($validatedData['oldsertifikat']);
            }
        }


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