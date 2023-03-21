<?php

namespace App\Http\Controllers\Admin\User;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;

use App\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
