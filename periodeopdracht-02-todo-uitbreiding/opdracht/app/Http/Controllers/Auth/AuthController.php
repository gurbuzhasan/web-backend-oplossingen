<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
	

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    private $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
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
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
	
	
	public function postRegister(){
		
		
		//check of de velden correct ingevuld zijn		
		$rules = array('email' => 'required|email', 'password' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()){
			
			return Redirect::route('register')->withErrors($validator);
			
		}
		
		
		//steek alle data van de velden in een array om het door te geven aan de create methode
		
		$data = array(
		
			'email' => Input::get('email'),
			'password' => Input::get('password')
			
			
		);
		//create user
		$this->create($data);
		//probeer in te loggen
		Auth::attempt($data);
		
		
		return Redirect::route("home");
		
	}
	
	
	public function postLogin(){
		//check of de velden correct ingevuld zijn	
		$rules = array('email' => 'required|email', 'password' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()){
			
			return Redirect::route('login')->withErrors($validator);
			
		}
		//probeer in te loggen
		$auth = Auth::attempt(array(
		
				'email' => Input::get('email'),
				'password' => Input::get('password')
				
		
		), false);
		
		//geef error weer als inloggen mislukt
		if (!$auth){
			
			return Redirect::route('login')->withErrors(array(
			
				"invalid email/password"
			
			));
		}
		
		return Redirect::route("home");
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
