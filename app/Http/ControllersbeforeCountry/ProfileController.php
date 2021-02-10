<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AvoRed\Wishlist\Database\Contracts\WishlistModelInterface;

use AvoRed\Wishlist\Database\Models\Wishlist;
use App\Complaint;
use Auth;
use Redirect;


class ProfileController extends Controller
{
    //
    protected $wishlistRepository;
    public function __construct(
     
        WishlistModelInterface $wishlistRepository
    ) {
        
        $this->wishlistRepository = $wishlistRepository;
    }
    public function index(){
      
        if(Auth::check()){
           $user= auth()->user()->id;
           $wishlists= Wishlist::where('user_id', $user  )->get();
           $user= auth()->user()->id;
        }else{
         $wishlists='empty';   
        }
        // dd($wishlists);
        return view('blades.wishlist',compact('wishlists'));
    }


    public function addwishlist(Request $request){
        // Wishlist::create($request->all());
        $wish= new Wishlist;
        $user= auth()->user()->id;
      $wish->user_id=$user;
       $wish->product_id= $request->input('product_id');
       $wish->save();
       
       return redirect::back();
    }

    public function deletewishlist($id){
        Wishlist::destroy($id);
        return redirect()->back();
    }


    public function complaint(){
        return view('blades.complaint');
    }
    public function addComplaint( Request $request){
 $comp= new Complaint;
 $comp->user_id = auth()->user()->id;
 $comp->phone = $request->input('phone');
 $comp->email = $request->input('email');
 $comp->subject = $request->input('subject');
 $comp->message = $request->input('message');
        // $comp =  Complaint::create($request->all());
        // dd($comp);
            // 'user_id'=> auth()->user()->id;
            $comp->save();
        return redirect::back();
    }
}
