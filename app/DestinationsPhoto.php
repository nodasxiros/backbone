<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinationsPhoto extends Model
{
    protected $fillable = ['destination_id', 'filename'];

    public function destination()
    {
        return $this->belongsTo('App\Destination');
    }
}
