<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function errorHandler(string $message, \Exception $error, int $statusCode = 500)
    {
        return response()->json([
            'message' => $message,
            'error' => $error->getMessage()
        ], $statusCode);
    }
}