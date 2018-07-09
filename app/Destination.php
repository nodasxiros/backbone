<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    protected $table = 'destinations';

    protected $fillable = ['title', 'country', 'description', 'long', 'lat'];

    public function photos()
    {
        return $this->hasMany('App\DestinationsPhoto');
    }
}
