<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
   public function index(){
        $cate_product = DB::table('category_product')->where('category_status','1')->orderby('category_id', "desc")->get() ;
        $brand_product = DB::table('brand_product')->where('brand_status','1')->orderby('brand_id', "desc")->get() ;
        $product = DB::table('product')->where('product_status','1')->orderby('product_id', "desc")->limit(6)->get() ;
        return view('frontend.home')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('product',$product);
    }


}
