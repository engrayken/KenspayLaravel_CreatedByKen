<?php

use App\Enums\CustomEnums;
use App\Enums\SiteEnums;

function successApiResponse($message = null, $data = [], $errors = [], $status = 200, $headers = []){
    return response()->json([
        "status" => SiteEnums::$successReponseCode,
        "message" => $message,
        "data" => $data,
        "errors" => $errors
    ], $status, $headers);
}

function failedApiResponse($message = null, $data = [], $errors = [], $status = 200, $headers = []){
    return response()->json([
        "status" => SiteEnums::$failedReponseCode,
        "message" => $message,
        "data" => $data,
        "errors" => $errors
    ], $status, $headers);
}

function apiResponse($data = [], $status = 200, $headers = []){
    return response()->json($data, $status, $headers);
}

