<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    protected $table = "ingredients";
    protected $fillable = ['name', 'unit', 'amount'];

    public function recipes()
    {
        return $this->belongsTo(Recipes::class);
    }
}
