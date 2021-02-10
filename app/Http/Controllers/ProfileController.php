<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AvoRed\Wishlist\Database\Contracts\WishlistModelInterface;

use AvoRed\Wishlist\Database\Models\Wishlist;
use App\User;

use AvoRed\Framework\Database\Models\ChatMessage;
use AvoRed\Framework\Database\Models\ShopSlider;


use App\Complaint;
use Auth;
use Redirect;
use Jenssegers\Agent\Agent;


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
        $agent = new Agent();

        if(Auth::check()){
           $user= auth()->user()->id;
           $wishlists= Wishlist::where('user_id', $user  )->get();
           $user= auth()->user()->id;
        }else{
         $wishlists='empty';
        }
        // dd($wishlists);
        if($agent->isMobile()){

            return view('blades_mobile.wishlist_mobile',compact('wishlists'));
        }
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
        $agent = new Agent();
        if($agent->isMobile()){
            return view('blades_mobile.complaint_mobile');
        }
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

    public function ChatMessage(Request $request){
        $message= new ChatMessage;
        $message->user_id = Auth::user()->id;
        $message->seller_id =$request->input('seller_id') ;
        $message->item_id = $request->input('item_id');
        $message->subject = $request->input('subject');
        $message->message= $request->input('message');

        $message->save();
        return redirect()->back();
    }

    public function userInbox(){
        $agent = new Agent();
        $user = auth()->user()->id;
        $inbox = ChatMessage::where('seller_id', $user)->get();
        // dd($inbox);
        if($agent->isMobile()){

        return view('blades_mobile.inbox_mobile',compact('inbox'));
        }
        return view('blades.inbox',compact('inbox'));
    }

    public function DeleteChat($id){
        ChatMessage::destroy($id);
        return redirect()->back();
    }

    public function getReply($id){
        $agent = new Agent();
        $reply=ChatMessage::where('id',$id)->first();
        if($agent->isMobile()){
        return view ('blades_mobile.showAndReply_mobile',compact('reply'));

        }
        return view ('blades.showAndReply',compact('reply'));
    }


    public function addShopData(Request $request){
        $user_id = auth()->user()->id;
        if($request->has('about')){
           $user = User::where('id',$user_id)->first();
           $user->about = $request->input('about');
           $user->save();
        }

        if($request->hasFile('image')){
            $Files = $request->file('image');
            foreach ($Files as $File){
                $file_name = rand(1, 999) . $File -> getClientOriginalName() ;
                $file = $File->storeAs('shopSlider',$file_name);
                $slider= new ShopSlider;
                $slider->image= $file;
                $slider->user_id= $user_id;
                $slider->save();
            }
        }
        return redirect(route('account.dashboard'));
    }


}
