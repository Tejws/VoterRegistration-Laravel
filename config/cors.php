<?php

return [
    'paths' => ['api/*', 'storage/photos/*'], // Make sure to include the correct paths
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'], // Adjust this for production
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];


