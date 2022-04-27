<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Event;
use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentation = DB::select('SELECT * FROM dokumentasi, event, foto WHERE dokumentasi.id_event = event.id_event AND dokumentasi.id_dokumentasi = foto.id_dokumentasi');
        return view('dashboard-admin.documentation.detail-documentation.download-documentation',[
            'title' => 'Data Dokumentasi - Pradita University\'s Guest Lecturers',
            'documentation' => $documentation
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::all();
        return view('dashboard-admin.documentation.input-documentation.input-documentation',[
            'title' => 'Input Dokumentasi - Pradita University\'s Guest Lecturers',
            'event' => $event
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
            'id_event' => 'required',
            'video' => 'nullable',
            'foto_1' => 'required|file|mimes:jpeg,png,jpg|max:3072',
            'foto_2' => 'nullable|file|mimes:jpeg,png,jpg|max:3072',
            'feedback' => 'nullable|mimes:pdf,docx,doc|max:2048',
        ]);
        $documentation = [
            'id_event' => $validatedData['id_event'],
            'video' => $validatedData['video'],
            'feedback' => $validatedData['feedback']
        ];
        
        $idDokumentasi = Dokumentasi::create($documentation)->id_dokumentasi;
        $foto1 = [
            'id_dokumentasi' => $idDokumentasi,
            'foto' => $request->file('foto_1')->store('public/dokumentasi')
        ];
        $foto2 = [
            'id_dokumentasi' => $idDokumentasi,
            'foto' => $request->file('foto_2')->store('public/dokumentasi')
        ];
        Foto::create($foto1);
        Foto::create($foto2);
        return redirect()->intended(route('documentation.index'))->with('success', 'Documentation has been successfully added');
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
        $documentation = DB::select('SELECT * FROM dokumentasi, foto WHERE dokumentasi.id_dokumentasi = foto.id_dokumentasi AND dokumentasi.id_dokumentasi = ?', [$id]);
        $event = Event::all();
        return view('dashboard-admin.documentation.edit-documentation.edit-documentation',[
            'title' => 'Edit Dokumentasi - Pradita University\'s Guest Lecturers',
            'documentation' => $documentation,
            'event' => $event
        ]);
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
            'id_event' => 'required',
            'video' => 'nullable',
            'foto_1' => 'required|file|mimes:jpeg,png,jpg|max:3072',
            'foto_2' => 'nullable|file|mimes:jpeg,png,jpg|max:3072',
            'feedback' => 'nullable|mimes:pdf,docx,doc|max:2048',
            'oldfoto_1' => 'required',
            'oldfoto_2' => 'nullable',
            'oldfeedback' => 'nullable'
        ]);
        $documentation = [
            'id_event' => $validatedData['id_event'],
            'video' => $validatedData['video'],
            'feedback' => $validatedData['feedback']
        ];
        Dokumentasi::where('id_dokumentasi', $id)->update($documentation);
        $foto1 = [
            'id_dokumentasi' => $id,
            'foto' => $request->file('foto_1')->store('public/dokumentasi')
        ];
        $foto2 = [
            'id_dokumentasi' => $id,
            'foto' => $request->file('foto_2')->store('public/dokumentasi')
        ];

        Storage::delete($validatedData['oldfoto_1']);
        if($request->file('oldfoto_2') != null){
            Storage::delete($validatedData['oldfoto_2']);
        }
        if($request->file('oldfeedback') != null){
            Storage::delete($validatedData['oldfeedback']);
        }
        Foto::where('id_dokumentasi', $id)->where('foto',$validatedData['oldfoto_1'])->update($foto1);
        Foto::where('id_dokumentasi', $id)->where('foto',$validatedData['oldfoto_2'])->update($foto2);
        return redirect()->intended(route('documentation.index'))->with('success', 'Documentation has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documentation = Dokumentasi::where('id_dokumentasi', $id);
        $foto = Foto::where('id_dokumentasi', $id)->get();
        foreach($foto as $f){
            Storage::delete($f->foto);
        }
        $documentation->delete();
        return redirect()->intended(route('documentation.index'))->with('success', 'Documentation has been successfully deleted');
    }
}
