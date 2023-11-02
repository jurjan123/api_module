<?php
namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponseHeader
{
    protected function sendResponse(
        array $payload = [],
        int $status_code = 200,
        string $message = '',
        array $errors = [],
        array $links = []
    ): JsonResponse
    {
        $response = [
            "api_version" => env("API_VERSON"),
            "description" => "HRM API Module 21",
            "status" => $status_code,
            "message" => $message,

            "data" => $payload,
            "errors" => $errors,
            "links" => $links,
            
        ];

        return response()->json($response, $status_code);
    }

}
?>