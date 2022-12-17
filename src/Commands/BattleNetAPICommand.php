<?php

namespace Sabinico\BattleNetAPI\Commands;

use Illuminate\Console\Command;

class BattleNetAPICommand extends Command
{
    public $signature = 'laravel-battlenet-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
