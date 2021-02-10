<?php



namespace App\Http\Controllers;

use AvoRed\Framework\Database\Models\Product;



use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;



class ShopController extends Controller

{

    //

    public function index(Request $request){
        $agent = new Agent();
        $products = Product::Query();





        // $products= Product::where(['category_id','category_id'],['3','1'])->paginate(9);

        // dd($products);



        if( ($request->category !='0')&& ( ($request->max)=='0')){

           // echo 'here1';

            $products= Product::where('category_id',$request->category)->where([['sponsored', '1'],['approved','1']])->paginate(9);





        }

        else if ( (($request->category) =='0')){

            //echo 'here2' ;

            $products->ByPrice($request->min,$request->max);

            $products =$products->where([['sponsored', '1'],['approved','1']])->paginate(9);



        }else  if(($request->category !='0')&&(($request->min)||($request->max)=='0')){

            //echo 'here3';

            $products->ByPrice($request->min,$request->max);

            $products= $products->where('category_id',$request->category)->where([['sponsored', '1'],['approved','1']])->paginate(9);

        }else{

            //echo 'here 4';

            $products= Product::where([['sponsored', '1'],['approved','1']])->paginate(9);



        }

        // dd($products);

        return view('blades.shop', compact('products'));

    }





    public function show($slug){
        $agent = new Agent();
        $products= Product::where('slug',$slug)->with('categories')->with('user')->get();

//dd($products);

$related_products= Product::where([['category_id', $products[0]->categories->id],['approved','1'],['country_id', session()->get('my_country')]])->orderBy('id','DESC')->limit(30)->get();


       // dd($related_products);

       if($agent->isMobile()){

        return view('blades_mobile.productdetails_mobile',compact('products','related_products'));
    }

        return view('blades.productdetails',compact('products','related_products'));

    }





    public function showSponsored($slug){

        $products= Product::where([

            ['slug',$slug],

            ['sponsored','1']

        ])->with('user')->get();



        //dd($products);

        return view('blades.sponsoredProductDetails',compact('products'));

    }

}

