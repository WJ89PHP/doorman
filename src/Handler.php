<?php

# This file is generated, changes you make will be lost.
# Make your changes in /Users/assertchris/Source/asyncphp/doorman/src/Handler.pre instead.

namespace AsyncPHP\Doorman;

interface Handler
{
    /**
     * Handles a task.
     *
     * @param Task $task
     */
    public function handle(Task $task);
}
