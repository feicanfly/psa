<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getSetting()
    {        
        $user = Auth::user();
        $profile = Profile::where('user_id', '=', $user->id)->first();
        return view('user.setting', ['user' => $user, 'profile' => $profile]);
    }

    public function postSetting(Requests\SettingRequest $request)
    {
        $userData['name'] =  $request['user']['name'];

        if ($request['user']['password']){
             $userData['password'] =  bcrypt($request['user']['password']);
        }

        User::where('id', '=', Auth::user()->id)->update($userData);
        $profileData = $request['profile'];
        $profileData['name'] = $request['user']['name'];

        Profile::where('user_id', '=', Auth::user()->id)->update($profileData);
        flash('修改成功', '');
        return redirect('/setting');
    }

    public function updateLocation(Requests\SettingRequest $request) {
        $location['last_lng'] = $request->last_lng;
        $location['last_lat'] = $request->last_lat;
        Profile::where('user_id', '=', Auth::user()->id)->update($location);
        return 'success';
    }
}
