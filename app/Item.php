<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string value
 * @property int category_id
 * @property date date
 * @property string details
 */
class Item extends Model
{
    protected $fillable = [
        'name',
        'value',
        'category_id',
        'date',
        'details',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
