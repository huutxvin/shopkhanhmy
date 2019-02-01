<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function getCategory($id) {
    	$data['cate_name'] = Category::find($id);
    	$data['items'] = Product::where('category_id',$id)->orderBy('prod_id','desc')->paginate(8);
    	return view('frontend.category',$data);
    }
}
