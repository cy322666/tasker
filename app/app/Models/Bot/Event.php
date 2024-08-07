<?php

namespace App\Models\Bot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        ''
    ];

    public function chat()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function setEvent(Request $request)
    {
        return Event::query()->create([
            'chat_id' => $request->my_chat_member->chat->id,
            'type' => 'my_chat_member',
            //
        ]);
    }
}
