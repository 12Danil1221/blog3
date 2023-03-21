<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
       $posts = auth()->user()->likedPosts;
        return view('personal.liked.index', compact('posts'));
    }
}
