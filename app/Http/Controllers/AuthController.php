<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(){

        return view('welcome');
    }

    public function register(){

        return view('register');
    }

    public function Doneregister(Request $req)
    {
        $req->validate([
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

       

        return redirect()->route('login');
    }

    public function Donelogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if (md5($credentials['password']) === Auth::user()->password) {
        //     $user = Auth::user();
        //     if ($user->blocked == 1) {
        //         return redirect()->route('login')->with('error', 'Your user is blocked, please contact admin.');
        //     }

        //     if ($user->status == 0) {
        //         return redirect()->route('login')->with('error', 'Your user is disabled, please contact admin.');
        //     }

        //     return redirect()->route('index');
        // }

        // return redirect()->route('login')->with('error', 'Invalid username password.');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return redirect()->route('login.form')->with('error', 'Invalid username password.');
        }

       
        if (md5($credentials['password']) === $user->password) {
            Auth::login($user);
                if ($user->blocked == 1) {
                    return redirect()->route('login')->with('error', 'Your user is blocked, please contact admin.');
                }
    
                if ($user->status == 0) {
                    return redirect()->route('login')->with('error', 'Your user is disabled, please contact admin.');
                }
    
                return redirect()->route('index');
            }
    
            return redirect()->route('login')->with('error', 'Invalid username password.');
        
        }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function index(){

        $posts = Posts::all();
        return view('index', ['posts' => $posts]);
    }
}
