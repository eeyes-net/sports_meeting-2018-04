<?php

namespace App;


class Ballot extends Model
{
    protected $table = 'ballot';

    public function college()
    {
        return $this->belongsTo('App\College');
    }
}
