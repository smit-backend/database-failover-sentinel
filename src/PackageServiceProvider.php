<?php

declare(strict_types=1);

namespace SmitBackend\DBSentinel;

use SmitBackend\DBSentinel\Contracts\HealthCheckDriverInterface;

class PackageServiceProvider
{
    public function register(): void
    {
        // Bind core service singleton
    }

    public function boot(): void
    {
        // Boot routes and configuration publishing
    }
}
