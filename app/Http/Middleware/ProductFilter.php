<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductFilter
{

    public function handle($request, Closure $next)
    {

        if($users = User::whereDate('created_at', '=', Carbon::now()->subDays(0))->get()){

            return $next($request);

        }


    }
}
