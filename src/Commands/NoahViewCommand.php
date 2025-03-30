<?php

namespace Sharenjoy\NoahView\Commands;

use Illuminate\Console\Command;

class NoahViewCommand extends Command
{
    public $signature = 'noah-view';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
