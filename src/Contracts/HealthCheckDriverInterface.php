<?php

declare(strict_types=1);

namespace SmitBackend\DBSentinel\Contracts;

/**
 * Interface HealthCheckDriverInterface
 *
 * @package SmitBackend\DBSentinel
 */
interface HealthCheckDriverInterface
{
    public function execute(array $payload = []): mixed;
}
