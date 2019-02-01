<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Comments;

class ProductController extends Controller
{
    //
    public function getDetail($id) {
    	$data['item'] = Product::find($id);
    	$data['comments'] = Comments::where('product_id', $id)->get();
    	return view('frontend.details', $data);
    }

}
