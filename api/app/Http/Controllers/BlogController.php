<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function posts()
    {
        $posts = Post::with(['translation', 'meta.translations'])->where('is_published', true )
            ->orderBy('created_at', 'desc')
            ->get();
        return $posts;
    }
    public function show(Request $request)
    {
        $post= Post::with(['translation', 'meta.translations'])
            ->find($request->input('id'))
            ->firstOrFail();

        return $post;
    }
    public function lastPosts(){

        $posts = Post::with(['translation', 'meta.translations'])->where('is_published', true )
            ->orderBy('created_at', 'desc')
            ->limit(4)->get();
        return $posts;
    }
}
