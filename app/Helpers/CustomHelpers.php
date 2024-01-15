<?php

use App\Enums\CustomEnums;

function successApiResponse($message = null, $data = [], $errors = [], $status = 200, $headers = []){
    return response()->json([
        "status" => CustomEnums::$successReponseCode,
        "message" => $message,
        "data" => $data,
        "errors" => $errors
    ], $status, $headers);
}

function failedApiResponse($message = null, $data = [], $errors = [], $status = 200, $headers = []){
    return response()->json([
        "status" => CustomEnums::$failedReponseCode,
        "message" => $message,
        "data" => $data,
        "errors" => $errors
    ], $status, $headers);
}

function apiResponse($data = [], $status = 200, $headers = []){
    return response()->json($data, $status, $headers);
}

