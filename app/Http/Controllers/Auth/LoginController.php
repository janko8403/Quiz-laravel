<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Auth;
use App\User;
use App\Role;
use Carbon\Carbon;
use Session;
use Socialite;
use Illuminate\Support\Facades\Log;

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
    public function redirectTo()
    {
        if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Editor')  ) {
            return 'admin/dashboard';
        }
        elseif (Auth::user()->hasRole('User')) {
            return '/home';


        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // login azure
    public function redirectToProvider()
    {
        return Socialite::with('azure')->with(["prompt" => "select_account"])->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $azureUser = Socialite::with('azure')->user();
           
            // Log::info(print_r('Azure: '.$azureUser, true));
            $authUser = $this->findOrCreateUser($azureUser);
            if ($authUser) {
                Auth::login($authUser, true);
            } 
            return redirect('/home');
        } catch (Exception $e) {
            return redirect('/');
        }
    }

    private function findOrCreateUser($user)
    {
        $role_user = Role::where('name', 'User')->first();

        $authUser = User::where('azure_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }
        $newUser = User::create([
            'email' => $user->email,
            'azure_id' => $user->id,
            'email_verified_at' => date("Y-m-d H:i:s")
        ]);
        $newUser->roles()->attach($role_user);

        $authUser = User::where('azure_id', $user->id)->first();
        return($authUser);
    }
}
