<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Settings
    |--------------------------------------------------------------------------
    */
    'site-title' => 'Bumble',
    'site-url' => 'http://bumblecms.com',

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    */
    'auth_columns' => ['username', 'password'],

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    */
    'paginate' => 10,

    /*
    |--------------------------------------------------------------------------
    | Amazon S3 Configuration
    |--------------------------------------------------------------------------
    */
    'S3-key' => '',
    'S3-secret' => '',
    'bucket_name' => '',

    /*
    |--------------------------------------------------------------------------
    | Model Namespace
    |--------------------------------------------------------------------------
    */
    'models' => '',

    /*
    |--------------------------------------------------------------------------
    | Admin Prefix
    |--------------------------------------------------------------------------
    */
    'admin_prefix' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    */
    'admin' => [
        'login' => 'login',
        'logout' => 'logout',
        'dashboard' => 'dashboard',
        'forgot_password' => 'forgot-password',
        'reset_password' => 'reset-password',
    ]
];
