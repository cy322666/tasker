<?php

namespace App\Console\Commands\Bot;

use Telegram\Bot\Commands\Command;

class StopCommand extends Command
{
    protected string $name = 'stop';
    protected string $pattern = '{username} {age: \d+}';
    protected string $description = 'Start Command to get you started';

    protected string $signature = 'app:stop-command';

    public function handle()
    {
        //
    }
}
