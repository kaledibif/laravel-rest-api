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

    protected $casts = [
        'value' => 'decimal:2',
        'category_id' => 'integer',
        'date' => 'date',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
