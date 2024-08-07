<?php

namespace App\Console\Commands\Bot;

use Telegram\Bot\Commands\Command;

class UpdateTaskCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-task-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected string $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
