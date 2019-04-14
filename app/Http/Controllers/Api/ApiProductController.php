<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use DB;

class ApiProductController extends Controller
{

    // get all product
    public function index(){
        $product = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->join('products', 'categories.id', '=', 'products.category_id')
                ->select('products.*','categories.name as category_name', 'sub_categories.name as sub_name')->get();

        return [
            'message' => 'success',
            'status' => 1,
            'data' => $product
        ];
    }

    public function getByCat(){
        $product = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->join('products', 'categories.id', '=', 'products.category_id')
                ->select('products.*','categories.name as category_name', 'sub_categories.name as sub_name')
                ->where('products.category_id', '=', 4)->get();

        //$product = Product::findOrFail($category_id);

        return [
            'message' => 'success',
            'status' => 1,
            'data' => $product
        ];

    }

    public function getBySub(){
        $product = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->join('products', 'categories.id', '=', 'products.category_id')
                ->select('products.*','categories.name as category_name', 'sub_categories.name as sub_name')
                ->where('products.sub_category_id', '=', 4)->get();
    }

    public function getCat(){
        $category = DB::table('categories')->get();

        return [
            'message' => 'success',
            'status' => 1,
            'data' => $category
        ];
    }

    public function getSub(){
        $sub = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->select('categories.*', 'sub_categories.name as sub_name')->get();
        return [
            'message' => 'success',
            'status' => 1,
            'data' => $sub
        ];
    }

}
