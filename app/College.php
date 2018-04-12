<?php

namespace App;
use phpDocumentor\Reflection\Types\Self_;

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

    public function golden_count()
    {
        return self::golden()->count();
    }
}
