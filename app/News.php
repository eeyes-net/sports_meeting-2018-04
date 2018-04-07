<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class News extends Model
{
    protected $fillable = ['title','content'];
}
