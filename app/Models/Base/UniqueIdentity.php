<?php

namespace App\Models\Base;

use Illuminate\Support\Str;

trait UniqueIdentity
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
