<?php

namespace Modules\Register\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use MenaraSolutions\Geographer\Earth;
use Modules\Register\Entities\Address;
use Modules\Register\Entities\Membership;
use Modules\Register\Entities\Person;
use Modules\Register\Entities\User;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     * @return User
     */
    public static function register(array $data)
    {
        $data['indicator_id'] = User::where('username', $data['indicator'])->first()->id;
        $user = User::create($data);

        $data['id'] = $user->id;
        $data['user_id'] = $user->id;
        $data['person_id'] = $user->id;
        Person::create($data);
        Membership::create($data);

        $earth = new Earth();
        $country = $earth->findOne(['code' => $data['country']]);
        $state = $country->getStates()->first();
        $capital = $country->getCapital();

        # TODO: get country's capital and city's state.
        $data['country'] = $country->getGeonamesCode();
        $data['state'] = $state->getGeonamesCode();
        $data['city'] = $capital!==false ? $capital->getGeonamesCode() : 0;
        $data['zip_code'] = '0';
        $data['street'] = 'Street';
        $data['number'] = '0';
        Address::create($data);

        return $user;
    }
}
