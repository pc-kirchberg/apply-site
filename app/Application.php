<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ["first_name", "last_name", "class", "pos1", "pos2", "email", "phone"];
}
