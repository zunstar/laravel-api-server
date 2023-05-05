<?php

namespace App\Logging;

use Monolog\Formatter\LineFormatter;

class CustomizeFormatter
{
    /**
     * Customize the given Monolog LineFormatter.
     *
     * @param  \Monolog\Formatter\LineFormatter  $formatter
     * @return void
     */
    public function __invoke(LineFormatter $formatter)
    {
        // Customize the formatter
        $formatter->includeStacktraces(true);
    }
}
