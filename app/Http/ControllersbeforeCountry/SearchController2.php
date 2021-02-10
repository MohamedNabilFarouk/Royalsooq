<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AvoRed\Framework\Database\Models\Category;
use AvoRed\Framework\Database\Models\Product;
use AvoRed\Framework\Database\Models\Service;
use Session;
use DB;
// use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{

  
    //&&($request->search)
    public function searchProduct(Request $request){
       // $products = Product::Query();

if (($request->category !='null')&&($request->city != 'null')&&($request->search)){
   //search where city & category & name of product
    $result= Product::Query()->ByName($request->search)
    ->where('city_id',$request->city)
    ->with('categories')
    ->WhereHas('categories', function($q) use ($request) {
        $q->where('category_id', $request->category);
    })
    ->get();
            // if(($request->type)=='free'){
            //     $result= $result->where([['free','1'],['approved','1']])->all();
            // }else if(($request->type)=='sponsored'){
            //     $result= $result->where([['sponsored','1'],['approved','1']])->all();
            // }
//search by city only
}else if (($request->city !='null') &&($request->search)) {
    $result= Product::Query()->ByName($request->search)
    ->where('city_id',$request->city)->get();

    //search by Category only
}else if(($request->search)&&($request->category !='null')){
   
    $result= Product::Query()->ByName($request->search)
    ->with('categories')
    ->WhereHas('categories', function($q) use ($request) {
        $q->where('category_id', $request->category);
    })
    ->get();

//search by product name only 
}else{
    $result= Product::Query()->ByName($request->search)->get();
  

   
    // $result= Product::with('Categories') ->WhereHas('categories', function($q) use ($request) {
    //     $q->where('category_id', $request->category);
    // })
    // ->get();
}



//dd($result);
        // $products = Product::Query();

        // if ($request->has('product')) {
        //     $products = $products->ByName($request->product);


        // if($request->has('min') && $request->has('max')){
        //     $products->ByPrice($request->min,$request->max);
        // }
        // if($request->has('color')){
        //     $products->ByColor($request->color);
        // }
        // $products= $products->get();
        
       // return view('blades.search',compact('result'));
                                        
    }

public function search(Request $request){
    
    // if type = free ads
    if($request->type == 'free'){
        if($request->category !='null'){
            //search by name and category and free
            $product= Product::Query()->ByName($request->name)
            ->where([['category_id',$request->category],['free','1'],['approved','1']])->paginate(4);
        }else{
            //search by name and free
            $product= Product::Query()->ByName($request->name)->where([['free','1'],['approved','1']])->paginate(4);
          
        }
      // if type = sponsored ads
    }else if($request->type == 'sponsored'){
        if($request->category !='null'){
            //search by name and category and 
            $product= Product::Query()->ByName($request->name)
            ->where([['category_id',$request->category],['sponsored','1'],['approved','1']])->paginate(4);
        }else{
            //search by name and free
                 $product= Product::Query()->ByName($request->name)->where([['sponsored','1'],['approved','1']])->paginate(4); 
        }
        // if type = services
    }else if($request->type == 'service'){
        if($request->category !='null'){
            //search by name and category and 
            $product= Service::Query()->ByName($request->name)
            ->where([['category_id',$request->category],['approved','1']])->paginate(4);
        }else{
        $product = Service::Query()->ByName($request->name)->where([['approved','1']])->paginate(4);
        }
        // if NO type --search in product and services
    }else{
                if($request->category !='null'){
                    //search by name and category and 
                    $pro= Product::Query()->ByName($request->name)
                    ->where([['category_id',$request->category],['approved','1']])->paginate(4);
                    $serv = Service::Query()->ByName($request->name)->where([['approved','1']])->paginate(4);
                    $product= $pro->merge($serv)->simplePaginate(9);
                }else{
                    $pro= Product::Query()->ByName($request->name)->where([['approved','1']])->paginate(4);
                $serv = Service::Query()->ByName($request->name)->where([['approved','1']])->paginate(4);
                $product= $pro->merge($serv);
                }
            
          
    }
    // if($request->has('min')|| $request->has('max')){
    //    $filterd= $product->filter(function ($value) use($request) {
    //        return $value->whereBetween('price',[$request->min, $request->max]);
    //     });
    // $product=$filterd->all();
    // }
   //dd($product);
   Session::put('product', $product);
    $page_title='search';
    $productonly='';
    // $product= $product->paginate(9);
    //return $product;
 //dd($product);
    return view('blades.search',compact('page_title','product','productonly'));
}

public function filterSearch(Request $request){
//  $collection= collect($request->search_request);
//  dd($collection);

if ($request->has('min') ||  ($request->has('max'))){
$products= Session::get('product');
    $product=  $products->whereBetween('price',[$request->min, $request->max]);
}
  // filter by feature
 
  if($request->has('feature')){
  
  $checkbox = $request->feature;
  //dd($checkbox[0],$checkbox[1],$checkbox[2]);
  if(!array_key_exists('2',$checkbox)){
      
        if(array_key_exists('1',$checkbox)){
        $productonly = DB::table('products')->join('product_images', 'product_images.product_id', '=', 'products.id')->where($checkbox[0],'1')->orWhere($checkbox[1],'1')->paginate(4);
        }else{
        $productonly = DB::table('products')->join('product_images', 'product_images.product_id', '=', 'products.id')->where($checkbox[0],'1')->paginate(4);

        }


  }else if(array_key_exists('2',$checkbox)){
  $productonly = DB::table('products')->join('product_images', 'product_images.product_id', '=', 'products.id')->where($checkbox[0],'1')->orWhere($checkbox[1],'1')->orWhere($checkbox[2],'1')->paginate(4);
  }else{
    
  $productonly = DB::table('products')->join('product_images', 'product_images.product_id', '=', 'products.id')->where($checkbox[0],'1')->paginate(4);

  }

}
if($request->has('category')){
    $filterd_product = Product::whereIn('category_id', $request->category)->with('categories')->paginate(4);
    //$filterd_product=$filterd_product->with('categories');
    //dd($filterd_product);
    $filterd_services = Service::whereIn('category_id', $request->category)->with('categories')->paginate(4);
   // $filterd_services=$filterd_services->with('categories');
    $product= $filterd_product->merge($filterd_services);
   // dd($filterd);

}

if($request->has('city')){
    $filterd_product = Product::whereIn('city_id', $request->city)->with('city')->paginate(4);
    $filterd_services = Service::whereIn('city_id', $request->city)->with('city')->paginate(4);
    $product= $filterd_product->merge($filterd_services);

}

if($request->has('feature')){
    $product='';
}else{
    $productonly='';
}
                           
// $product = $filterd;
//dd($product);
//dd($productonly);
    $page_title='search';
//$product= $product->paginate(1);

            return view('blades.search',compact('page_title','product','productonly'));}



}