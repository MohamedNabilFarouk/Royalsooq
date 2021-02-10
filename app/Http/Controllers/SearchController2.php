<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AvoRed\Framework\Database\Models\Category;
use AvoRed\Framework\Database\Models\Product;
use AvoRed\Framework\Database\Models\Service;
use AvoRed\Framework\Database\Models\AdsAttribute;

use Session;
use DB;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
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
                ->where([['category_id',$request->category],['free','1'],['approved','1'], ['country_id', session()->get('my_country')]])->with('city')->get();
            }else{
                //search by name and free
                $product= Product::Query()->ByName($request->name)->where([['free','1'],['approved','1'], ['country_id', session()->get('my_country')]])->get();
              
            }
          // if type = sponsored ads
        }else if($request->type == 'sponsored'){
            if($request->category !='null'){
                //search by name and category and 
                $product= Product::Query()->ByName($request->name)
                ->where([['category_id',$request->category],['sponsored','1'],['approved','1'], ['country_id', session()->get('my_country')]])->get();
            }else{
                //search by name and free
                     $product= Product::Query()->ByName($request->name)->where([['sponsored','1'],['approved','1'], ['country_id', session()->get('my_country')]])->get(); 
            }
            // if type = services
        }else if($request->type == 'service'){
            if($request->category !='null'){
                //search by name and category and 
                $product= Service::Query()->ByName($request->name)
                ->where([['category_id',$request->category],['approved','1']])->get();
            }else{
            $product = Service::Query()->ByName($request->name)->where([['approved','1']])->get();
            }
            // if NO type --search in product and services
        }else{
            if($request->category != 'null' && $request->name = 'null'){
   
                    $product = Product::where([['category_id',$request->category],['approved','1'], ['country_id', session()->get('my_country')]])->paginate(4);
            }
                  else  if($request->category !='null' && $request->name != 'null' ){
                        //search by name and category and 
                        $pro= Product::Query()->ByName($request->name)
                        ->where([['category_id',$request->category],['approved','1'], ['country_id', session()->get('my_country')]])->paginate(4);
                        $serv = Service::Query()->ByName($request->name)->where([['approved','1']])->get();
                        // $product= $pro->merge($serv); // when search in product and services********
                        $product = $pro;

                    }else{
                        $pro= Product::Query()->ByName($request->name)->where([['approved','1'], ['country_id', session()->get('my_country')]])->paginate(4);
                    $serv = Service::Query()->ByName($request->name)->where([['approved','1']])->get();
                    // $product= $pro->merge($serv); // when search in product and services********
                    $product = $pro;
                    }
                
              
        }
        // if($request->has('min')|| $request->has('max')){
        //    $filterd= $product->filter(function ($value) use($request) {
        //        return $value->whereBetween('price',[$request->min, $request->max]);
        //     });
        // $product=$filterd->all();
        // }
       //dd($product);
       $paginator = new Paginator($product, count($product), 5, $request->page ?? 1, [
        'path'  => $request->url(),
        'query' => $request->query(),
    ]);
       Session::put('product', $product);
        $page_title='search';
        $productonly='';
        //return $product;
      //  dd($product);
        return view('blades.search',compact('page_title','product','productonly'));
    }

public function filterSearch(Request $request){
//  $collection= collect($request->search_request);
  //dd($request->sort_price);

// $conditions = collect([]);
// $conditions->push($request->only("['city', 'category', 'feature', 'min', 'max']"));
// dd($conditions);
//dd($request);

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


$product = Product::where([['country_id', session()->get('my_country')],['approved','1'] ,[function($q) use($request) {
   
    
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

   
//   dd($q) ;
}]])->orderBy($column , $direction)->paginate(4);



// exit();
                         
// $product = $filterd;
//dd($product);
//dd($productonly);
    $page_title='search';
//$product= $product->paginate(1);
            return view('blades.search',compact('page_title','product'));
        }







        public function realestatFilter(Request $request){
 //($request->warranty);

    $ad_attr =  AdsAttribute::where(function($query) use($request){
        if($request->room_number != null){
            //echo 'room no';
            $query->where('room_number',$request->room_number);
        }
        if($request->bathroom_number!= null){
           // echo 'bathroom no';
            $query->where('bathroom_number',$request->bathroom_number);
        }

        if(($request->area_form != null)|| ($request->area_to != null)){
           // echo 'area';
            $query->whereBetween('area',[$request->input("area_from") , $request->input("area_to")]);
        }

        if($request->furnished!= 'null'){
           // echo 'furnished ';
            $query->where('furnished',$request->furnished);
        }

        if($request->payment != 'null'){
            echo 'payment';
            $query->where('payment',$request->payment);
        }

        if($request->car != 'null'){
            // echo 'car';
            $query->where('car',$request->car);
        }

        if($request->model != 'null'){
            // echo 'model';
            $query->where('model',$request->model);
        }

        if($request->year != 'null'){
            // echo 'year';
            $query->where('year',$request->year);
        }

        if($request->color != 'null'){
            // echo 'color';
            $query->where('color',$request->color);
        }
        if($request->transmission_type != 'null'){
            // echo 'transmission_type';
            $query->where('transmission_type',$request->transmission_type);
        }
        if($request->condition_type != 'null'){
             echo 'condition_type';
            $query->where('condition_type',$request->condition_type);
        }

        if($request->kilos != 'null'){
            // echo 'kilos';
            $query->where('kilos',$request->kilos);
        }

        if($request->warranty != 'null'){
             echo 'warranty';
            $query->where('warranty',$request->warranty);
        }


    })->whereHas('product',function($query){
       $query->where([['country_id', session()->get('my_country')],['approved','1']]);
    })->with('product')->get();
      $products='[]';   
    // foreach($ad_attr->product as $a){
    //  array_push($products, $a->name);
    // }
    // $products= $products[0]->product->name;
             //dd($products); 
              //dd($ad_attr);
            return view ('blades.products-sub-filter-result',compact('ad_attr','products'));   
            }
        }




