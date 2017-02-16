<?php

# This file is generated, changes you make will be lost.
# Make your changes in /Users/assertchris/Source/asyncphp/doorman/src/Shell.pre instead.

namespace AsyncPHP\Doorman;

interface Shell
{
    /**
     * Executes a command after filtering all parameters.
     *
     * @param string $format
     * @param array $parameters
     *
     * @return array
     */
    public function exec($format, array $parameters = []): array;
}
