<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripsPhoto extends Model
{
    protected $fillable = ['trip_id', 'filename'];

    public function trip()
    {
        return $this->belongsTo('App\Trip');
    }
}
