<?php



namespace App\Providers;



use App\Http\Composers\NavComposer;

use AvoRed\Framework\Menu\MenuItem;

use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

use AvoRed\Framework\Support\Facades\Menu;

use AvoRed\Framework\Database\Models\Category;

use AvoRed\Framework\Database\Models\City;

use AvoRed\Framework\Database\Models\Country;



use AvoRed\Framework\Database\Models\SubCategory;

use AvoRed\Framework\Database\Models\AdsImages;

use AvoRed\Framework\Database\Models\Statics;



use AvoRed\Framework\Database\Models\Car;





class AppServiceProvider extends ServiceProvider

{

    /**

     * Register any application services.

     *

     * @return void

     */

    public function register()

    {

        //

    }



    /**

     * Bootstrap any application services.

     *

     * @return void

     */

    public function boot()

    {

        View::composer('partials.nav', NavComposer::class);

        Menu::make('login', function (MenuItem $menu) {

            $menu->label('Login')

                ->type(MenuItem::FRONT)

                ->route('login');

        });

        Menu::make('register', function (MenuItem $menu) {

            $menu->label('Register')

                ->type(MenuItem::FRONT)

                ->route('register');

        });

        Menu::make('cart', function (MenuItem $menu) {

            $menu->label('Cart')

                ->type(MenuItem::FRONT)

                ->route('cart.show');

        });

        Menu::make('checkout', function (MenuItem $menu) {

            $menu->label('Checkout')

                ->type(MenuItem::FRONT)

                ->route('checkout.show');

        });

        Menu::make('logout', function (MenuItem $menu) {

            $menu->label('Logout')

                ->type(MenuItem::FRONT)

                ->route('logout');

        });

        Menu::make('account.dashboard', function (MenuItem $menu) {

            $menu->label('My Account')

                ->type(MenuItem::FRONT)

                ->route('account.dashboard');

        });

        Menu::make('account.order.index', function (MenuItem $menu) {

            $menu->label('My Orders')

                ->type(MenuItem::FRONT)

                ->route('account.order.index');

        });



        $allcat= Category::with('subcategory')->get();

        $services_cat= Category::where('service','1')->with('subcategory')->get();



        $freeproduct_cat= Category::where('free','1')->with('subcategory')->get();

        $sponsoredproduct_cat= Category::where('sponsored','1')->with('subcategory')->get();



        $footer=AdsImages::where('code','footer')->get();



        $phone1 = Statics::where('code','contact number 1')->get();

        $phone2 = Statics::where('code','contact number 2')->get();



        $sales_email = Statics::where('code','sales_email')->get();

        $cs_email = Statics::where('code','cs_email')->get();
        $info_email = Statics::where('code','info_email')->get();

        $map= Statics::where('code','map')->get();

        $contact_info= statics::where('code','contact_info')->get();

        $about = Statics::where('code','about')->get();

        $address = Statics::where('code','address')->get();

        $allCountries= Country::with('city')->get();



       // dd($sponsoredproduct_cat);

        View::share('services_cat',$services_cat);

        View::share('allcat',$allcat);
        View::share('address',$address);


        View::share('freeproduct_cat',$freeproduct_cat);

        View::share('sponsoredproduct_cat',$sponsoredproduct_cat);

        View::share('footer',$footer);





        View::share('phone1',$phone1);

        View::share('phone2',$phone2);

        View::share('about',$about);

        View::share('sales_email',$sales_email);
        View::share('info_email',$info_email);


        View::share('cs_email',$cs_email);

        View::share('contact_info',$contact_info);

        View::share('map',$map);





        $allcities= City::all();

        $egy_cities=City::where('country_id','1')->get();

        $sa_cities=City::where('country_id','2')->get();



        $egy_cities2=City::where('country_id','1')->paginate(27);

        $sa_cities2=City::where('country_id','2')->paginate(27);





        $car=Car::distinct()->get(['make']);



        View::share('allcities',$allcities);

        View::share('allCountries',$allCountries);



        View::share('egy_cities',$egy_cities);

        View::share('sa_cities',$sa_cities);



        

        View::share('egy_cities2',$egy_cities2);

        View::share('sa_cities2',$sa_cities2);

        View::share('car',$car);





        // View::share('currency',$currency);

        // View::share('sess',$sess);







    }

}

