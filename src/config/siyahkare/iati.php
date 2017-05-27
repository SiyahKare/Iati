<?php

/*
    |--------------------------------------------------------------------------
    | API
    |--------------------------------------------------------------------------
    |
    | The API gives you some basic URIs to access to perform common operations.
    | The API is currently optimal for installations which are not having
    | customers activated as the access endpoint currently don't check if
    | foreign table, user id and role id are associated with the current
    | customer.
    |
    | The URL is a prefix for all API calls. php artisan route:list will
    | describe more in detail what the URIs are.
    | Also the endpoint naming is affected by the url option.
    |
    */

    'api' => [
        'enabled' => true,
        'url'     => 'api/iati',
    ],
