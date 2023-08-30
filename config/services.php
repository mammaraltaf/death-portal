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
    'mailer-lite' => [
        'key' => env('MAILER_LITE_KEY') ?? "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiYmEyN2RjYThkMDNmNGNmMTE5MzY5ZjhmOWYwYWU2MTkwNWJlMGQ5MTkxMzA4NGFkMWYyOTgwYTA3MmY1NDUxNGRiY2IzYzc2MzY0MGYwZTQiLCJpYXQiOjE2OTM0MTM2NzAuNDI5MTc3LCJuYmYiOjE2OTM0MTM2NzAuNDI5MTc5LCJleHAiOjQ4NDkwODcyNzAuNDI0NzM1LCJzdWIiOiI2MDQ0ODAiLCJzY29wZXMiOltdfQ.R67cCxgdXuqvyZC5E3UqT7Cj1o5i9LOH5dA9LiDGuWFi7ef9K_rrownqzonFZ5BuJKdBhg1gUU_gZGeSvw7yzvP-WhWN0GnIPuIvkkpY6SirrjQcgEZ91gopWeBAjn8ddjYWmL_3h1qbV4p-JhzrwqqsCbbVtY63jaK29-OCOLYtd96A0Oh4hbFFZVLQUAFpWJxhKkW27fsnV7_oreQTqdfb53eKTNxyjVMdWpyrWYm7CFXDU0CEhfVj2T2N1zgxvu-EeLTCiAZKnB2wU0aaJ7BuIG3bsPaGvrK_kvbMTa4Wp5a3aXqXSd8YeNCEEaH1RkliZLUiZ4DgN84-71ydFuE4At19OM0Pk6EI9nhiMq6bjwm4KZnIy87J-aZ2LSYDOZxPGoAMvuQqn4u9QnXqLJDir6yjTDBT9H52gcuYukRbYWZn2TRKtnhLFPNp0HcWG8WpX6z-URrMiUgfUHv26KUng6mB4HWDsC-bfNhpX905fVk17thsj3xUZxxHu42E75U8QSkn4KCWHyAx22odKn0gfpwCXT6B8SpAesb_-eI-2nd0zs_iFCUt5hi7v1nRnpdM2ICBIGHFDdBj03-p6MYxZlug_g6rVQghL9iu6LR_3me7qYs-YqUkfWaK1Z8qhXmvLD88_L7L0SCBwHbLENE-N14QFRUQ_3rVspEEpHk",
    ]

];
