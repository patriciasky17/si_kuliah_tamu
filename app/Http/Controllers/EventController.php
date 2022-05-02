<?php

namespace App\Http\Controllers;

use App\Models\PIC;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            return view('dashboard-admin.event.event.detail-event.detail-event',[
            'title' => 'Data Event - Pradita University\'s Guest Lecturers',
            'event' => $event,
            'singleEvent' => $singleEvent
        ]);
        }else{
            $event = DB::select('SELECT * FROM event, pembicara_dan_event, pembicara, pic, proposal WHERE event.id_event = pembicara_dan_event.id_event AND pembicara_dan_event.id_pembicara = pembicara.id_pembicara AND event.id_pic = pic.id_pic AND event.id_proposal = proposal.id_proposal ORDER BY event.id_event');
        return view('dashboard-admin.event.event.detail-event.detail-event',[
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
        return view('dashboard-admin.event.event.input-event.input-event',[
            'title' => 'Input Event - Pradita University\'s Guest Lecturers',
            'pic' => $pic,
            'proposal' => $proposal
        ]);
    }

    public function createPembicara()
    {

    }

    public function createLaporanAkhir()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storePembicara(Request $request)
    {

    }

    public function storeLaporanAkhir(Request $request)
    {

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
    
    public function editPembicara($id){

    }

    public function editLaporanAkhir($id){

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

    }

    public function updateLaporanAkhir(Request $request, $id){

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
