<?php

namespace App\Http\Middleware;
use App\Models\User;
use Auth;


use Closure;
use Illuminate\Http\Request;

class HakAksesPdKabag
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

        if($data->role === 'Kabag')
        {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
