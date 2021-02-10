<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use AvoRed\Framework\Database\Models\SellerDetails;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class SellerController extends Controller
{
    //
    public function index(){
        return view('blades.sellerRegistration'); 
    }

    public function AddSeller(Request $request ){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|string',
            'email' => 'required|unique:users|max:255|string',
            'national_number' => 'required|max:200',
            'phone' => 'required|max:100',
            'password' => 'required|max:100|min:8|confirmed|string',
            ]);
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator->errors());
            }else{
        DB::transaction(function () use  ($request) {
               
            
            
            
                $user= new User;
                $user->name =$request->input('name');
                $user->email= $request->input('email');
                $user->password= Hash::make($request->input('password'));
                $user->seller='1';
 
      $user->save();

                $File_national_number = $request->file('national_number');
$file_name_national_number = rand(1, 999) . $File_national_number->getClientOriginalName() ;
        $national_number = $File_national_number->storeAs('Seller',$file_name_national_number);

        $File_tax_card = $request->file('tax_card');
        $file_name_tax_card = rand(1, 999) . $File_tax_card->getClientOriginalName() ;
                $tax_card = $File_tax_card->storeAs('Seller',$file_name_tax_card);

                $File_commercial_register = $request->file('commercial_register');
        $file_name_commercial_register = rand(1, 999) . $File_commercial_register -> getClientOriginalName() ;
                $commercial_register = $File_commercial_register->storeAs('Seller',$file_name_commercial_register);

$details= new SellerDetails;
$details->seller_id= $user->id;
$details->phone= $request->input('phone');
$details->company_name= $request->input('company_name');
$details->type= $request->input('type');
$details->link= $request->input('link');
$details->national_number= $national_number;
$details->tax_card = $tax_card;

$details->commercial_register= $commercial_register;
// $dd($details);
$details->save();


        });
        return redirect(route('home'));
    }
    }


    public function getCharts(){
        return view ('seller.charts');
    }

    public function getbankinfo(){
        return view ('seller.bankInfo');
    }


    public function getAdsPosition(){
        return view ('seller.adsPosition');
    }

    public function getCopons(){
        return view ('seller.copons');
    }

}
