<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
}
