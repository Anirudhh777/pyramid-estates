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
use Mail;

class FormsController extends Controller
{
    protected function buyer_register(Request $info)
    {
    	$email = 'pyramid.estates.aws@gmail.com';
    	Mail::send('emails.test', ['email' => $email, 'Form' => "Buyer Form", 'name' => $info->name, 'phone' => $info->phone, 'user_email' => $info->email, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'kind_prop' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'additional' => $info->additional], 
            function ($message) use ($email)
        {
            $message->from('pyramid.estates.aws@gmail.com', 'Pyramid test new');
            $message->to($email);
            $message->subject('test');
        });
         return view('thank-you');
    }

    protected function seller_register(Request $info)
    {
    	$email = 'pyramid.estates.aws@gmail.com';
    	Mail::send('emails.test', ['email' => $email, 'Form' => "Seller Form", 'name' => $info->name, 'phone' => $info->phone, 'user_email' => $info->email, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'kind_prop' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'additional' => $info->additional], 
            function ($message) use ($email)
        {
            $message->from('pyramid.estates.aws@gmail.com', 'Pyramid test new');
            $message->to($email);
            $message->subject('test');
        });
         return view('thank-you');
    }
}
