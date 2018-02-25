<?php
return [
    'terminal_id' => env('BORICA_TERMINAL_ID', ''),
    'private_key_file' => env('BORICA_PRIVATE_KEY_FILE', ''),
    'private_key_password' => env('BORICA_PRIVATE_KEY_PASSWORD' ,''),
    'public_key_file' => env('BORICA_PUBLIC_KEY_FILE', ''),
    'public_certificate' => env('BORICA_PUBLIC_CERT', ''),
    'use_key_file_reader' => env('BORICA_USE_KEY_FILE_READER', true),
    'debug' => env('APP_DEBUG', false),
    'currency' => env('BORICA_CURRENCY', 'BGN'),
];