<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class SearchController extends Controller
{
    //
    public function getSearch(Request $request){
    	$result = $request->result;
    	$data['key_word'] = $result;
    	$result = str_replace(' ','%',$result);
    	$data['items'] = Product::where('name','like','%'.$result.'%')->paginate(10);
    	return view('frontend.search',$data);
    }
}
