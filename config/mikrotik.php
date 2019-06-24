<?php

return [
    'auth' => [
        'host' => env('MK_API_HOST', null),
        'user' => env('MK_API_USER', 'admin'),
        'password' => env('MK_API_PASSWORD', ''),
        'port' => env('MK_API_PORT', 8728)
    ],
    'entities' => [
        'interface' => \jjsquady\MikrotikApi\Entity\InterfaceEntity::class
    ]
];