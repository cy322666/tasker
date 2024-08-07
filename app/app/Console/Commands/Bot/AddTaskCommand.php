<?php

namespace App\Console\Commands\Bot;

use App\Models\Bot\Task;
use Telegram\Bot\Commands\Command;

class AddTaskCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected string $signature = 'app:add-task-command';

    protected string $name = 'add';
    protected string $pattern = '{username: \@+} {text}';
    protected string $description = 'Поставь задачу';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        # username from Update object to be used as fallback.
        $fallbackUsername = $this->getUpdate()->getMessage()->from->username;

        $text = $this->argument('text');

        # Get the username argument if the user provides,
        # (optional) fallback to username from Update object as the default.
        $username = $this->argument(
            'username',
            $fallbackUsername
        );

        Task::query()->create([
            //в команде будет работать?
        ]);
    }
}
