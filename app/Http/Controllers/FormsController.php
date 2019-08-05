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
use Storage;

class FormsController extends Controller
{
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client(['verify' => false]);
    }

    protected function buyer_register(Request $info)
    {
        try{
            $email = 'leads@pyramidestates.in';
            $insert = $this->submit_data("buyers", $info);
            Mail::send('emails.buyers', ['email' => $email, 'Form' => "Buyer Form", 'name' => $info->name, 'phone' => $info->phone, 'user_email' => $info->email, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'kind_prop' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'custom_budget' => $info->custom_budget,'additional' => $info->additional], 
                function ($message) use ($email)
            {
                $message->from('pyramid.estates.aws@gmail.com', 'Pyramid Estates');
                $message->to($email);
                $message->subject('Incoming Enquiry - Buyer');
            });
             return view('thank-you');
        }catch(\Exception $e){
            return view('fail');
        }
    }

    protected function seller_register(Request $info)
    {
       try{
          $email = 'listings@pyramidestates.in';
          $insert = $this->submit_data("sellers", $info);
          Mail::send('emails.sellers', ['email' => $email, 'Form' => "Seller Form", 'name' => $info->name, 'phone' => $info->phone, 'user_email' => $info->email, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'kind_prop' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'additional' => $info->additional, 'images' => implode(" , ",$insert)], 
                function ($message) use ($email)
            {
                $message->from('pyramid.estates.aws@gmail.com', 'Pyramid Estates');
                $message->to($email);
                $message->subject('Incoming Enquiry - Seller');
            });
             return view('thank-you')->with('seller', true);
       }catch(\Exception $e){
            return view('fail');
        }
    }

    protected function submit_data($table, $info)
    {
        $image_links = array();
        if($info->hasFile('imagelinks')){
            $image_links = $this->file_uploads($info);
            if($table == "buyers"){
              DB::table($table)->insert(['email' => $info->email, 'name' => $info->name, 'phone' => $info->phone, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'property_sub_type' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'custom_budget' => $info->custom_budget, 'additional' => $info->additional, 'images' => implode(" , ",$image_links)]);
            }else{
              DB::table($table)->insert(['email' => $info->email, 'name' => $info->name, 'phone' => $info->phone, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'property_sub_type' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'additional' => $info->additional, 'images' => implode(" , ",$image_links)]);
            }
        }else{
            if($table == "buyers"){
              DB::table($table)->insert(['email' => $info->email, 'name' => $info->name, 'phone' => $info->phone, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'property_sub_type' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'custom_budget' => $info->custom_budget,'additional' => $info->additional]);
            }else{
              DB::table($table)->insert(['email' => $info->email, 'name' => $info->name, 'phone' => $info->phone, 'user_type' => $info->user_type, 'property_type' => $info->res_comm, 'property_sub_type' => $info->prop_type, 'bedrooms' => $info->bedrooms_vals, 'locations' => $info->location, 'area' => $info->area, 'budget' => $info->budget, 'additional' => $info->additional]);
            }
        }
        return $image_links;
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

    protected function file_uploads(Request $request){
        $images = array();
        if ($request->hasFile('imagelinks')) {
           $file = $request->file('imagelinks');
           $name = time() . $file->getClientOriginalName();
           $filePath = 'images/' . $name;
           Storage::disk('s3')->put($filePath, file_get_contents($file), 'public');
           $url = env('AWS_URL').$filePath;
           array_push($images, $url);
       }
       if ($request->hasFile('imagelinks1')) {
           $file = $request->file('imagelinks1');
           $name = time() . $file->getClientOriginalName();
           $filePath = 'images/' . $name;
           Storage::disk('s3')->put($filePath, file_get_contents($file), 'public');
           $url = env('AWS_URL').$filePath;
           array_push($images, $url);
       }
       if ($request->hasFile('imagelinks2')) {
           $file = $request->file('imagelinks2');
           $name = time() . $file->getClientOriginalName();
           $filePath = 'images/' . $name;
           Storage::disk('s3')->put($filePath, file_get_contents($file), 'public');
           $url = env('AWS_URL').$filePath;
           array_push($images, $url);
       }
       if ($request->hasFile('imagelinks3')) {
           $file = $request->file('imagelinks3');
           $name = time() . $file->getClientOriginalName();
           $filePath = 'images/' . $name;
           Storage::disk('s3')->put($filePath, file_get_contents($file), 'public');
           $url = env('AWS_URL').$filePath;
           array_push($images, $url);
       }
       if ($request->hasFile('imagelinks4')) {
           $file = $request->file('imagelinks4');
           $name = time() . $file->getClientOriginalName();
           $filePath = 'images/' . $name;
           Storage::disk('s3')->put($filePath, file_get_contents($file), 'public');
           $url = env('AWS_URL').$filePath;
           array_push($images, $url);
       }
       if ($request->hasFile('imagelinks5')) {
           $file = $request->file('imagelinks5');
           $name = time() . $file->getClientOriginalName();
           $filePath = 'images/' . $name;
           Storage::disk('s3')->put($filePath, file_get_contents($file), 'public');
           $url = env('AWS_URL').$filePath;
           array_push($images, $url);
       }
       return $images;
    }

    protected function file_delete(){
        $files = Storage::disk('s3')->files('images');
           foreach ($files as $file) {
               Storage::disk('s3')->delete('images/' . $image);
           }
    }
}
