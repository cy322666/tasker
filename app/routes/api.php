<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;






Route::post('hook', [ ApiController::class, 'hook' ]);
