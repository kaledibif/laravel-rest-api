<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Response;

class BaseController extends Controller
{
    /**
     * Success response method.
     *
     * @param $result
     * @param $message
     * @return Response
     */
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    /**
     * Error response method.
     *
     * @param $error
     * @param array $errorMessages
     * @param int $code
     * @return Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
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

    /**
     * Delete response method.
     *
     * @param string $message
     * @return Response
     */
    public function deleteResponse($message)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }
}
