<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property int user_id
 * @property int color_id
 * @property int icon_id
 * @property int order
 */
class Category extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'color_id',
        'icon_id',
        'order',
    ];

    protected $casts = [
        'color_id' => 'integer',
        'icon_id' => 'integer',
        'order' => 'integer'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
