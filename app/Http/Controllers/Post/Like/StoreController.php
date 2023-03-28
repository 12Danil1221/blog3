<?php

namespace App\Http\Controllers\Post\Like;

use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Post $post){
        auth()->user()->likedPosts()->toggle($post->id);


        return redirect()->back();
    }
}
