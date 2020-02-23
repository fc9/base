<?php

namespace Modules\Register\Entities;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    protected $fillable = [
        'country_iso_code',
        'state_id',
        'full_name',
        'created_at',
        'updated_at',
    ];
}
