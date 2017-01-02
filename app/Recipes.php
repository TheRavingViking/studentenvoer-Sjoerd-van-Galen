<?php

namespace App;
use db;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Recipes extends Model
{
    use SoftDeletes;

    protected $table = "recipes";

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredients::class);
    }

    public function Steps()
    {
        return $this->hasMany(Steps::class);
    }

    public function Ratings()
    {
        return $this->hasMany(Ratings::class);

    }


    public function comments()
    {
        return $this->hasMany(comments::class);

    }




}
