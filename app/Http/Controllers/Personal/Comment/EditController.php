<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Comment $comment){

        return view('personal.comment.edit', compact('comment'));
    }
}
