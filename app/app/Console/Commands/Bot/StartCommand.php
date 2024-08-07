<?php

namespace App\Console\Commands\Bot;

use Illuminate\Support\Facades\Log;
use Telegram\Bot\Commands\Command;

class StartCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected string $signature = 'app:start-command';

    protected string $name = 'start';
    protected string $pattern = '{username} {age: \d+}';
    protected string $description = 'Start Command to get you started';

    public function handle()
    {
        # username from Update object to be used as fallback.
        $fallbackUsername = $this->getUpdate()->getMessage()->from->username;

        dd($this->getUpdate()->getMessage());
        $age = $this->argument('age');

        # Get the username argument if the user provides,
        # (optional) fallback to username from Update object as the default.
        $username = $this->argument(
            'username',
            $fallbackUsername
        );

        $this->replyWithMessage(['text' => 'Авторизация в боте прошла успешно']);
    }
}
