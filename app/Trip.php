<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    
    protected $fillable = ['title', 'description', 'departure_date', 'duration', 'destination_id'];

    public function photos()
    {
        return $this->hasMany('App\TripsPhoto');
    }

    public function destination()
    {
        return $this->hasOne('App\Destination');
    }
}
