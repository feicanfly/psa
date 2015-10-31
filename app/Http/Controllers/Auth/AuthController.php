<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    protected $redirectPath = '/friends/find';

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'phone' => 'required|max:20|unique:users',
            'password' => 'required|min:3',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postRegister(Request $request)
    {
        $validator = $this->validator($request['user']);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request['user']);
        Auth::login($user);

        $profile_data = $request['user'];
        $profile_data['user_id'] = $user->id;
        $profile_data['avatar'] = $request['profile']['avatar'];
        Profile::create($profile_data);

        return redirect($this->redirectPath());
    }



}
