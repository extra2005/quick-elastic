<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'desk'
    ];
        
          /**
    * Получить пользователя - владельца данной задачи
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
