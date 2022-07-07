<?php

namespace Respins\BaseFunctions\Commands;

use Illuminate\Console\Command;

class BaseFunctionsCommand extends Command
{
    public $signature = 'base-functions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}