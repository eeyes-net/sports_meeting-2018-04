<?php

namespace App;


/**
 * Class Photo
 * @package App
 *
 * @property integer $id
 * @property string $path
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Photo extends Model
{
    public function getPathAttribute($path)
    {
        return asset('storage/'.$path);
    }
}
