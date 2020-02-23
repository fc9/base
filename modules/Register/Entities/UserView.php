<?php

namespace Modules\Register\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserView extends Model
{
    /**
     * The database view table.
     *
     * @var string
     */
    protected $table = 'user_view';

//    public function user(): BelongsTo
//    {
//        return $this->belongsTo(User::class);
//    }
//
//    public function person(): BelongsTo
//    {
//        return $this->belongsTo(Person::class);
//    }
//
//    public function membership(): BelongsTo
//    {
//        return $this->belongsTo(Membership::class, 'person_id');
//    }

}
