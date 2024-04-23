<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Sanitize all inputs
        $sanitizedInputs = array_map(function ($input) {
            // If the input is an array, recurse
            if (is_array($input)) {
                return array_map('htmlspecialchars', $input);
            }
            // Otherwise, directly apply htmlspecialchars
            return htmlspecialchars($input);
        }, $request->all());

        // Replace the original request inputs with sanitized ones
        $request->merge($sanitizedInputs);

        // Optionally, log the sanitized inputs for debugging
        // Log::info('Sanitized Request Inputs:', $sanitizedInputs);

        return $next($request);
    }
}
