<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;


Route::post('hook', function () {

//    Log::info(__METHOD__, $request->toArray());

    $update = Telegram::commandsHandler(true);

    Log::info(__METHOD__, [$update]);
});

//Route::post('hook', [ ApiController::class, 'hook' ]);
