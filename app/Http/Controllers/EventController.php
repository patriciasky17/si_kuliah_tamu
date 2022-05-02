<?php

namespace App\Http\Controllers;

use App\Models\PIC;
use App\Models\Event;
use App\Models\Proposal;
use App\Models\Pembicara;
use Illuminate\Http\Request;
use App\Models\PembicaraDanEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->query('id_event');
        if($id){
            $singleEvent = DB::select('SELECT event.nama_event, event.cara_pelaksanaan, event.tempat_pelaksanaan, event.link, event.jam_mulai, event.jam_selesai, pembicara.nama, event.laporan_akhir, proposal.file_proposal FROM event, pembicara_dan_event, pembicara, pic, proposal WHERE event.id_event = pembicara_dan_event.id_event AND pembicara_dan_event.id_pembicara = pembicara.id_pembicara AND event.id_pic = pic.id_pic AND event.id_proposal = proposal.id_proposal AND event.id_event = ?', [$id]);
            $event = DB::select('SELECT * FROM event, pembicara_dan_event, pembicara, pic, proposal WHERE event.id_event = pembicara_dan_event.id_event AND pembicara_dan_event.id_pembicara = pembicara.id_pembicara AND event.id_pic = pic.id_pic AND event.id_proposal = proposal.id_proposal ORDER BY event.id_event');
            return view('dashboard-admin.event.detail-event.detail-event',[
            'title' => 'Data Event - Pradita University\'s Guest Lecturers',
            'event' => $event,
            'singleEvent' => $singleEvent
        ]);
        }else{
            $event = DB::select('SELECT * FROM event, pembicara_dan_event, pembicara, pic, proposal WHERE event.id_event = pembicara_dan_event.id_event AND pembicara_dan_event.id_pembicara = pembicara.id_pembicara AND event.id_pic = pic.id_pic AND event.id_proposal = proposal.id_proposal ORDER BY event.id_event');
            return view('dashboard-admin.event.detail-event.detail-event',[
                'title' => 'Data Event - Pradita University\'s Guest Lecturers',
                'event' => $event,
                'singleEvent' => null
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pic = PIC::all();
        $proposal = Proposal::select(['id_proposal', 'mata_kuliah', 'waktu_pengunggahan'])->get();
        return view('dashboard-admin.event.input-event.input-event',[
            'title' => 'Input Event - Pradita University\'s Guest Lecturers',
            'pic' => $pic,
            'proposal' => $proposal
        ]);
    }

    public function createPembicara()
    {
        $event = Event::all();
        $pembicara = Pembicara::all();
        return view('dashboard-admin.event.input-pembicara-ke-event.input-pembicara-ke-event',[
            'title' => 'Input Pembicara - Pradita University\'s Guest Lecturers',
            'event' => $event,
            'pembicara' => $pembicara
        ]);
    }

    public function createLaporanAkhir()
    {
        $event = Event::all();
        return view('dashboard-admin.event.input-laporan-akhir.input-laporan-akhir',[
            'title' => 'Input Laporan Akhir - Pradita University\'s Guest Lecturers',
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
        

    }

    public function storePembicara(Request $request)
    {
        $validatedData = $request->validate([
            'id_event' => 'required',
            'id_pembicara' => 'required'
        ]);

        PembicaraDanEvent::create($validatedData);
        return redirect()->route('event.index')->with('success', 'Data Pembicara has been added successfully');
    }

    public function storeLaporanAkhir(Request $request)
    {
        $validatedData = $request->validate([
            'id_event' => 'required',
            'laporan_akhir' => 'required|mimes:pdf,docx,doc|max:2048',
        ]);
        $proposal = [
            'laporan_akhir' => $request->file('laporan_akhir')->store('laporan_akhir'),
            // ->getClientOriginalName(),
        ];
        Event::where('id_event', $validatedData['id_event'])->update($proposal);
        return redirect()->route('event.index')->with('success', 'Data Laporan Akhir has been added successfully');
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
        $event = Event::where('id_event', $id)->get()->first();
        return view('dashboard-admin.event.edit-event.edit-event',[
            'title' => 'Edit Event - Pradita University\'s Guest Lecturers',
            'event' => $event]);

    }
    
    public function editPembicara($id){
        $event = Event::where('id_event', $id)->get()->first();
        return view('dashboard-admin.event.edit-pembicara-ke-event.edit-pembicara-ke-event',[
            'title' => 'Edit Pembicara - Pradita University\'s Guest Lecturers',
            'event' => $event]);
    }

    public function editLaporanAkhir($id){
        $event = Event::where('id_event', $id)->get()->first();
        return view('dashboard-admin.event.edit-laporan-akhir.edit-laporan-akhir',[
            'title' => 'Edit Laporan Akhir - Pradita University\'s Guest Lecturers',
            'event' => $event]);
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
        //
    }

    public function updatePembicara(Request $request, $id){
        $validatedData = $request->validate([
            'id_pembicara' => 'required'
        ]);
        $validatedData['id_event'] = $id;
        // PembicaraDanEvent::where('id_event', $id)->update($validatedData);
    }

    public function updateLaporanAkhir(Request $request, $id){
        $validatedData = $request->validate([
            'id_event' => 'required',
            'laporan_akhir' => 'required|mimes:pdf,docx,doc|max:2048',
            'oldlaporan_akhir' => 'required'
        ]);
        $proposal = [
            'laporan_akhir' => $request->file('laporan_akhir')->store('laporan_akhir'),
            // ->getClientOriginalName(),
        ];
        Storage::delete($request->file('oldlaporan_akhir'));
        Event::where('id_event', $validatedData['id_event'])->update($proposal);
        return redirect()->route('event.index')->with('success', 'Data Laporan Akhir has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
