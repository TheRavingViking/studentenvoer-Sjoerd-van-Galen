<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    use SoftDeletes;


    protected $table = "comments";

    public function recipe()
    {
        return $this->belongsTo(recipes::class);
    }
}
