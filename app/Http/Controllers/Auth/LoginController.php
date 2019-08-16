<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Alert;

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
    protected $redirectTo = 'index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->redirectTo = route('index');
        $this->middleware('guest')->except('logout');
    }


    // public function showLogin(){
    //     return view('Admin.auth.login');
    // }

    public function doLogin(Request $request){

      $this->validate($request, [
        'name'  => 'required',
        'password'  => 'required',
      ]);

      $user_data = array(
        'name'  => $request->get('name'),
        'password'  => $request->get('password')
        );
        // dd($user_data);

        if (Auth::guard()->attempt($user_data)) {
          return redirect()->route('index')->with('success', 'Berhasil login');
        } else {
          Alert::error('Gagal login, silahkan coba lagi', 'Gagal');
          return back()->withInput($request->all());
        }
    }


    protected function guard(){
      return auth::guard();
    }
}
