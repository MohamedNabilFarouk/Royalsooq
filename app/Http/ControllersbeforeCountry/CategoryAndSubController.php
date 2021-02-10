<?php

namespace App\Http\Controllers;
use AvoRed\Framework\Database\Models\Page;
use Illuminate\Http\Request;

class CategoryAndSubController extends Controller
{
    //

    public function index(){

        // Fetch Categories
        $categoryData['data'] = Page::getCategory();
   
        // Load index view
        return view('index')->with("categoryData",$categoryData);
      }
   
      // Fetch records
      public function getSubCategories($category_id=0){
   
        // Fetch Employees by Departmentid
        $userData['data'] = Page::getcategorySubcategory($category_id);
   
        echo json_encode($userData);
        exit;
      }
}
