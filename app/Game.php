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
        return $this->belongsTo('App\College','golden_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function silver()
    {
        return $this->belongsTo('App\College','silver_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bronze()
    {
        return $this->belongsTo('App\College','bronze_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function golden_s()
    {
        return $this->belongsTo('App\College','golden_s_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function silver_s()
    {
        return $this->belongsTo('App\College','silver_s_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bronze_s()
    {
        return $this->belongsTo('App\College','bronze_s_id');
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
