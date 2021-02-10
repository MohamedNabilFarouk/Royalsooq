<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use AvoRed\Framework\Database\Models\Product;
use AvoRed\Wishlist\Database\Models\Wishlist;
use AvoRed\Framework\Database\Models\Visit;







class DashboardController extends Controller
{
    /**
     * Show the user account dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        // $user_id= auth()->user()->id;
    $userAds = Product::where('user_id',$user['id'])->get();
    $userFavorites= Wishlist::where('user_id', $user['id'])->get();
    $allAds = Product::where('user_id',$user['id'])->get();
     $item=0;   
        // $products[0]->visits()->count()
foreach($allAds as $a){
$item += $a->views['score'];
    // $items[] = $a->views['score'];
//   echo $a->views['score'];
}
// echo $item;
// print_r($items);
    //  dd(count($allAds->views['score']));
        return view('account.dashboard', compact('user','userAds','userFavorites','item'));
    }

   
}
