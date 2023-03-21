<?php

namespace App\Http\Controllers\Admin\User;

use App\Category;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        return view('admin.user.show', compact('user'));
    }
}
