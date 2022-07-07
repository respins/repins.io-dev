<?php

namespace ase\RespinsBaseFunctions\Commands;

use Illuminate\Console\Command;

class RespinsBaseFunctionsCommand extends Command
{
    public $signature = 'respins-base-functions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
