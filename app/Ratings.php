<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $table = "ratings";

    public function User()
    {
        return $this->belongsTo(User::class);
    }






}
