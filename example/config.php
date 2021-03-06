<?php

return [
    'bootstrap' => __DIR__ . '/bootstrap.php',
    'message_server' => [
        'host' => '127.0.0.1',
        'port' => 11300,
    ],
    'tubes' => [
        'Example1' => ['worker_num' => 10, 'class' => 'Footstones\\Plumber\\Example\\Example1Worker'],
        'Example2' => ['worker_num' => 10, 'class' => 'Footstones\\Plumber\\Example\\Example2Worker'],
        'Example3' => [
            'worker_num' => 5,
            'class' => 'Footstones\Plumber\ForwardWorker',
            'destination' => [
                'host' => 'localhost',
                'port' => 11300,
                'tubeName' => 'Example4',
            ]
        ],
    ],

    'log_path' => '/tmp/plumber.log',
    'output_path' => '/tmp/plumber.output.log',
    'pid_path' => '/tmp/plumber.pid',
    'daemonize' => 1,
    'reserve_timeout' => 10,
    'execute_timeout' => 60,
];