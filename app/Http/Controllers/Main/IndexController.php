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
        return redirect()->route('post.index');
    }
}
