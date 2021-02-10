<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use AvoRed\Framework\Database\Models\Product;
use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;


Route::get('link',function () {
    Artisan::call('storage:link');
});

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function() {
        // $countries = [
        //     'Egy', 'SA','/'
        // ];
// Route::get('/', function () {
//     return view('home');
// });

    //  Route::group(['prefix' => '{country}', 'middleware' => 'country'], function () {

// foreach ($countries as $country) {
    // Route::group(['prefix'=>$country],function() {


        Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('social.login');
        Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('login',function(){


     return view('blades_mobile.login');
     });

     Route::get('register',function(){
        return view('/');
        });


        Route::get('country', function(Request $request){
            if(($request->country)== null){
                session()->put('my_country', '1');
            }else{
            session()->put('my_country', $request->country);

            }

            return redirect()->back();
        });

        Auth::routes(['verify' => false]);
        Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
// Password reset link request routes...
// Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

// Password reset routes...
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
// Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');

// *************************************
// // Authentication Routes...
// Route::get('register', 'Auth\RegisterController@showRegisterForm')->name('register');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.token');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');



// ***************************************

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('', 'HomeController@index')->name('home');

Route::get('category/{category}', 'CategoryController@show')->name('category.show');
Route::get('product/{product}', 'ProductController@show')->name('product.show');

Route::get('cart', 'CartController@show')->name('cart.show');
//Main cart
Route::post('add-to-cart', 'CartController@addToCart')->name('add.to.cart');
//ajax cart
// Route::get('add-to-cart/{product}', 'CartController@addToCart')->name('add.to.cart');

Route::delete('destroy-cart', 'CartController@destroy')->name('cart.destroy');
Route::put('update-cart', 'CartController@update')->name('cart.update');

Route::get('checkout', 'CheckoutController@show')->name('checkout.show');
Route::post('order', 'OrderController@place')->name('order.place');

Route::get('order/{order}', 'OrderController@successful')->name('order.successful');

//Allcategories
Route::get('AllCategories',function(){
    $agent = new Agent();
    if($agent->isMobile()){

        return view('blades_mobile.allCategories_mobile');
    }
return view('blades.allCategories');
})->name('allCategories');

//cat->sub
Route::get("SubcategoryCategory/{id}","HomeController@getSub")->name('category.sub');

//sub->products
Route::get("ProductsSubcategory/{slug}","HomeController@getProductSubCategory")->name('sub.products');
//cat->products
Route::get("ProductsCategory/{slug}","HomeController@getProductCategory")->name('cat.products');

//All free Ads Page
Route::get('AllFreeAds','HomeController@getAllFreeAds')->name('free.ads.all'); //all free ads page in site

//free product by city
Route::get("ProductsByCity/{id}","HomeController@byCity")->name('productsByCity');

//add new sponsored test
Route::get('test',function(){
    return view('seller.sponsoredadtest');
    })->name('test');

//search
Route::get("Search","SearchController@search");
Route::get("Filter","SearchController@filterSearch");
Route::get("Filter/Realestat","SearchController@realestatFilter")->name('realestat.filter');






Route::get('Ads','AdsController@getFreeAds')->name('free.ads');
Route::group(['middleware' => ['auth']], function() {
//free ads
// Route::get('Ads','AdsController@getFreeAds')->name('free.ads');
Route::post('Ads','AdsController@storeFreeAds')->name('free.ads.store');
Route::get('/getSubCategories/{id}', 'CategoryAndSubController@getSubCategories')->name('getSubCategories');
        //user all free ads
        Route::get("yourFreeAds","AdsController@userFreeAds")->name('user.freeAds');
        //deleteProduct
        Route::delete("deleteProduct/{id}","ProductController@deleteProduct")->name('user.deleteProduct');
        //edit free ad
        Route::get("editFreeAd/{id}","AdsController@edit")->name('free.ads.edit');
        Route::PUT("editFreeAd/{id}","AdsController@updateFreeProduct")->name('free.ads.update');
        //pending free ads
        Route::get("pendingFreeAd","AdsController@pendingFree")->name('free.ads.pending');
// delete one image
Route::delete("deleteImage/{id}","AdsController@deleteOneImage")->name('ads.deleteImage');



//wishlist
Route::get("Favorites","ProfileController@index")->name('favorites');
Route::post("addFavorites","ProfileController@addwishlist")->name('add.favorites');
Route::Delete('deleteFavorite/{id}','ProfileController@deletewishlist')->name('delete.favorites');

// shops Data
Route::post("Shop-Data","ProfileController@addShopData")->name('shops.data.add');
Route::get("Shop-Data",function(){
    $agent = new Agent();
    if($agent->isMobile()){
        return view('blades_mobile.shop_data_mobile');
    }
return view('blades.shop_data');
})->name('shops.data');


 //rating
 Route::post('rate/{id}','HomeController@rate')->name('rate');


  //ChatMessage
  Route::get('/ChatMessage/{id}', function($id){
      $product= Product::where('id' , $id)->first();
     // dd($product);
      return view('blades.chat',compact('product'));
  })->name('chat.message');
  Route::post('/ChatMessage','ProfileController@ChatMessage')->name('send.chat.message');
  Route::get('Inbox','ProfileController@userInbox')->name('chat.inbox');
  Route::delete('DeleteMessage/{id}', 'ProfileController@DeleteChat')->name('delete.chat');
  Route::get('Reply/{id}','ProfileController@getReply')->name('get.reply.chat');


//complaint
Route::get("Complaint","ProfileController@complaint")->name('complaint');
Route::post("addComplaint","ProfileController@addComplaint")->name('add.complaint');

//acc settings

Route::get('/settings',function(){
    return view('blades_mobile.account_settings_mobile');
})->name('settings');



  //saved search
Route::get('Saved-Search','SearchController@getSavedSearch')->name('search.saved');
//store saved search
Route::get('SaveSearch','SearchController@saveSearch')->name('store.search');
//delete Search
Route::delete('DeleteSearch/{id}','SearchController@deleteSearch')->name('delete.search');
});

//All latest Ads
    Route::get('latestAds','HomeController@getLatestAds')->name('AllLatestAds');
    Route::get("latestAdsfilter","HomeController@filterLatestAds")->name('latestAdsFilter');
//All featured Ads
Route::get('FeaturedAds','HomeController@getFeaturedAds')->name('AllFeaturedAds');




//shop
Route::get('Shops','ShopController@index')->name('shops');
Route::get('Product-details/{product}','ShopController@show')->name('product.details');

// Route::get('shops',function(){
//     return view('blades.shops2');
//     })->name('shops2');
    Route::get('shops/{user}','AdsController@allUserfreeAds')->name('shops2');
    Route::get('shopsview/{user}','AdsController@allUserfreeAdsH')->name('shops2H');

    Route::get('AllSellers','AdsController@allFreeAcc')->name('all.acc');

//seller
Route::get('SellerRegistration','SellerController@index')->name('seller.register');
Route::post('SellerRegistration','SellerController@AddSeller')->name('seller.add');
        //add service
        Route::get('AddService','ServicesController@index')->name('service.page');
        Route::post('AddService','ServicesController@addService')->name('services.add');

                    //services-details
                    Route::get('Service/{id}','ServicesController@showService')->name('service.details');
                    //sponsored-details
                    Route::get('sponsoredProduct-details/{product}','ShopController@showSponsored')->name('sponsord.product.details');


       //add sponsored ad
       Route::get('Addsponsored','AdsController@getSponsoredAds')->name('sponsored.page');
       Route::post('Addsponsored','AdsController@storeSponsoredAds')->name('sponsored.add');

       //charts
       Route::get('Charts','SellerController@getCharts')->name('charts');

       //bank informations
       Route::get('Bank-informations','SellerController@getbankinfo')->name('bank');

        //copons
        Route::get('Copons','SellerController@getCopons')->name('copons.page');
        Route::post('Copons','SellerController@addCopons')->name('copons.add');

        //sponsored ads position
         Route::get('ads','SellerController@getAdsPosition')->name('ads.position.page');
         Route::post('ads','SellerController@addAdsPosition')->name('ads.position.add');



         //cityCountry
            Route::get('cities/{id}','HomeController@cityOfCountry')->name('city.country');

        //newsletter

        Route::post('NewsLetter','HomeController@newsletter')->name('newsletter');

        //contact-us
        Route::get('ContactUs','HomeController@getContactus')->name('contactus');
        Route::post('ContactUs','HomeController@storeContactus')->name('contactus.store');

    //terms of use
    Route::get('TermsOfUse',function(){
        return view('blades.terms');
    })->name('terms');

    //privacy policy
    Route::get('Privacy',function(){
        return view('blades.privacy');
    })->name('privacy');

// Route::get('login',function(){
//     return redirect('/')->with('openLogin');
// });


Route::get('/getModel','AdsController@getCars')->name('car.details');


Route::middleware(['auth'])
    ->name('account.')
    ->prefix('account')
    ->namespace('Account')
    ->group(function () {
        Route::get('', 'DashboardController@index')->name('dashboard');
        Route::get('edit', EditController::class)->name('edit');
        Route::get('upload', UploadController::class)->name('upload');
        Route::post('save', SaveController::class)->name('save');
        Route::post('upload-image', UploadImageController::class)->name('upload.image');
        Route::resource('address', 'AddressController');
        Route::resource('order', 'OrderController')->only(['index', 'show']);

        Route::post('/changePassword','SaveController@changePassword')->name('changePassword');
        Route::post('/CreatePassword','SaveController@CreatePassword')->name('CreatePassword');



        Route::get('/deleteImage','UploadImageController@delete')->name('image.delete');



    });

// }); // countries prefix

// } // endforeach

}); // loclization


