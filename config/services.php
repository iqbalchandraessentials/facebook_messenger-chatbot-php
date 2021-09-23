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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'token' => 'EAACZCOEgMRGcBAEsND2mNvXBF2l5jjl7e7cyJlthoIhQ2HxlqrhqTwI33ZCdnMdRpEX0IBVpeHwjws3DRbjnFPaDZBlQYBvDeduCfTZAP3MJ7jb2hbSrAPE1eSWovHAnWls9xrAnTuWmh97gVKZAX2k850aT5aOhNDas3FYDE2ugWsCo4ZBZCK8FaRa7KOM1A0ZD',
        'app_secret' => 'stsbotmanfascon',
        'verification' => '7503506b57f7bce03bf35e666f29937c',
    ]

];
