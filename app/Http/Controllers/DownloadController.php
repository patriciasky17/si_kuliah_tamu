<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function photoEvent(Request $request)
    {
        $image = substr($request->query('image'), 5);
        $file = public_path().'/images/'.$image;
        return response()->download($file);
    }
}
