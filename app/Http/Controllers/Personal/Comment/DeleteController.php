<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment){

        $comment->delete();
        redirect()->route('personal.comment.index');
    }
}
