@extends('frontend.master')
@section('title','Trang chủ')
@section('main')
<div id="wrap-inner">
	<div class="products">
		<h3>sản phẩm nổi bật</h3>
		<div class="product-list row">
			@foreach($product_featured_list as $product_featured)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="{{url('storage/upload/'.$product_featured->image)}}" class="img-thumbnail"></a>
				<p><a href="#">{{$product_featured->name}}</a></p>
				<p class="price">{{number_format($product_featured->price,0,',','.')}} VNĐ</p>	  
				<div class="marsk">
					<a href="{{asset('sanpham/'.$product_featured->prod_id.'/'.$product_featured->slug)}}">Xem chi tiết</a>
				</div>                                    
			</div>
			@endforeach								
		</div>                	                	
	</div>

	<div class="products">
		<h3>sản phẩm mới</h3>
		<div class="product-list row">
			@foreach($product_new_list as $product)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="{{url('storage/upload/'.$product->image)}}" class="img-thumbnail"></a>
				<p><a href="#">{{$product->name}}</a></p>
				<p class="price">{{number_format($product->price,0,',','.')}} VND</p>	  
				<div class="marsk">
					<a href="{{asset('sanpham/'.$product->prod_id.'/'.$product->slug)}}">Xem chi tiết</a>
				</div>                      	                        
			</div>
			@endforeach
		</div>    
	</div>
</div>
@stop					
