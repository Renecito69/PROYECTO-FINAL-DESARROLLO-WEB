<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\TallerControllers\TallerController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/taller';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
