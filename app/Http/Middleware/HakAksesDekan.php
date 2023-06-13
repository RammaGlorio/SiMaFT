<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HakAksesDekan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $data = User::where('id', Auth::id())->first();

        if($data->role === 'Dekan')
        {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
