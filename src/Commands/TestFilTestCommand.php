<?php

namespace Webplusm\TestFilTest\Commands;

use Illuminate\Console\Command;

class TestFilTestCommand extends Command
{
    public $signature = 'test-fil-test';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
