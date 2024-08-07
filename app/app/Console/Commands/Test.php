<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Laravel\Facades\Telegram;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @throws TelegramSDKException
     */
    public function handle()
    {
//        dd('https://api.telegram.org/bot'.env('TELEGRAM_BOT_TOKEN').'/getWebhookInfo');
//        dd('https://api.telegram.org/bot'.env('TELEGRAM_BOT_TOKEN').'/setWebhook?url='.env('TELEGRAM_WEBHOOK_URL'));
        $response = Telegram::bot('tasker')->setWebhook(['url' => env('TELEGRAM_WEBHOOK_URL')]);

        dd($response);
    }
}
