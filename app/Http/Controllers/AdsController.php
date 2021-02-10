<?php



namespace App\Http\Controllers;

use AvoRed\Framework\Database\Models\Product;

use AvoRed\Framework\Database\Models\Car;



use AvoRed\Framework\Database\Models\AdsAttribute;



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
use Validator;
use Session;
use Illuminate\Translation\Translator;
use Jenssegers\Agent\Agent;

class AdsController extends Controller

{

    //get post free ads now

    public function getFreeAds(){
        $agent = new Agent();
        $page_title="Add Your Ad";



        $car=Car::distinct()->get(['make']);

       // dd($car);

       if($agent->isMobile()){

        return view('blades_mobile.freeAds_mobile',compact('page_title','car'));
    }

        return view('blades.freeAds',compact('page_title','car'));

    }





public function storeFreeAds(Request $request){
// dd($request->subcategory_id);
    $validator = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'category_id'=>'required',

        'subcategory_id' => 'required',
        'city_id' => 'required',
        'image' => 'required',


    ]);


    // if ($validator->fails()){
    //     //dd($errors);
    //     return back()->with('errors',$validator);
    // }


    DB::transaction(function () use  ($request) {

        $sponsoredAd= new Product;
        
        $sponsoredAd->name= $request->input('name');
        
        // $sponsoredAd->name_ar= $request->input('name_ar');
        
        
        
        $sponsoredAd->description= $request->input('description');
        
        $sponsoredAd->user_id= auth()->user()->id;
        
        $sponsoredAd->price= $request->input('price');
        
        $sponsoredAd->video= $request->input('video');
        
        $sponsoredAd->map= $request->input('map');
        
        $sponsoredAd->negotiable= $request->input('negotiable');
        
        
        
        $sponsoredAd->sponsored= '1';
        
        $sponsoredAd->ad_position= $request->input('ad_position');
        
        $sponsoredAd->slug= rand(1, 999) .'-'. (str_replace(' ', '-', $request->input('name'))) ;
        
        
        $sponsoredAd->category_id= $request->input('category_id');
        
        $sponsoredAd->country_id= session()->get('my_country') ?? '2' ;
        
        $sponsoredAd->city_id= $request->input('city_id');
        
        $sponsoredAd->subcategory_id= $request->input('subcategory_id');
        
        
        
        //dd($sponsoredAd);
        
        if($sponsoredAd->save()){
        
            $user= AdminUser::where('email','mohamednabilfarouk@gmail.com')->get();
        
            Notification::send($user,new AddProduct($sponsoredAd));
        
        
        
        };
        
        
        
        $Files = $request->file('image');
        
        $i=0;
        
                foreach ($Files as $File){
        
                    $file_name = rand(1, 999) . $File -> getClientOriginalName() ;
        
                    $file = $File->storeAs('sponsoredAds',$file_name);
        
                    
        
                    $img = Image::make(Storage::get($file));
        
                    $img->insert(public_path('img/logos/Royal-Sooq.png'), 'bottom-left', 5, 5);
        
                    $img->save(Storage::path($file));
        
        
        
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
        
        
        
        
        
              $attr = New AdsAttribute;
        
                $attr->area=$request->input('area');;
        
                $attr->room_number=$request->input('room_number');
        
                $attr->bathroom_number=$request->input('bathroom_number');
        
                $attr->furnished=$request->input('furnished');
        
                $attr->payment=$request->input('payment');
        
        
        
                $attr->car=$request->input('car');
        
                $attr->model=$request->input('model');
        
        
        
                $attr->color=$request->input('color');
        
                $attr->transmission_type=$request->input('transmission_type');
        
                $attr->condition_type=$request->input('condition_type');
        
                $attr->kilos=$request->input('kilos');
        
                $attr->job_type = $request->input('job_type');
        
        
        
        
        
                $attr->product_id=$sponsoredAd->id;
        
                $attr->save();
        
            
        
        
        
               
        
        
        
        });
        
        Session::flash('message', __('index.success')); 
        
        
        // return redirect(route('home'));
        return redirect()->back();
        

}



// public function markasRead($notificationid){

//     $notification = auth()->user()->notifications()->find($notificationid);

// if($notification) {

//     $notification->markAsRead();

//     return redirect()->back();

// }

// }



public function userFreeAds(){
    $agent = new Agent();
    $user_id= auth()->user()->id;

    $userFreeAds = Product::where('user_id',$user_id)->get();

    //dd($userFreeAds);
    if($agent->isMobile()){

        return view('blades_mobile.userFreeAds_mobile',compact('userFreeAds'));
    }

    return view('blades.userFreeAds',compact('userFreeAds'));

}





//edit free

public function edit($id)

    {
        $agent = new Agent();


        $ad= Product::with('categories','subcategory')->findOrFail($id);

       // dd($ad);

       if($agent->isMobile()){

        return view('blades_mobile.UpdateFreeAd_mobile', compact('ad'));
    }

        return view('blades.UpdateFreeAd', compact('ad'));

    }





    public function updateFreeProduct(Request $request ,$id){

        $validator = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id'=>'required',

            'subcategory_id' => 'required',
            'city_id' => 'required',


        ]);
        // if ($validator->fails()){
        //     //dd($errors);
        //     return redirect()->back()->with('errors',$validator);
        // }


        $ad =Product::find($id);

        // dd(session()->get('my_country'));



        $ad->name=$request->input('name');

// $ad->name_ar= $request->input('name_ar');



        $ad->description=$request->input('description');

        $ad->price= $request->input('price');

        $ad->video= $request->input('video');

        $ad->map= $request->input('map');

        $ad->country_id= session()->get('my_country');

        $ad->city_id= $request->input('city_id');

        $ad->category_id= $request->input('category_id');

        $ad->subcategory_id= $request->input('subcategory_id');

        $ad->negotiable= $request->input('negotiable');



        $ad->ad_position= $request->input('ad_position');

        $ad->save();



        if($request->hasFile('image')){

            // $getImage= ProductImage::where('product_id',$id)->delete();

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

        Session::flash('message', 'Updated Successfuly');

        Session::flash('alert-class', 'alert-danger');

        return redirect(route('user.freeAds'));



    }




      // delete one image from gallery
      public function deleteOneImage($id){
        $getImage= ProductImage::where('id',$id)->delete();
            return $getImage;
    }


//Get not approved free ads



public function pendingFree(){

    $product=Product::where([['approved','0'],['user_id',auth()->user()->id]])->get();

    dd($product);

}



//Get All free Acc Sellers



public function allFreeAcc(){
    $agent=new Agent();
    $users= User::where('seller','0')->with('products')->get();
if($agent->isMobile()){
    return view('blades_mobile.allSellerAcc_mobile',compact('users'));
}
    return view('blades.allSellerAcc',compact('users'));




}





//get user ad ra2se

public function allUserfreeAds($slug){
$agent = new Agent();
//dd($slug);
$user= User::where('slug',$slug)->first();
$userFreeAds = Product::where([['user_id',$user->id]])->orderBy('id','DESC')->with('user')->with('city')->get();
if($agent->isMobile()){
return view('blades_mobile.shops_mobile',compact('userFreeAds'));

}
return view('blades.shops2',compact('userFreeAds'));

}



//get user ad 2ofky

public function allUserfreeAdsH($slug){

    $user= User::where('slug',$slug)->first();

    $userFreeAds = Product::where([['user_id',$user->id]])->orderBy('id','DESC')->with('user')->with('city')->get();

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

Session::flash('message', 'Your Ad Added Successfuly');

Session::flash('alert-class', 'alert-danger');

return redirect(route('home'));

}







public function getCars(Request $request){

    $data = Car::where('make',$request->car)->get();

    return response()->json(['data'=>$data]);

}





}

