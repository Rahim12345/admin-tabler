<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;


class VisitorSaver
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        Visitor::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'visited_at' => Carbon::now()
        ]);

        return $next($request);
    }
}
