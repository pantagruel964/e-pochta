<?php

return [
    /**
     * Test mode. 1 - enabled. 0 - disabled
     */
    'test' => 1,

    /**
     * API vsersion
     */
    'version' => '3.0',

    /**
     * Endpoint URL
     */
    'end_point' => env('EPOCHTA_URL', ''),

    /**
     * Public key
     */
    'public_key' => env('EPOCHTA_PUBLIC_KEY', ''),

    /*
     * Private key
     */
    'private_key' => env('EPOCHTA_PRIVATE_KEY', ''),
];
