<?php

namespace App\Http\Controllers\Admin\User;

use App\Category;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
}
