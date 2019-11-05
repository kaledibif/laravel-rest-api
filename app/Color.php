<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string value
 */
class Color extends Model
{
    protected $fillable = [
        'name',
        'value',
    ];
}
