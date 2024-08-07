<?php

namespace App\Models\Bot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        ''
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public static function setChat(Request $request)
    {
        return Chat::query()->create([
            'chat_id' => $request->my_chat_member->chat->id,
            'title' => $request->my_chat_member->chat->title,
            'type' => $request->my_chat_member->chat->type,
            'admin_user_id' => $request->my_chat_member->from->id
        ]);
    }
}
