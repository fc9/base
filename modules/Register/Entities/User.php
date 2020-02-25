<?php

namespace Modules\Register\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The database table.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * Attributes that can be assigned in bulk.,
     *
     * @var array
     */
    protected $fillable = [
        'indicator_id',
        'username',
        'email',
        'email_verified_at',
        'password',
        'status',
        'access_profile',
        'active_at',
        'created_at',
        'updated_at',
    ];

    public $incrementing = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['email_verified_at' => 'datetime',];

    /**
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::needsRehash($value) ? Hash::make($value) : $value;
    }

    /**
     * Get the person record associated with the user.
     */
    public function person()
    {
        return $this->hasOne('Modules\Register\Entities\Person');
    }

    public static function usernameIsRouteorURI(string $username)
    {
        # Do not match a laravel's reserved route or URI.
        $routeList = Route::getRoutes();
        foreach ($routeList as $value) {
            if ($value->uri() == $username) {
                return false;
            }
        }
    }

//    User Laravel Filter
//    public static function usernameIsFree(string $username)
//    {
//        return User::where('username', $username)->doesntExist();
//    }

//    User Laravel Filter
//    public static function emailAvaliable(string $email)
//    {
//        return User::where('email', $email)->doesntExist();
//    }

//    Use Laravel filters
//    public static function validUsername(string $username, $type = self::USERNAME_DEFAULT)
//    {
//        # 1. Only contains alphanumeric characters, underscore and dot.
//        # 2. Underscore and dot can't be at the end or start of a username (e.g _username_, .username, username.).
//        # 3. Underscore and dot can't be next to each other (e.g user_.name).
//        # 4. Underscore or dot can't be used multiple times in a row (e.g user__name / user..name).
//        # 4. Number of characters must be between 8 to 20.
//        if (preg_match("/^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/", $username) !== 1) {
//            return false;
//        }
//
//        # 5. Do not match a laravel's reserved route or URI.
//        $routeList = Route::getRoutes();
//        foreach ($routeList as $value) {
//            if ($value->uri() == $username) {
//                return false;
//            }
//        }
//
//        # 6. Validating username in the database.
//        return ($type == self::USERNAME_DEFAULT)
//            # 6.1. If normal: username free (unique).
//            ? User::where('username', $username)->doesntExist()
//            # 6.2. If sponsor: it must have an active User and Membership, in addition to a "member" Access Profile.
//            : Membership::join('user', 'membership.user_id', '=', 'user.id')
//                ->join('access_profile', 'user.access_profile_id', '=', 'access_profile.id')
//                ->where('membership.status', Membership::STATUS_ACTIVE)
//                ->where('user.status', self::STATUS_ACTIVE)
//                ->where('user.username', $username)
//                ->where('access_profile.name', Configuration::get('valid_access_profile_for_sponsor'))
//                ->exists();
//    }

}
