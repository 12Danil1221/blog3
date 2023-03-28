<?php

namespace App\Http\Controllers\Main;

use App\Category;
use App\Http\Controllers\Controller;
use App\Message;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Message $message, Request $request){

        $data = request()->validate([
            'message' => 'required'
        ]);
        $message = Message::created($data);

        return view('main.index', compact('posts', 'randomPosts'));
    }
}
