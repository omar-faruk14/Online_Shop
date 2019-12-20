<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;
use DB;
use Cart;
use App\Http\Requests;
use App\Image;

use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

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








/*google redirect*/

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


/*google registrition user all information store database by this function*/

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

       $data=array(); //take array for store information
     
     $data['customer_name']=$user->getName();
     $data['customer_email']=$user->getEmail();
     $data['customer_password']=$user->getId();
     

     $customer_id=DB::table('tbl_customer')
     ->insertGetId($data);
     Session::put('customer_id',$customer_id);
    Session::put('customer_name',$user->getName());
    Session::put('customer_password',$user->getId());
    Session::put('customer_email',$user->getEmail());
     

     return Redirect::to('/google_login');
    }








}
