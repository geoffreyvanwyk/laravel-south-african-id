<?php

namespace Kokerboom\Laravel\Commands;

use Illuminate\Console\Command;

class LaravelCommand extends Command
{
    public $signature = 'laravel-south-african-id';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
