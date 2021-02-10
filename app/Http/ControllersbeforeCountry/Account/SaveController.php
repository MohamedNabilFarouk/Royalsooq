<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SaveRequest;
use App\ViewModels\Account\EditViewModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    /**
     * Save the user account details.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke(SaveRequest $request)
    {
   
        $validator = Validator::make($request->all(), [
            'name' => 'max:100',
            'email' => 'unique:users|max:191',
            'phone' => 'max:100',
            
          
            ]);
            if ($validator->fails()){
               // return $validator->errors();
            // dd($validator->errors());
                return redirect()->back()->withErrors($validator->errors());
            }else{

        Auth::user()->fill($request->all())->save();
        return redirect()->route('account.dashboard');
            }
        //return redirect()->route('account.dashboard');
    }
    
    
    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }

}
