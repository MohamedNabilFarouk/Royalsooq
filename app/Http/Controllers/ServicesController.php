<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AvoRed\Framework\Database\Models\Service;
use AvoRed\Framework\Database\Models\ServiceProperty;
use Auth;
use App\User;

class ServicesController extends Controller
{
    //
    public function index(){
        return view('seller.addservice');
    }

    public function addService(Request $request){
         $service = new Service;
         $service->name = $request->input('name');
         $service->des = $request->input('des');
         $service->price =  $request->input('price');
         $service->category_id = $request->input('category_id');
         $service->subcategory_id =  $request->input('subcategory_id');
         $service->user_id= auth()->user()->id;

         $image = $request->file('image');
         $file_name = rand(1, 999) . $image -> getClientOriginalName() ;
            $file = $image->storeAs('Services',$file_name);
        $service->image= $file;
        $service->save();



$des_property= $request->input('des_pro');
$price_property = $request->input('price_pro');
$days_property = $request->input('days_pro');

for ($i=0; $i < count($des_property); ++$i) {
    $property = new ServiceProperty;
    $property->description= $des_property[$i];
    $property->price= $price_property[$i];
    $property->days= $days_property[$i];

$property->service_id= $service->id;

$property->save();
}

        return redirect()->back();

    }


    public function showService($id){
            $details = Service::where('id',$id)->with('serviceproperty')->get();
            return view('blades.ServiceDetails',compact('details'));

    }
}
