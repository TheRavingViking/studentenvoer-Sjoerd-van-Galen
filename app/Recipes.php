<?php

namespace App;
use db;


use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
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

    public function reviewRows()
    {
        return $this->hasMany(Ratings::class, 'rating');
    }

    public function avgRating()
    {
        return $this->reviewRows()
            ->selectRaw('avg(rating) as aggregate, recipes_id')
            ->groupBy('recipes_id');
    }

    public function getAvgRatingAttribute()
    {
        if ( ! array_key_exists('avgRating', $this->relations)) {
            $this->load('avgRating');
        }

        $relation = $this->getRelation('avgRating')->first();

        return ($relation) ? $relation->aggregate : null;
    }



}
