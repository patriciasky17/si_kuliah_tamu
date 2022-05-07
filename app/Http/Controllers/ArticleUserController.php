<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleUserController extends Controller
{
    public function index()
    {//post, post dokumentasi, dokumentasi,foto
        $posts = Posts::join('posts_dan_dokumentasi', 'posts.id_posts', '=', 'posts_dan_dokumentasi.id_posts')
        ->join('dokumentasi', 'posts_dan_dokumentasi.id_dokumentasi', '=', 'dokumentasi.id_dokumentasi')
        ->join('foto', 'dokumentasi.id_dokumentasi', '=', 'foto.id_dokumentasi')->paginate(5);
        return view('website-for-user.article.article',[
            'title' => 'Article - Pradita University\'s Guest Lecturers',
            'posts' => $posts,
        ]);
    }

    public function show($id)
    {
        $post = DB::select('SELECT * FROM posts, posts_dan_dokumentasi, dokumentasi, foto WHERE posts.id_posts = posts_dan_dokumentasi.id_posts AND posts_dan_dokumentasi.id_dokumentasi = dokumentasi.id_dokumentasi AND dokumentasi.id_dokumentasi = foto.id_dokumentasi AND posts.id_posts = ?', [$id]);
        return view('website-for-user.article.article-inside',[
            'title' => 'Posts - Pradita University\'s Guest Lecturers',
            'post' => $post
        ]);
    }
}
