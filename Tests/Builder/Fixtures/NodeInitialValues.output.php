<?php

return [
    'some_clever_name' => [
        'first' => 'bar',
        'second' => 'foo',
        'third' => null,
    ],
    'messenger' => [
        'transports' => [
            'fast_queue' => [
                'dsn' => 'sync://',
                'serializer' => 'acme',
            ],
            'slow_queue' => [
                'dsn' => 'doctrine://',
                'options' => ['table' => 'my_messages'],
            ],
        ],
    ],
];
