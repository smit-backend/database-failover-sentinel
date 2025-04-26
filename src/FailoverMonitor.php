<?php

declare(strict_types=1);

namespace SmitBackend\DBSentinel;

use SmitBackend\DBSentinel\Contracts\HealthCheckDriverInterface;

/**
 * Class FailoverMonitor
 *
 * @package SmitBackend\DBSentinel
 */
class FailoverMonitor implements HealthCheckDriverInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
