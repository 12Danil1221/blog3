<?php

namespace App\Http\Controllers\Post;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(2);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(3);

        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
