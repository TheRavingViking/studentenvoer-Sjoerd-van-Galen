<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Steps extends Model
{
    use SoftDeletes;

    protected $table = "steps";

    public function recipes()
    {
        return $this->belongsTo(Recipes::class);
    }
}
