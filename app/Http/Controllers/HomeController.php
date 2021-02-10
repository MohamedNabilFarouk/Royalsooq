<?php

namespace App\Http\Controllers;

use AvoRed\Framework\Database\Contracts\PageModelInterface;
use AvoRed\Framework\Database\Contracts\ProductModelInterface;
use AvoRed\Framework\Database\Models\Category;
use AvoRed\Framework\Database\Models\SubCategory;
use AvoRed\Framework\Database\Models\Product;
use AvoRed\Wishlist\Database\Models\Wishlist;
use AvoRed\Wishlist\Database\Contracts\WishlistModelInterface;
use AvoRed\Framework\Database\Models\Service;
use AvoRed\Framework\Database\Models\Slider;
use AvoRed\Framework\Database\Models\AdsImages;
use Illuminate\Support\Facades\View;
use AvoRed\Framework\Database\Models\City;
use AvoRed\Framework\Database\Models\Country;
use AvoRed\Framework\Database\Models\Rating;
use AvoRed\Framework\Database\Models\Newsletter;
use AvoRed\Framework\Database\Models\Contactus;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;
use App\User;


use Jenssegers\Agent\Agent;



class HomeController extends Controller
{
    /**
     * Product Repository
     * \AvoRed\Framework\Database\Repository\ProductRepository $productRepository.
     */
    protected $productRepository;
    /**
     * Product Repository
     * \AvoRed\Framework\Database\Repository\PageRepository $pageRepository.
     */
    protected $pageRepository;
    /**
     * Product Repository
     * \AvoRed\Wishlist\Database\Repository\WishlistRepository $wishlistRepository.
     */
    protected $wishlistRepository;

    /**
     * Construct for the home controller.
     * @param \AvoRed\Framework\Database\Repository\ProductRepository $productRepository
     * @param \AvoRed\Framework\Database\Repository\PageRepository $pageRepository
     * @param \AvoRed\Wishlist\Database\Repository\WishlistRepository $wishlistRepository
     */
    public function __construct(
        ProductModelInterface $productRepository,
        PageModelInterface $pageRepository,
        WishlistModelInterface $wishlistRepository
    ) {
        $this->productRepository = $productRepository;
        $this->pageRepository = $pageRepository;
        $this->wishlistRepository = $wishlistRepository;
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\View\View
     */
    public function index(Request $req)
    {
        $agent = new Agent();
        //dd(session()->get('my_country'));
        if(session()->get('my_country') == null){

            session()->put('my_country',1);
        }

         $wishlists = $this->wishlistRepository->userWishlists();
        // $page = $this->pageRepository->findBySlug('home-page');

 if(Auth::check()){

    $user= auth()->user()->id;
    $wishlists= Wishlist::where('user_id', $user  )->get();
 }

        $allProducts = $this->productRepository->getAllWithoutVaiation();

        $categories = Category::all();

        if ($allProducts->count() <= 0) {
            $products = collect();
        } elseif ($allProducts->count() >= 8) {
            $products = $allProducts->random(8)->shuffle();

        } else {
            $products = $allProducts;
        }
$weekly = Product::where([['weekly','1'],['sponsored','1'],['approved','1'] , ['country_id', session()->get('my_country')]])->with('user')->get();
$sponsored = Product::where('sponsored','1')->get();
$featuered = Product::where('featuered','1')->get();
//$new = $allProducts->where('new','1')->random(4)->all();

//free product
$latest = Product::where([['latest','1'],['free','1'],['approved','1'],['country_id', session()->get('my_country')]])->orderBy('id','DESC')->get();
 $latest2 = Product::where([['free','1'],['approved','1'], ['country_id', session()->get('my_country')],['created_at', '>=', Carbon::now()->subDays(3)->toDateTimeString()]])->orderBy('id','DESC')->get();
//dd($latest2);
if(($latest2 == '[]')){
 $latest2 = Product::where([['free','1'],['approved','1'], ['country_id', session()->get('my_country')]])->orderBy('id','DESC')->limit(30)->get();

}

//sponsored product 
$sponsored_featured=Product::where([['latest','1'],['sponsored','1'],['approved','1'],['country_id', session()->get('my_country')]])->orderBy('id','DESC')->get();
$sponsored_latest=Product::where([['sponsored','1'],['approved','1'], ['country_id', session()->get('my_country')],['created_at', '>=', Carbon::now()->subDays(3)->toDateTimeString()]])->orderBy('id','DESC')->limit(20)->get();

//  $latest2_ava=$latest2->averageRating;
//sponsored product
$new_arrivals = Product::where([['new','1'],['sponsored','1'],['approved','1'], ['country_id', session()->get('my_country')]])->get();
$best_rated = Product::where([['best_rated','1'],['sponsored','1'],['approved','1'], ['country_id', session()->get('my_country')]])->get();
$on_sale = Product::where([['on_sale','1'],['sponsored','1'],['approved','1'], ['country_id', session()->get('my_country')]])->get();
$single_item = Product::where([['single_item','1'],['sponsored','1'],['approved','1']])->latest()->first();


$new_servcies = Service::where([['new','1'],['approved','1']])->get();
$featured_servcies=Service::where([['featured','1'],['approved','1']])->get();
//slider
$slider= Slider::all();
//dd($slider);

//dd($wishlists);

//'page',
$left_top=AdsImages::where('code','left_top')->get();
$left_bottom=AdsImages::where('code','left_bottom')->get();
$right_top=AdsImages::where('code','right_top')->get();
$right_bottom=AdsImages::where('code','right_bottom')->get();
$footer=AdsImages::where('code','footer')->get();
//dd(session()->get('my_country'));
//dd($latest);

if($agent->isMobile()){

    return view('home_mobile')

            ->with(compact('products',  'wishlists','categories' , 'new_servcies','featured_servcies',  'weekly' ,'latest','latest2', 'sponsored','featuered' , 'new_arrivals','on_sale','best_rated','single_item','slider','left_top','left_bottom','right_top','right_bottom','footer'));
}

return view('home')

            ->with(compact('products',  'wishlists','categories' , 'new_servcies','featured_servcies',  'weekly' ,'latest','latest2', 'sponsored','featuered' , 'new_arrivals','on_sale','best_rated','single_item','slider','left_top','left_bottom','right_top','right_bottom','footer','sponsored_featured','sponsored_latest'));
    }

public function getSub($id){
    $sub= SubCategory::where('category_id',$id)->get();
    return view ('blades_mobile.subcategory-category_mobile',compact('sub'));
}

public function getProductSubCategory($slug , Request $request){
    $agent = new Agent();
    // $products= Product::where('subcategory_id',$id)->paginate(8);
    $sub= SubCategory::where('slug',$slug)->first();
    $products= Product::where([['subcategory_id', $sub->id],['approved','1'] , ['country_id', session()->get('my_country')],[function($q) use($request , $sub ){
            $q->where([['subcategory_id', $sub->id],['approved','1']]);
            if($request->has('city')){
                //echo 'city';
                $q->whereIn('city_id', $request->input('city'));
            }

            if($request->has('feature')){
                //echo 'feature';

                        $checkbox = $request->feature;
                        if(!array_key_exists('2',$checkbox)){
                            if(array_key_exists('1',$checkbox)){
                                $q->where([[$checkbox[0],'1'],['approved','1']])->orWhere([[$checkbox[1],'1'],['approved','1']]);

                            }else{
                                $q->where([[$checkbox[0],'1'],['approved','1']]);
                            }
                    }else if(array_key_exists('2',$checkbox)){
                        $q->where([[$checkbox[0],'1'],['approved','1']])->orWhere([[$checkbox[1],'1'],['approved','1']])->orWhere([[$checkbox[2],'1'],['approved','1']]);
                    }else{
                        $q->where([[$checkbox[0],'1'],['approved','1']]);
                    }
            }

            if(($request->min) != null || ($request->max != null)){
                // echo 'price';

                 $q->whereBetween('price',[$request->input("min") , $request->input("max")]);
             }
    }]])->orderBy('id','DESC')->paginate(9);
    // dd($products);
    if($agent->isMobile()){

        return view('blades_mobile.subcategory-products_mobile',compact('products' ));
    }

    return view ('blades.products-subcategory',compact('products'));
}

public function getProductCategory($slug , Request $request){
    $agent = new Agent();
    $cat= Category::where('slug',$slug)->first();
   // dd($cat);
    $subcat = SubCategory::where('category_id',$cat->id)->get();
    $products= Product::where([['category_id', $cat->id],['approved','1'] , ['country_id', session()->get('my_country')],[function($q) use($request){
        if($request->has('city')){
            //echo 'city';
            $q->whereIn('city_id', $request->input('city'));
        }

        if(($request->min) != null || ($request->max != null)){
            // echo 'price';

             $q->whereBetween('price',[$request->input("min") , $request->input("max")]);
         }

         if($request->has('subcategory')){
            //echo 'city';
            $q->whereIn('subcategory_id', $request->input('subcategory'));
        }


    }]])->orderBy('id','DESC')->paginate(9);

    if($agent->isMobile()){

        return view('blades_mobile.category-products_mobile',compact('products','subcat' ));
    }

    return view('blades.category-products',compact('products','subcat' ));
}



public function getAllFreeAds(){

    // dd(session()->get('my_country'));
    $featured= Product::where([["free","1"],['latest','1'],['approved','1'],['country_id', session()->get('my_country')]])->get();
    $latest= Product::where([["free","1"],['latest2','1'],['approved','1'], ['country_id', session()->get('my_country')]])->get();

    $page_title='Free Ads';
    // dd($latest);
    return view('blades.allFreeAds',compact('page_title','featured','latest'));
}

public function rate(Request $request , $id){
    $product = Product::where('id',$id)->first();

// Add a rating of 3, or change the user's existing rating _to_ 3.
$product->rateOnce($request->input('rate_value'));
$product->user_id= auth()->user()->id;
// dd($product->averageRating);

return redirect()->back();
}

public function avarate($id){
    $product = Product::where('id',$id)->first();
    dd($product->averageRating);
}

public function cityOfCountry($id){
$cities = City::where('country_id',$id)->get();
return view('layouts.inc-top', compact('cities'));
//View::share('cities',$cities);

}

public function newsletter(Request $request){

    $validator = Validator::make($request->all(), [
        'email' => 'email',
        'phone'=>'required|regex:/(01)[0-9]{9}/',
        ]);
        if ($validator->fails()){
             return redirect()->back()->withErrors($validator->errors());
         }else{

            // Newsletter::create($request->all());
            $newslitter=new Newsletter;
            $newslitter->email=$request->input('email');
            $newslitter->phone=$request->input('phone');
            $newslitter->save();
            return redirect()->back();

         }
}

public function getContactus(){
return view('blades.contactus');
}
public function storeContactus(Request $request){

    $validator = Validator::make($request->all(), [
        'email' => 'email|required',
        'name'=>'max:50|required',
        'message'=>'required',
        ]);
        if ($validator->fails()){
             return redirect()->back()->withErrors($validator->errors());
         }else{
            $contact=new Contactus;
            $contact->name=$request->input('name');
            $contact->email=$request->input('email');
            $contact->message=$request->input('message');
            $contact->save();
            return redirect()->back();
         }
}

public function byCity(Request $request , $city_id){
    $products= Product::where([['city_id',$city_id],['free','1'],['approved','1'],[function($q) use($request){


        if($request->has('feature')){
            //echo 'feature';

                    $checkbox = $request->feature;
                    if(!array_key_exists('2',$checkbox)){
                        if(array_key_exists('1',$checkbox)){
                            $q->where([[$checkbox[0],'1'],['approved','1']])->orWhere([[$checkbox[1],'1'],['approved','1']]);

                        }else{
                            $q->where([[$checkbox[0],'1'],['approved','1']]);
                        }
                }else if(array_key_exists('2',$checkbox)){
                    $q->where([[$checkbox[0],'1'],['approved','1']])->orWhere([[$checkbox[1],'1'],['approved','1']])->orWhere([[$checkbox[2],'1'],['approved','1']]);
                }else{
                    $q->where([[$checkbox[0],'1'],['approved','1']]);
                }
        }

        if(($request->min) != null || ($request->max != null)){
            // echo 'price';

             $q->whereBetween('price',[$request->input("min") , $request->input("max")]);
         }

         if($request->has('category')){
            // echo 'category';

             $q->whereIn('category_id',$request->input('category'))->with('categories');
         }
    }]])->paginate(12);
    return view('blades.freeByCity',compact('products'));
}

public function getLatestAds(){
    $agent = new Agent();
   //  $product = Product::where([['free','1'],['approved','1'], ['country_id', session()->get('my_country')],['created_at', '>=', Carbon::now()->subDays(3)->toDateTimeString()]])->orderBy('id','DESC')->paginate(12);
    //  dd($product['item']);
    
       
     $product = Product::where([['approved','1'], ['country_id', session()->get('my_country')]])->orderBy('id','DESC')->limit(100)->paginate(15);
    //dd($product);
   
    
if($agent->isMobile()){
    return view('blades_mobile.allLatestAds_mobile',compact('product'));

}
    return view('blades.allLatestAds',compact('product'));
}



public function filterLatestAds(Request $request){

    $column="id";
$direction="DESC";
if($request->sort_price != null){
    // echo 'SORT price';
    $column='price';
    $direction=$request->sort_price;
    }
    if($request->sort_latest != null){
         // echo 'SORT latest';
         $column='created_at';
         $direction=$request->sort_latest;
    }

    $product= Product::where([['free','1'],['approved','1'], ['country_id', session()->get('my_country')],['created_at', '>=', Carbon::now()->subDays(3)->toDateTimeString()],[function($q) use($request){

        if($request->has('city')){
            //echo 'city';
            $q->whereIn('city_id', $request->input('city'));
        }
        if($request->has('category')){
            // echo 'category';

            $q->whereIn('category_id',$request->input('category'));
        }
        if($request->has('feature')){
            //echo 'feature';

                    $checkbox = $request->feature;
                    if(!array_key_exists('2',$checkbox)){
                        if(array_key_exists('1',$checkbox)){
                            $q->where($checkbox[0],'1')->orWhere($checkbox[1],'1');

                        }else{
                            $q->where($checkbox[0],'1');
                        }
                }else if(array_key_exists('2',$checkbox)){
                    $q->where($checkbox[0],'1')->orWhere($checkbox[1],'1')->orWhere($checkbox[2],'1');
                }else{
                    $q->where($checkbox[0],'1');
                }
        }
        if(($request->min) != null || ($request->max != null)){
           // echo 'price';

            $q->whereBetween('price',[$request->input("min") , $request->input("max")]);
        }
    }]])->orderBy('id','DESC')->paginate(12);
    return view('blades.allLatestAds',compact('product'));
}

public function getFeaturedAds(){

    $agent=new Agent();
    $product = Product::where([['latest','1'],['approved','1'],['country_id', session()->get('my_country')]])->orderBy('id','DESC')->paginate(12);
    if($agent->isMobile()){
    return view('blades_mobile.allLatestAds_mobile',compact('product'));

    }
    return view('blades.allLatestAds',compact('product'));
}







}
