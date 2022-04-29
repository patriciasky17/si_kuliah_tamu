<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('dashboard-admin.posts.detail-article.search-article',[
            'title' => 'Posts - Pradita University\'s Guest Lecturers',
        'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = DB::select('SELECT * FROM event, dokumentasi WHERE event.id_event = dokumentasi.id_event');
        return view('dashboard-admin.posts.input-article.create-article',[
            'title' => 'Input Posts - Pradita University\'s Guest Lecturers',
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
        dd($request->all());
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'ringkasan' => 'required|text',
            'author' => 'required|string',
        ]);

        return redirect()->intended(route('posts.index'))->with('success','Posts has been successfully added');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Posts::where('id_posts', $id);
        $posts->delete();
        return redirect()->intended(route('post.index'))->with('success','Posts has been successfully deleted');
    }
}
