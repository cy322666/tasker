<?php

namespace App\Models\Bot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        ''
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function chat()
    {
        return $this->hasOne(Chat::class);
    }

    public function user()
    {
        return $this->hasOne(Chat::class);
    }
}
