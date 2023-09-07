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
        'key' => env('MAILER_LITE_KEY') ?? "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiODdmOGYwOGQxNTNjYTVjNGM4MjNlY2JjNTc1YmI3NGZjNjhhYWFkZmE2ZGQ3MDAzODQ1ZmZjZDJhYzUwZDJjODdhZmIyYmU4NDlmODA5NzAiLCJpYXQiOjE2OTM2MDE2MDYuNjM4NDM0LCJuYmYiOjE2OTM2MDE2MDYuNjM4NDM2LCJleHAiOjQ4NDkyNzUyMDYuNjE4NTQzLCJzdWIiOiI2MDc2OTQiLCJzY29wZXMiOltdfQ.dCM4_rlrcy6PF7McFzv-J4-RZq29j6VZEdp65U5nTNpyoh65QOhi15-T0CGnSjDHvdWPRLrQIOrWSb9Q9BGQwwu6MjzXGlZogfXV--VlxUWjVjxqczZzOmnIvEwnj1l4f12KG5RiO-SAw4fQwn_4njBLOFCOcptHjibFMzhNq4gR814vps9XKBbZMlUvThPN6wKlhkgRHpvCtR0I3OXjsstPbScYm2bojFjJ78aPCwHxIxUzVLAUgXLJMIzWg8VRXJBu8OXi4778fqstUMm8jpxasbQNaogkH0eDprMRMc_SK-eNX6_CmYhshWZnG8w2WNe1i_FF44HUbM6Zvs4L4ysB57TsviaFZ9zvE5-_F6LFxHAFVyMG_Kl6mjfOhfwDiox0FgsC8a4Gfmogu423WmiGDYSNwS0lL9Qgmx65krjsh64laJaXvjN3FvQ3KNKU_6zhqtuBRc8aTtU_DgczM3cG3Zs1suBpWaqVyOQRNorvR728mKjodt6nNJ3M-QkwSIHal5JHgD-7tetXrQdf8zxZ6Y7vykMdSBQH2WkUdyJrOUYZEk0SYwvitS6xxiGgTt15avSfl9oAX1lENXVkEC_TlKSHJQjnpH4Efo6UD7VOEGZuDvh155fpxxXj5r71WN74hIkXAZXxp4kmC3_ITz0pKWNJcwDWrbHA8KWFqoo",
    ]

];
