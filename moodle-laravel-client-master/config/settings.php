<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Moodle API Connections
    |--------------------------------------------------------------------------
    | Here you may configure your settings for Moodle API Connection (token, url, etc)
    |
    |
    */

    'moodle_rest_api_url' => env('MOODLE_REST_API_URL', 'http://34.125.125.16/moodle/webservice/rest/server.php'),
    'moodle_rest_api_token' => env('MOODLE_REST_API_TOKEN', '5a6198152b35a542d0ed57de6f63d9f8'),

];
