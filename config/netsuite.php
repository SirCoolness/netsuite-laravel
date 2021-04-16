<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Core Service Configuration
    |--------------------------------------------------------------------------
    */
    'endpoint'  => env('NETSUITE_ENDPOINT', '2019_1'),
    'host'      => env('NETSUITE_HOST', 'https://webservices.netsuite.com'),
    'account'   => env('NETSUITE_ACCOUNT', ''),
    'app_id'    => env('NETSUITE_APP_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | Token Based Authentication
    |--------------------------------------------------------------------------
    | If a token is defined, the service will assume TBA should be used and
    | will depend on the other three fields to be set correctly. The only
    | optional setting here is signatureAlgorithm.
    */
    'consumerKey'           => env('NETSUITE_CONSUMER_KEY', ''),
    'consumerSecret'        => env('NETSUITE_CONSUMER_SECRET', ''),
    'token'                 => env('NETSUITE_TOKEN', ''),
    'tokenSecret'           => env('NETSUITE_TOKEN_SECRET', ''),
    'signatureAlgorithm'    => env('NETSUITE_HASH_TYPE', 'sha256'),

    /*
    |--------------------------------------------------------------------------
    | User Credentials Based Authentication
    |--------------------------------------------------------------------------
    | NetSuite has stopped supporting this method of authentication as of
    | web services version 2020.2. It is recommended to move to TBA even if
    | you're still using an older web services version.
    */
    'email'     => env('NETSUITE_EMAIL', ''),
    'password'  => env('NETSUITE_PASSWORD', ''),
    'role'      => env('NETSUITE_ROLE', ''),

    /*
    |--------------------------------------------------------------------------
    | Other Optional Settings
    |--------------------------------------------------------------------------
    | You can enable logging of all SOAP requests and responses and define
    | log directory, as well as additional soap options.
    */
    'logging'       => env('NETSUITE_LOGGING', false),
    'log_path'      => env('NETSUITE_LOG_PATH', storage_path('logs')),
    'soap_options'  => [],
];
