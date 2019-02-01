<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use DateTime;
use DB;

class ProductController extends Controller
{
    //
    public function getProduct() {
        $data['product_list'] = DB::table('product_table')->join('category_table','product_table.category_id','=','category_table.cate_id')->orderBy('prod_id','desc')->paginate(6);
    	return view ('backend.product',$data);
    }

    public function getAddProduct() {
        $cate['cate_list']= Category::all();

    	return view ('backend.addproduct',$cate);
    }

    public function postAddProduct(ProductRequest $request) {
        $date = new DateTime();
        $date_upload = $date->format('d-m-Y');
        $file = $request->img->getClientOriginalName();
        $filename = $date_upload.'-'.$file;

        $product = new Product;
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->price = $request->price;
        $product->image = $filename;
        $product->warranty = $request->warranty;
        $product->accessories = $request->accessories;
        $product->condition = $request->condition;
        $product->promotion = $request->promotion;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->featured = $request->featured;
        $product->category_id = $request->cate;
        $product->created_at = new DateTime();
        $product->save();
        $request->img->storeAs('/public/upload/',$filename);
    	return redirect()->intended('admin/sanpham');
    }

    public function getEditProduct($id) {
        $data['product'] = Product::find($id);
        $cate['cate_list'] = Category::all();
    	return view ('backend.editproduct',$data,$cate);
    }

    public function postEditProduct(Request $request,$id) {
        $product = new Product;
        $arr['name'] = $request->name;
        $arr['slug'] = str_slug($request->name);
        $arr['price'] = $request->price;
        $arr['warranty'] = $request->warranty;
        $arr['accessories'] = $request->accessories;
        $arr['condition'] = $request->condition;
        $arr['promotion'] = $request->promotion;
        $arr['status'] = $request->status;
        $arr['description'] = $request->description;
        $arr['featured'] = $request->featured;
        $arr['category_id'] = $request->cate;
        $arr['updated_at'] = new DateTime();
        if($request->hasFile('img')) {
            $date = new DateTime();
            $date_upload = $date->format('d-m-Y');
            $img = $request->img->getClientOriginalName();
            $filename = $date_upload.'-'.$img;          
            $arr['image'] = $filename;
            $request->img->storeAs('public/upload',$filename);
        }
        $product::where('prod_id',$id)->update($arr);
    	return redirect ('admin/sanpham');
    }

    public function getDeleteProduct($id) {
        Product::destroy($id);
    	return back();
    }
}
