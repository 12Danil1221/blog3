<?php

namespace App\Http\Controllers\Post;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post){
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
        ->where('id', '!=', $post->id)
        ->get()
        ->take(2);
        return view('post.show', compact('post', 'date', 'relatedPosts'));
    }
}
