<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Auth;

class AuthenticateController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getHomePage()
    {
        return view('front.login');
    }

    public function postLogin(LoginFormRequest $request)
    {
        $credential = array_except($request->input(), ['_token']);
        if (Auth::attempt($credential)) {
        	return "b";
        } else {
        	return "a";
        }
    }
}
