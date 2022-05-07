<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Presensi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventUserController extends Controller
{
    public function index()
    {
        $event = Event::filter(request(['search','date_search']))->paginate(5)->withQueryString();
        return view('website-for-user.event.event',[
            'title' => 'Event - Pradita University\'s Guest Lecturers',
            'event' => $event,
        ]);
    }

    public function show($id)
    {
        $pembicara = DB::select('SELECT pembicara.id_pembicara, event.id_event, pembicara.nama, event.nama_event, event.cara_pelaksanaan, event.tempat_pelaksanaan, event.tanggal_pelaksanaan, event.jam_mulai, event.jam_selesai FROM pembicara, pembicara_dan_event, event WHERE pembicara.id_pembicara = pembicara_dan_event.id_pembicara AND pembicara_dan_event.id_event = event.id_event AND pembicara.id_pembicara = ?', [$id]);
        return view('website-for-user.event.pembicara',[
            'title' => 'Event - Pradita University\'s Guest Lecturers',
            'pembicara' => $pembicara,
        ]);
    }

    public function create($id)
    {
        $pembicara = DB::select('SELECT pembicara.nama, event.nama_event, event.tanggal_pelaksanaan FROM pembicara, pembicara_dan_event, event WHERE pembicara.id_pembicara = pembicara_dan_event.id_pembicara AND pembicara_dan_event.id_event = event.id_event AND event.id_event = ?', [$id]);
        return view('website-for-user.event.presensi',[
            'title' => 'Input Presensi - Pradita University\'s Guest Lecturers',
            'pembicara' => $pembicara,
        ]);
    }

    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
        ]);
        $presensi = [
            'id_event' => $id,
            'nim' => $validatedData['nim'],
            'waktu_presensi' => Carbon::now(),
        ];
        Presensi::create($presensi);
        return redirect()->route('event.index')->with('success', 'Presensi has been added successfully');
    }

    public function nim($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        return response()->json($mahasiswa);
    }
}
