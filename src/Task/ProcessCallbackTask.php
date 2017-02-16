<?php

# This file is generated, changes you make will be lost.
# Make your changes in /Users/assertchris/Source/asyncphp/doorman/src/Task/ProcessCallbackTask.pre instead.

namespace AsyncPHP\Doorman\Task;

use AsyncPHP\Doorman\Expires;
use AsyncPHP\Doorman\Process;

final class ProcessCallbackTask extends CallbackTask implements Expires, Process
{
    /**
     * @var int
     */
    private $id;

    public function getId(): int
    {
        return $this->id ?: -1;
    }

    public function setId(int $value)
    {
        $this->id = $value;
    }

    /**
     * @var null|int
     */
    private $expiredAt;

    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getExpiresIn(): int
    {
        return -1;
    }

    /**
     * @inheritdoc
     *
     * @param int $startedAt
     *
     * @return bool
     */
    public function shouldExpire(int $startedAt): bool
    {
        $this->expiredAt = time();

        return true;
    }

    /**
     * Checks whether this task has expired.
     *
     * @return bool
     */
    public function hasExpired(): bool
    {
        return is_int($this->expiredAt);
    }
}
