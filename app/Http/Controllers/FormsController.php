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
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client(['verify' => false]);
    }

    protected function buyer_register(Request $info)
    {
        if($this->captcha_verify($info->captcha)){
            $email = 'pyramid.estates.aws@gmail.com';
            $insert = $this->submit_data("buyers", $info);
            Mail::send('emails.test', ['email' => $email, 'Form' => "Buyer Form", 'name' => $info->name, 'phone' => $info->phone, 'user_email' => $info->email, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'kind_prop' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'additional' => $info->additional], 
                function ($message) use ($email)
            {
                $message->from('pyramid.estates.aws@gmail.com', 'Pyramid test new');
                $message->to($email);
                $message->subject('test');
            });
             return view('thank-you');
         }else{
            return view('fail');
         }
    }

    protected function seller_register(Request $info)
    {
        if($this->captcha_verify($info->captcha)){
        	$email = 'pyramid.estates.aws@gmail.com';
             $insert = $this->submit_data("sellers", $info);
        	Mail::send('emails.test', ['email' => $email, 'Form' => "Seller Form", 'name' => $info->name, 'phone' => $info->phone, 'user_email' => $info->email, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'kind_prop' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'additional' => $info->additional], 
                function ($message) use ($email)
            {
                $message->from('pyramid.estates.aws@gmail.com', 'Pyramid test new');
                $message->to($email);
                $message->subject('test');
            });
             return view('thank-you');
        }else{
            return view('fail');
        }
    }

    protected function submit_data($table, $info)
    {
        DB::table($table)->insert(['email' => $info->email, 'name' => $info->name, 'phone' => $info->phone, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'property_sub_type' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'additional' => $info->additional]);
    }

    protected function captcha_verify($token){
        $request = $this->client->request('POST', 'https://www.google.com/recaptcha/api/siteverify?secret='.env('GCAPTCHA_SECRET').'&response='.$token);
        $callback = $request->getBody()->getContents();
        $data = (array) json_decode($callback);
        return $data['success'];
    }

    protected function buyer_verify(Request $info){
        $user = DB::table('buyers')->where('phone', $info->phone)->count();
        if($user == 0){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

    protected function seller_verify(Request $info){
        $user = DB::table('sellers')->where('phone', $info->phone)->count();
        if($user == 0){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
