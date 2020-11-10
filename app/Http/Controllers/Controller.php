<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Prepare and return JSON response with HTTP code 200 (OK)
     *
     * @param Model|Collection|LengthAwarePaginator|array $result
     * @param string                                      $message
     * @param string                                      $html
     *
     * @return JsonResponse
     */
    public static function sendResponse($result, $message = null, $html = null)
    {
        // If result is paginated, arrange properties
        if ($result instanceof LengthAwarePaginator) {
            $data = [];
            $meta = [];
            $links = [];
            foreach ($result->toArray() as $key => $value) {
                if ($key === 'data') {
                    $data = $value;
                } elseif (Str::contains($key, '_page_url')) {
                    $links[$key] = $value;
                } else {
                    $meta[$key] = $value;
                }
            }
        } else {
            $data = $result;
            $meta = null;
            $links = null;
        }

        $response = [
            'data' => $data,
            'html' => $html ? $html : '',
            'links' => $links ? $links : '',
            'meta' => $meta ? $meta : '',
            'message' => $message ? $message : '',
            'success' => true,
        ];

        return response()->json($response, 200);
    }

    /**
     * Return error response with error message(s).
     *
     * @param string $error
     * @param array  $errorMessages
     * @param int    $code
     * @return JsonResponse
     */
    public static function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
