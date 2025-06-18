<?php

return [
    'enabled' => env('DATABASE_FAILOVER_SENTINEL_ENABLED', true),
    'timeout' => env('DATABASE_FAILOVER_SENTINEL_TIMEOUT', 30),
    'log_channel' => env('DATABASE_FAILOVER_SENTINEL_LOG', 'stack'),
];
