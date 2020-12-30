<?php

namespace App\Http\Middleware;

use App\Http\Controllers\StatusConst;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAccountActive
{
    public function handle(Request $request, Closure $next)
    {
        $accountLogin   = Auth::user();
        if ($accountLogin->status == StatusConst::NO_ACTIVE) {
            return redirect()->route('login');
        }
        return $next($request);
    }

}
