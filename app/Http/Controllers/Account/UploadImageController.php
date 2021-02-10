<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\UploadImageRequest;
use App\ViewModels\Account\EditViewModel;
use Illuminate\Support\Facades\Auth;
use App\User;

class UploadImageController extends Controller
{
    /**
     * Show the user account dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke(UploadImageRequest $request)
    {
       // dd($request->all());
        $user= User::findOrFail(auth()->user()->id);
        //$user= new User;
        $image = $request->file('file');
        $dbPath = $image->store('uploads/user');
        $user->image=$dbPath;
$user->save();
return redirect()->route('account.dashboard');
        // return response()->json(['success' => true,'image' => $dbPath]);
    }

    public function delete(){
         $user= User::findOrFail(auth()->user()->id);
         $user->image = 'null';
         $user->save();
         return redirect()->route('account.dashboard');

    }
}
