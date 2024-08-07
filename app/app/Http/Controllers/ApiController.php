<?php

namespace App\Http\Controllers;

use App\Models\Bot\Chat;
use App\Models\Bot\Event;
use App\Models\Bot\Message;
use App\Models\Bot\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    public function hook(Request $request)
    {
        Log::info(__METHOD__, $request->toArray());
    }
}
