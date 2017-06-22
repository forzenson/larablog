<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
    	'client_id' 	=> env('142488169654228'),
    	'client_secret' => env('51aad639fb0d3e51bc57997bddb48a51'),
    	'redirect'  	=> env('http://git.cms/auth/facebook/callback')
	],
  'twitter' => [
    	'client_id' 	=> env('TW_ID'),
    	'client_secret' => env('TW_SECRET'),
    	'redirect'  	=> env('TW_REDIRECT')
	],
  'google' => [
    	'client_id' 	=> env('76508539733-i54805eiu0tta5dnkt6nfqhupgdffrkc.apps.googleusercontent.com'),
    	'client_secret' => env('JW3eDZ1dQ0mB7zdzURGvRcYo'),
    	'redirect'  	=> env('http://git.cms/auth/google/callback')
	],
  'github' => [
      	'client_id' 	=> env('f41a410bdcff7e84fc4d'),
      	'client_secret' => env('d7acc8ebc9ffe051701848b3f825ef74ef7d1f3a'),
      	'redirect'  	=> env('http://git.cms/auth/github/callback')
  	],


];
