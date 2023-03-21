<?php

namespace App\Http\Controllers\Main;

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

        return view('main.index', compact('posts', 'randomPosts'));
    }
}
