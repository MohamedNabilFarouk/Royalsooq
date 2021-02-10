<?php

namespace App\Http\Controllers;
use AvoRed\Framework\Database\Models\Product;
use App\User;
use Auth;
use DB;
use AvoRed\Framework\Database\Models\AdminUser;
use Notification;
use App\Notifications\AddProduct;


use AvoRed\Framework\Database\Models\ProductImage; 
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;
class AdsController extends Controller
{
    //get post free ads now
    public function getFreeAds(){
        $page_title="Add Your Ad";
        return view('blades.freeAds',compact('page_title'));
    }


public function storeFreeAds(Request $request){
    DB::transaction(function () use  ($request) {
$freeAd= new Product;
$freeAd->name= $request->input('name');
// $freeAd->name_ar= $request->input('name_ar');

$freeAd->description= $request->input('description');
$freeAd->user_id= auth()->user()->id;
$freeAd->price= $request->input('price');
$freeAd->video= $request->input('video');
$freeAd->map= $request->input('map');

$freeAd->free= '1';
$freeAd->ad_position= $request->input('ad_position');
$freeAd->slug= rand(1, 999) .'-'. $request->input('name') ;
$freeAd->category_id= $request->input('category_id');
$freeAd->city_id= $request->input('city_id');
$freeAd->subcategory_id= $request->input('subcategory_id');

//dd($freeAd);
if($freeAd->save()){
    $user= AdminUser::where('email','mohamednabilfarouk@gmail.com')->get();
    Notification::send($user,new AddProduct($freeAd));

};

$Files = $request->file('image');
$i=0;
        foreach ($Files as $File){
            $file_name = rand(1, 999) . $File -> getClientOriginalName() ;
            $file = $File->storeAs('freeAds',$file_name);
            
            $img = Image::make(Storage::get($file));
            $img->insert(public_path('img/logos/Royal-Sooq.png'), 'bottom-left', 5, 5);
            $img->save(Storage::path($file));

$adsImage= new ProductImage;
$adsImage->path= $file;
$adsImage->product_id = $freeAd->id;
if($i == 0){
    $adsImage->is_main_image='1';
    }else{
        $adsImage->is_main_image='0';
    }
$adsImage->save();
$i++;
        }

});
return redirect(route('home'));
}


public function userFreeAds(){
    $user_id= auth()->user()->id;
    $userFreeAds = Product::where('user_id',$user_id)->get();
    //dd($userFreeAds);
    return view('blades.userFreeAds',compact('userFreeAds'));
}


//edit free
public function edit($id)
    {
    
        $ad= Product::with('categories','subcategory')->findOrFail($id);
       // dd($ad);
        return view('blades.UpdateFreeAd', compact('ad'));
    }


    public function updateFreeProduct(Request $request ,$id){
        $ad =Product::find($id);
        $ad->name=$request->input('name');
// $ad->name_ar= $request->input('name_ar');

        $ad->description=$request->input('description');
        $ad->price= $request->input('price');
        $ad->video= $request->input('video');
        $ad->map= $request->input('map');

        $ad->city_id= $request->input('city_id');
        $ad->category_id= $request->input('category_id');
        $ad->subcategory_id= $request->input('subcategory_id');

        $ad->ad_position= $request->input('ad_position');
        $ad->save();

        if($request->hasFile('image')){
            $getImage= ProductImage::where('product_id',$id)->delete();
            $Files = $request->file('image');
            $i=0;
                    foreach ($Files as $File){
                        $file_name = rand(1, 999) . $File -> getClientOriginalName() ;
                        $file = $File->storeAs('freeAds',$file_name);

                        $img = Image::make(Storage::get($file));
                        $img->insert(public_path('img/logos/Royal-Sooq.png'), 'bottom-left', 5, 5);
                        $img->save(Storage::path($file));
           
            //dd($getImage);
            // if($getImage){
            //     $getImage->delete();
               
            // }
                $adsImage= new ProductImage;
            $adsImage->path= $file;
            $adsImage->product_id = $id;
            if($i == 0){
                $adsImage->is_main_image='1';
                }else{
                    $adsImage->is_main_image='0';
                }
            $adsImage->save();
            $i++;
                    
                }

        }
        return redirect(route('user.freeAds'));

    }
//Get not approved free ads

public function pendingFree(){
    $product=Product::where([['approved','0'],['user_id',auth()->user()->id]])->get();
    dd($product);
}

//Get All free Acc Sellers

public function allFreeAcc(){
    $users= User::where('seller','0')->with('products')->get();
    return view('blades.allSellerAcc',compact('users'));


}


//get user ad ra2se 
public function allUserfreeAds($id){ 

$userFreeAds = Product::where('user_id',$id)->with('user')->with('city')->get();
return view('blades.shops2',compact('userFreeAds'));
}

//get user ad 2ofky 
public function allUserfreeAdsH($id){ 

    $userFreeAds = Product::where('user_id',$id)->with('user')->with('city')->get();
    return view('blades.shops2H',compact('userFreeAds'));
    }
    


public function getSponsoredAds(){
    return view('seller.addsponsored');
}


public function storeSponsoredAds(Request $request){
    DB::transaction(function () use  ($request) {
$sponsoredAd= new Product;
$sponsoredAd->name= $request->input('name');
$sponsoredAd->description= $request->input('description');
$sponsoredAd->user_id= auth()->user()->id;
$sponsoredAd->price= $request->input('price');
$sponsoredAd->sponsored= '1';
$sponsoredAd->ad_position = $request->input('ad_position');
$sponsoredAd->slug= rand(1, 999) .'-'. $request->input('name') ;
$sponsoredAd->category_id= $request->input('category_id');
$sponsoredAd->subcategory_id= $request->input('subcategory_id');
$sponsoredAd->save();





$Files = $request->file('image');
$i=0;
        foreach ($Files as $File){
            $file_name = rand(1, 999) . $File -> getClientOriginalName() ;
            $file = $File->storeAs('sponsoredAds',$file_name);
$adsImage= new ProductImage;
$adsImage->path= $file;
$adsImage->product_id = $sponsoredAd->id;
if($i == 0){
$adsImage->is_main_image='1';
}else{
    $adsImage->is_main_image='0';
}
$adsImage->save();
$i++;
        }

});
return redirect(route('home'));
}

}
