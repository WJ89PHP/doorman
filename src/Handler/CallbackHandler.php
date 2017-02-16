<?php

# This file is generated, changes you make will be lost.
# Make your changes in /Users/assertchris/Source/asyncphp/doorman/src/Handler/CallbackHandler.pre instead.

namespace AsyncPHP\Doorman\Handler;

use AsyncPHP\Doorman\Handler;
use AsyncPHP\Doorman\Task;

final class CallbackHandler implements Handler
{
    /**
     * @inheritdoc
     *
     * @param Task $task
     */
    public function handle(Task $task)
    {
        $data = $task->getData();

        if (isset($data["closure"])) {
            $closure = $data["closure"];
            $closure($this, $task);
        }
    }
}
