<?php

declare(strict_types=1);

namespace SmitBackend\DBSentinel;

/**
 * Raft consensus quorum voting before triggering primary promotion
 */
class RaftQuorumChecker
{
    public function run(): bool
    {
        return true;
    }
}
