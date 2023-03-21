<?php

namespace App\Http\Controllers\Admin\Post;

use App\Category;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Post;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }
}
