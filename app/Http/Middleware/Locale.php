<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Locale
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

        
    }    if($request->method() == 'GET') {
            $segment = $request->segment(1);
            $languages = Language::all()->pluck('prefix')->toArray();
            if (!in_array($segment,$languages)) {
                $segments = $request->segments();
                $default = config('app.locale');
                $segments = Arr::prepend($segments, $default);
                return redirect()->to(implode('/', $segments));
            }

            app()->setLocale($segment);
        }
        return $next($request);
    }
}
