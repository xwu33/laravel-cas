<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Cas;
use App\User;
use Illuminate\Http\Request;

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

    public function loginCas()
{

  Cas::authenticate();

  if($userID = Cas::getCurrentUser())
  {


    $attributes = Cas::getAttributes();

    $casUserInfo = [
      "firstname" => "",
      "lastname" => "",
      "email" => "",
      "prefix" => "",
      "suffix" => "",
      "middleinitial" => "",
      "address" => "",
      "phonenumber" => "",
    ];

    foreach($attributes as $key=>$value) {
      $casUserInfo[$key] = $value;
    }



      $casUserInfo['username'] = $userID;

      $this->copyMyBamaUser($casUserInfo);

    }

    $id = User::select('id')->where('username',$userID)->first();
    $id = $id['id'];


    $user = User::findOrFail($id);



    $this->updateMyBamaUser($id,$casUserInfo);

    $user = User::findOrFail($id);

    $this->guard()->loginUsingId($id);

    return redirect()->intended($this->redirectPath());

  }


public function updateMyBamaUser($id,$data) {

  $info = [
    'email' => $data['email'],
    'prefix' => $data['prefix'],
    'firstname' => $data['firstname'],
    'middle_initial' => $data['middleinitial'],
    'lastname' => $data['lastname'],
    'suffix' => $data['suffix'],
    'phone_number' => $data['phonenumber'],
    'address' => $data['address']
  ];

  foreach (array_keys($info) as $key) {
    if($info[$key] == "") {
      unset($info[$key]);
    }
  }

  $user = User::findOrFail($id);
  $user->fill($info)->save();

}

public function copyMyBamaUser($data) {

  return User::create([
    'username' => $data['username'],
    "password" => "isCas",
    'email' => $data['email'],
    'prefix' => $data['prefix'],
    'firstname' => $data['firstname'],
    'middle_initial' => $data['middleinitial'],
    'lastname' => $data['lastname'],
    'suffix' => $data['suffix'],
    'phone_number' => $data['phonenumber'],
    'is_cas' => 1
  ]);

}

public function logout(Request $request)
{
  $isCas = Auth::user()->is_cas;

  $this->guard()->logout();

  $request->session()->invalidate();

  if($isCas == 1) {
    Cas::logout();
  }

  return redirect('/');
}



}
