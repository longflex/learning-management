<?php

namespace App\Http\Controllers;

use App\Events\RecordHistory;
use App\Http\Request\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class AuthController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginView()
    {
        return view('login.main', [
            'layout' => 'login'
        ]);
    }

    /**
     * Authenticate login user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        // $hashed1 = Hash::make($request->password, [
        //     'memory' => 1024,
        //     'time' => 2,
        //     'threads' => 2,
        // ]);
        // $hashed = Hash::make($request->password);
        // 
        
        if (!\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            throw new \Exception('Wrong email or password.');
        }
        event(new RecordHistory('you logged in successfully'));
    }

    /**
     * Logout user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        event(new RecordHistory('you logged out successfully'));
        \Auth::logout();
        
        return redirect('login');
    }
    public function registerView()
    {
        return view('login.register',[
            'layout'=>'login'
        ]);

    }
    public function register(Request $request)
    {
        //echo '<script> alert("1"); </script>';
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        event(new RecordHistory('you created account successfully'));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
