<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    // protected function redirectTo(Request $request): ?string
    // {
    //     // Return null for JSON-based APIs
    //     return $request->expectsJson() ? null : null;
    // }

    // /**
    //  * Handle unauthenticated requests for API-only applications.
    //  */
    // protected function unauthenticated($request, array $guards)
    // {
    //     // Return JSON response for unauthenticated access
    //     abort(response()->json([
    //         'status' => 'error',
    //         'message' => 'Unauthenticated.',
    //     ], 401));
    // }
}
