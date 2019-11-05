<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer item_id
 * @property string file_name
 */
class Image extends Model
{
    protected $fillable = [
        'item_id',
        'file_name',
    ];
}
