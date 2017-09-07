<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Application extends Model
{
    use Notifiable;
    protected $fillable = ["first_name", "last_name", "class", "pos1", "pos2", "email", "phone"];

    public function routeNotificationForNexmo()
    {
        return $this->phone;
    }
}
