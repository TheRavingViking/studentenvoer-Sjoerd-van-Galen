<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    protected $table = "steps";

    public function recipes()
    {
        return $this->belongsTo(Recipes::class);
    }
}
