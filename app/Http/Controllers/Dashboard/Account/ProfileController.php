<?php

namespace App\Http\Controllers\Dashboard\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Modules\Register\Entities\Address;
use Modules\Register\Entities\Country;
use Modules\Register\Entities\Info;
use Modules\Register\Entities\Membership;
use Modules\Register\Entities\Person;
use Modules\Register\Entities\Register;
use Modules\Register\Entities\User;
use Modules\Register\Http\Requests\Dashboard\ProfileRequest;

class ProfileController extends Controller
{
    public function edit($username)
    {
        $user = Session::get('user');

        $address = Address::where('person_id', $user->person_id)->first();

        $phone_mobile = '';
        /*$skype = Info::where('person_id', $person->id)->where('data', 'skype_number')->first();*/
        $indicator = User::find($user->indicator_id);

        $data = [
            'user' => $user,
            'phone' => $phone_mobile,
            'skype' => '',
            #'document_id' => ?,
            'indicator_username' => $indicator->username,
            'create_at' => (new \DateTime($user->active_at))->format('Y-m-d'),
            'address' => [
                'zip_code' => '', //$address->zip_code,
                'street' => '', //$address->street,
                'complement' => '', //$address->complement,
                'sector' => '', //$address->sector,
                'city' => '', //$address->tmp_city,
                'state' => '', //$address->tmp_state,
                'country_id' => '', //$address->tmp_country_id,
                'country' => '', //$country[$address->tmp_country_id - 1]->full_name,
            ],
            '' => 0,
        ];

        return view('dashboard.account.profile', $data);
    }

    public function update(Request $request)
    {
        $data = [];
        return view('app.account.profile', $data);
    }

    public function updateAvatar(ProfileRequest $request)
    {
        // Upload Image
        $path = config('register.person.avatar.path');
        $image_name = 'avatar' . rand() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path($path), $image_name);

        // Resize Image
        $image = Image::make($path . $image_name);
        if ($image->width() > $image->height()) {
            $image->crop($image->height(), $image->height(),0 ,0);
        } else {
            $image->crop($image->width(), $image->width());
        }
        //$image->insert('public/watermark.png');
        $image->save($path . $image_name);

        // Update Person Table
        $person = Person::find(Session::get('user')->person_id);
        $person->avatar = $image_name;
        $person->save();

        // Response Ajax
        return response()->json([
            'message' => __('dashboard.update_image'),
            'url' => url($path . $image_name),
            'class_name'  => 'alert-success'
        ]);
    }
}
