<?php

# This file is generated, changes you make will be lost.
# Make your changes in /Users/assertchris/Source/asyncphp/doorman/src/Shell/BashShell.pre instead.

namespace AsyncPHP\Doorman\Shell;

use AsyncPHP\Doorman\Shell;

final class BashShell implements Shell
{
    /**
     * @inheritdoc
     *
     * @param string $format
     * @param array $parameters
     *
     * @return array
     */
    public function exec($format, array $parameters = []): array
    {
        $parameters = array_map("escapeshellarg", $parameters);

        array_unshift($parameters, $format);

        $command = call_user_func_array("sprintf", $parameters);

        exec($command, $output);

        return $output;
    }
}
