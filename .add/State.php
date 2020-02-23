<?php

namespace Modules\Register\Entities;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state';

    protected $fillable = [
        'country_iso_code',
        'capital_id',
        'abbreviation',
        'full_name',
        'created_at',
        'updated_at',
    ];
}
