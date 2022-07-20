<?php

namespace Modules\Api\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class CanAccessMiddleware 
{
    public function handle(Request $request, \Closure $next){
        $bearerToken = $request->header('Authorization');
        $bearerToken = str_replace(["Bearer ","Bearer"], "", $bearerToken);
        if (empty($bearerToken) || $bearerToken !== config("api.authorization.bearer_token")) {
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => 'error',
                    'status_code' => 403,
                    'message' => 'Unauthorized.',
                    'data' => [],
                ], 200);
            }
            else{
                return response()->json('Forbidden' , 403);
            }
        }
        return $next($request);
    }
}
