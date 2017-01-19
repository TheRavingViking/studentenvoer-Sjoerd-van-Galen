<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use SoftDeletes;

    protected $table = "ratings";

    public function User()
    {
        return $this->belongsTo(User::class);
    }






}
