<?php

namespace App;

use Carbon\Carbon;

/**
 * Class Game
 * @package App
 *
 * @property integer $id
 * @property string $name
 * @property integer $class
 * @property string $golden_id
 * @property string $silver_id
 * @property string $bronze_id
 * @property timestamp $begins_at
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Game extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function golden()
    {
        return $this->belongsTo('App\College');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function silver()
    {
        return $this->belongsTo('App\College');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bronze()
    {
        return $this->belongsTo('App\College');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ballot()
    {
        return $this->hasMany('App\Ballot');
    }

    /**
     * @param $begins_at
     * @return string
     */
    public function getBeginsAtAttribute($begins_at)
    {
        return Carbon::createFromTimeString($begins_at);
    }
}
