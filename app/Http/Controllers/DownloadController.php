<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $image = $request->query('image');
        $pdf = $request->query('pdf');
        if($image){
            $file = public_path('foto\\' . $image);
            return response()->download($file);
        }else if($pdf){
            $file = public_path() . '\dokumentasi\\' . $pdf;
            return response()->download($file);
        }
    }
}
