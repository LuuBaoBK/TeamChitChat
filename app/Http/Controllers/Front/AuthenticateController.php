<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\LoginFormRequest;
use App\Http\Controllers\Controller;

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
    	dd($request);
    }
}
