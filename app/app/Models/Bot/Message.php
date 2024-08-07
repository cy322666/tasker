<?php

namespace App\Models\Bot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        ''
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    public static function setMessage(Request $request)
    {
        return Message::query()->create([
            'message_id' => $request->message->message_id,
            'from_id'    => $request->message->from->id,
            'from_username' => $request->message->from->username,
            'from_is_bot'   => $request->message->from->is_bot,
            'chat_id' => $request->chat->id,
            'text' => $request->message->text,
            //type
        ]);
    }
}
