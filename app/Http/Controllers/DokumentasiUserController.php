<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class DokumentasiUserController extends Controller
{
    public function index()
    {
        $dokumentasi = DB::select('SELECT DISTINCT(dokumentasi.id_dokumentasi), foto.*, event.*
        FROM dokumentasi 
        INNER JOIN foto ON foto.id_foto =
        (SELECT foto.id_foto FROM foto WHERE dokumentasi.id_dokumentasi = foto.id_dokumentasi ORDER BY foto.id_dokumentasi ASC LIMIT 1 ), event WHERE event.id_event = dokumentasi.id_event');
        $dokumentasi = new Paginator($dokumentasi, 5);
        $dokumentasi->setPath('documentation');
        return view('website-for-user.documentation.documentation',[
            'title' => 'Dokumentasi - Pradita University\'s Guest Lecturers',
            'dokumentasi' => $dokumentasi,
        ]);
    }

    public function show($id)
    {
        $dokumentasi = DB::select('SELECT DISTINCT(dokumentasi.id_dokumentasi), foto.*, event.*
        FROM dokumentasi 
        INNER JOIN foto ON foto.id_foto =
        (SELECT foto.id_foto FROM foto WHERE dokumentasi.id_dokumentasi = foto.id_dokumentasi ORDER BY foto.id_dokumentasi ASC LIMIT 1 ), event WHERE event.id_event = dokumentasi.id_event AND dokumentasi.id_dokumentasi = ?',[$id]);
        return view('website-for-user.documentation.documentation-inside',[
            'title' => 'Dokumentasi - Pradita University\'s Guest Lecturers',
            'dokumentasi' => $dokumentasi,
        ]);
    }
}
