<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    protected $table = "ingredients";

    public function recipe()
    {
        return $this->belongsTo(Recipes::class);
    }
}
