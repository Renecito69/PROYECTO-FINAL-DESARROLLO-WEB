<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\TallerControllers\TallerController;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Storage;

use App\Models\Role;


class RegisterController extends Controller
{
  
    use RegistersUsers;

    protected $redirectTo = '/taller';




    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $avatar = $data['avatar']->store('/avatar');

        $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'avatar' => $avatar,
        'password' => bcrypt($data['password']),
        ]);
        $user->roles()->attach(Role::where('name', 'user')->first());
       
        return $user;
    }
    
}
