<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Models\Product;
use Mail;

class CartController extends Controller
{
    //
    public function getAddCart($id) {
    	$prod = Product::find($id);
    	Cart::add(['id' => $prod->prod_id, 'name' => $prod->name, 'qty' => 1, 'price' => $prod->price, 'options' => ['img' => $prod->image]]);
    	return redirect('cart/show');
    }
    public function getShowCart() {
    	$data['total'] = Cart::total();
    	$data['items'] = Cart::content();
    	return view('frontend.cart', $data);
    }
    public function getDeleteCart($id) {
    	if($id=="all"){
    		Cart::destroy();
    	}else{
    		Cart::remove($id);
    	}
    	return back();
    }
    public function getUpdateCart(Request $request){
    	Cart::update($request->rowId,$request->qty);
    }
    public function postComplete(Request $request) {
    	$data['info'] = $request->all();
    	$email = $request->email;
    	$data['items'] = Cart::content();
    	$data['total'] = Cart::total();
    	Mail::send('frontend.email', $data, function ($message) use ($email) {
    	    $message->from('huutranxuan2510@gmail.com', 'Shop Khanh My');   	
    	    $message->to($email, $email);	
    	    $message->cc('huutx@vinsofts.net', 'Trần Xuân Hữu');   	   	
    	    $message->subject('Xác nhận đơn hàng');
    	});
    	Cart::destroy();
    	return redirect('complete');
    }
    public function getComplete() {
    	return view('frontend.complete');
    }
    public function getEmail(){
    	return view('frontend.email');
    }
}
