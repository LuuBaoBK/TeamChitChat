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
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getHomePage()
    {	
        return view('front.login');
    }

    public function postLogin(LoginFormRequest $request)
    {
        $credential = array_except($request->input(), ['_token']);
        if (Auth::attempt($credential)) {
        	return redirect(route('welcome'));
        } else {
        	return back()->withErrors(['login_fails' => trans('messages.login_fails')]);
        }
    }

    public function getLogout()
    {
        if(Auth::check()) {
            Auth::logout();
        }
        
        return redirect('/');
    }
}
