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



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;
use App\User;
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
    public function index()
    {
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
$weekly = Product::where([['weekly','1'],['sponsored','1'],['approved','1']])->with('user')->get();
$sponsored = Product::where('sponsored','1')->get();
$featuered = Product::where('featuered','1')->get();
//$new = $allProducts->where('new','1')->random(4)->all();

//free product
$latest = Product::where([['latest','1'],['free','1'],['approved','1']])->get();
$latest2 = Product::where([['latest2','1'],['free','1'],['approved','1']])->get();


//  $latest2_ava=$latest2->averageRating;
//sponsored product 
$new_arrivals = Product::where([['new','1'],['sponsored','1'],['approved','1']])->get();
$best_rated = Product::where([['best_rated','1'],['sponsored','1'],['approved','1']])->get();
$on_sale = Product::where([['on_sale','1'],['sponsored','1'],['approved','1']])->get();
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

// dd($prod->averageRating);
return view('home')

            ->with(compact('products',  'wishlists','categories' , 'new_servcies','featured_servcies',  'weekly' ,'latest','latest2', 'sponsored','featuered' , 'new_arrivals','on_sale','best_rated','single_item','slider','left_top','left_bottom','right_top','right_bottom','footer'));
    }

public function getSub($id){
    $sub= SubCategory::where('category_id',$id)->get();
    return view ('blades.subcategory-category',compact('sub'));
}

public function getProductSubCategory($id , Request $request){
    // $products= Product::where('subcategory_id',$id)->paginate(8);
    $products= Product::where([['subcategory_id', $id],['approved','1'],[function($q) use($request , $id){
            $q->where([['subcategory_id', $id],['approved','1']]);
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
    }]])->get();
    // dd($products);
    return view ('blades.products-subcategory',compact('products'));
}

public function getAllFreeAds(){
    $featured= Product::where([["free","1"],['latest','1'],['approved','1']])->get();
    $latest= Product::where([["free","1"],['latest2','1'],['approved','1']])->get();

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
        'email' => 'email|required',
        ]);
        if ($validator->fails()){         
             return redirect()->back()->withErrors($validator->errors());
         }else{

            // Newsletter::create($request->all());
            $newslitter=new Newsletter;
            $newslitter->email=$request->input('email');
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
    }]])->get();
    return view('blades.freeByCity',compact('products'));
}

}
