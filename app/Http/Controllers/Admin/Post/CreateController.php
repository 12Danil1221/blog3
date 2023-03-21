<?php

namespace App\Http\Controllers\Admin\Post;

use App\Category;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }
}
