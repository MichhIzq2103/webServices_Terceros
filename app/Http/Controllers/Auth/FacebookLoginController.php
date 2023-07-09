<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacebookLoginController extends Controller
{
    //
    public function login ()
    {
        return Socialite::driver("facebook")->redirect();
    }
    public function _callback
}
