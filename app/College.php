<?php

namespace App;

/**
 * Class College
 * @package App
 *
 * @property integer $id
 * @property string $name
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class College extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function golden()
    {
        return $this->hasMany('App\Game','golden_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function silver()
    {
        return $this->hasMany('App\Game','silver_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bronze()
    {
        return $this->hasMany('App\Game','bronze_id');
    }

    public function golden_s()
    {
        return $this->hasMany('App\Game','golden_s_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function silver_s()
    {
        return $this->hasMany('App\Game','silver_s_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bronze_s()
    {
        return $this->hasMany('App\Game','bronze_s_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ballot()
    {
        return $this->hasMany('App\Ballot');
    }

    /**
     * @return float|int
     */
    public function medals_count()
    {
        $golden_count = $this->golden->count();
        $silver_count = $this->silver->count();
        $bronze_count = $this->bronze->count();
        $medals_count = 3*$golden_count+2*$silver_count+$bronze_count;

        return $medals_count;
    }
}
