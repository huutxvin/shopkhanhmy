<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function getHome() {
    	$data['product_featured_list'] = Product::where('featured',1)->orderBy('prod_id','desc')->take(8)->get();
    	$new['product_new_list']= Product::orderBy('prod_id','desc')->take(8)->get();
    	return view('frontend.home',$data, $new);
    }
}
