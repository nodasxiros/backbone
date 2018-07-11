<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    
    protected $fillable = ['title', 'description', 'departure_date', 'duration', 'destination'];

    public function destination()
    {
        return $this->hasOne('App\Destination');
    }
}
