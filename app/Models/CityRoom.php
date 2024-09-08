<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CityRoom extends Pivot
{
    public $incrementing = true;

    protected static function booted()
    {
        static::created(function ($cityRoom) {
            dump($cityRoom, "Custom model for Pivot");
        });
    }
}
