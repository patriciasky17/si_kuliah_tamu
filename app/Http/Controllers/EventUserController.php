<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventUserController extends Controller
{
    public function index()
    {
        $event = DB::select('SELECT * FROM event');
        return view('website-for-user.event.event',[
            'title' => 'Event - Pradita University\'s Guest Lecturers',
            'event' => $event,
        ]);
    }
}
