<?php

namespace Modules\Register\Entities;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $fillable = [
        'flips_code',
        'iso_code',
        'full_name',
        'available',
        'created_at',
        'updated_at',
    ];
}
