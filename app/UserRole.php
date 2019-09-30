<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'name', 'access'
    ];
        
          /**
    * Получить пользователя - владельца данной задачи
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
