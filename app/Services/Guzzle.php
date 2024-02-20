<?php
namespace App\Services;

use GuzzleHttp\Client;

class Guzzle
{

    public function sendApi($type,$server,$headers,$data)
    {
   $client = new Client();

       if($type=="get")
       {
        try {
    $response = $client->get($server.$data['data'],[
            'headers' => $headers,// Use 'json' key if sending JSON data
            //eg     $headers = [
    // 'Content-Type' => 'application/json', // Adjust the content type as needed
    // "userid"=>config("services.mbang.public_key"),
    // "pass"=>config("services.mbang.secret_key"),
    //     ];
        ]);
    // Get the response body as a string
    $body = $response->getBody()->getContents();
    return  $body;

} catch (\GuzzleHttp\Exception\RequestException $e) {
    // Handle request exceptions (e.g., network issues, server errors)
    return "Error: " . $e->getMessage();
}
       }
        $response = $client->$type($server, [
            'headers' => $headers,
            'json' => $data, // Use 'json' key if sending JSON data
        ]);
        // Get the response body as a string
    return    $responseBody = $response->getBody()->getContents();
}

}
