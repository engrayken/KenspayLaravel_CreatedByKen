<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

        'php_mailer' => [
        'email_host' => env("EMAIL_HOST"),
        'email_username' => env("EMAIL_USERNAME"),
        'email_password' => env("EMAIL_PASSWORD"),
        'email_port' => env("EMAIL_PORT"),
        ],

        'vtpass' => [
        'api_key' => env("VTPASS_API_KEY"),
        'public_key' => env("VTPASS_PUBLIC_KEY"),
        'secret_key' => env("VTPASS_SECRET_KEY"),
        ],


        'mbang' => [
        'public_key' => env("MBANG_PUBLIC_KEY"),
        'secret_key' => env("MBANG_SECRET_KEY"),
        ],

        'paystack' => [
        'public_key' => env("PSTACK_PUBLIC_KEY"),
        'secret_key' => env("PSTACK_SECRET_KEY"),
        ],

        'monify' => [
        'public_key' => env("MONIFY_PUBLIC_KEY"),
        'secret_key' => env("MONIFY_SECRET_KEY"),
        'URL' => env("MONIFY_URL"),
        'contractCode' => env("MONIFY_CONTRACT_CODE"),
    ]
];
