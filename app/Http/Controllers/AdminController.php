<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;
use Redirect;
use Auth;
use Guzzle;
use Socialite;
use Session;
use URL;
use App\User;
use View;

class AdminController extends Controller
{
    protected function login(Request $data)
    {
    	if (Auth::attempt(['email' => $data->email, 'password' => $data->password])) {
            $user = User::where('email', $data->email)->first();
            Auth::login($user);
            return redirect()->to('/admin/dashboard');
        }else{
        	return Redirect::back()->with('error_code', 2);
        }
    }

    protected function register(Request $data)
    {
        User::insert(['name' => $data->name, 'email' => $data->email, 'password' => bcrypt($data->password)]);
        return redirect('/admin');
    }

    protected function logout()
    {
    	Session::flush();
    	Auth::logout();
    	return redirect('/');
    }

    protected function fetchbuyers(){
        $data = DB::table('buyers')->get();
        return view::make('backend.view')->with('data', $data)->with('type', 'buyers');
    }

    protected function fetchsellers(){
        $data = DB::table('sellers')->get();
        return view::make('backend.view')->with('data', $data)->with('type', 'sellers');
    }
}
