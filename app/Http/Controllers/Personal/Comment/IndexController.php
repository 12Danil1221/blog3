<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){

        $comments = auth()->user()->comments;
        return view('personal.comment.index', compact('comments'));
    }
}
