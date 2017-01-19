<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use SoftDeletes;

    protected $table = "ingredients";
    protected $fillable = ['name', 'unit', 'amount'];

    public function recipes()
    {
        return $this->belongsTo(Recipes::class);
    }
}
