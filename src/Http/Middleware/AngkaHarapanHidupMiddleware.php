<?php namespace ChemprenX\AngkaHarapanHidup\Http\Middleware;

use Closure;

/**
 * The AngkaHarapanHidupMiddleware class.
 *
 * @package ChemprenX\AngkaHarapanHidup
 * @author  chemprenx <developer.chemprenx@gmail.com>
 */
class AngkaHarapanHidupMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
