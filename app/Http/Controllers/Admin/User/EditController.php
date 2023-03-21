<?php

namespace App\Http\Controllers\Admin\User;

use App\Category;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }
}
