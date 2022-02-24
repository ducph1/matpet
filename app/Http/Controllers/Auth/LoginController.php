<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    // public function login(Request $request)
    // {
    //     dd($request);
    //     if (auth()->check()) {
    //         return redirect()->to('home');
    //     }
    //     return view('login');
    // }

    protected function authenticated($user)
    {
        if ($user->is_admin) {
            return redirect()->intended('/admin');
        }

        return redirect()->intended('/');
    }

    // protected function sendFailedLoginResponse(Request $request)
    // {
    //     return redirect()->back()
    //         ->withInput($request->only($this->username(), 'password' ,'remember'))
    //         ->withErrors([
    //             $this->username() => 'ERRORS',
    //         ]);
    // }

}
