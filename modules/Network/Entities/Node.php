<?php

namespace Modules\Network\Entities;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $fillable = ['id'];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The database table.
     *
     * @var string
     */
    protected $table = 'node';
}
