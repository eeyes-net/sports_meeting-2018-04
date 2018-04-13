<?php

namespace App;

/**
 * Class Ballot
 * @package App
 *
 * @property integer $id
 * @property string $token
 * @property integer $college_id
 * @property string $created_at
 * @property string $updated_at
 */
class Ballot extends Model
{
    protected $table = 'ballot';

    public function college()
    {
        return $this->belongsTo('App\College');
    }
}
