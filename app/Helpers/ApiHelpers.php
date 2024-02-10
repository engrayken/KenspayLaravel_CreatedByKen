<?php

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
        "code" => SiteEnums::$failedReponseCode,
        "message" => $message,
        "data" => $data,
        "errors" => $errors
    ], $status, $headers);
}

function apiResponse($data = [], $status = 200, $headers = []){
    return response()->json($data, $status, $headers);
}


function successResponse($message = null, $data = [], $errors = [], $status = 200, $headers = []){
    return response()->json([
        "code" => SiteEnums::$successReponseCode,
        "message" => $message,
        "data" => $data,
        "errors" => $errors
    ], $status, $headers);
}


function failedResponse($message = null, $data = [], $errors = [], $status = 200, $headers = []){
    return response()->json([
        "code" => SiteEnums::$failedReponseCode,
        "message" => $message,
        "data" => $data,
        "errors" => $errors
    ], $status, $headers);
}
