@extends('frontend.master')
@section('title','Tìm kiếm')
@section('main')
<link rel="stylesheet" href="assets/css/search.css">
<div id="wrap-inner">
	<div class="products">
		<h3>Tìm kiếm với từ khóa: <span>{{$key_word}}</span></h3>
		<div class="product-list row">
			@foreach($items as $item)
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="{{url('storage/upload/'.$item->image)}}" class="img-thumbnail"></a>
					<p><a href="#">{{$item->name}}</a></p>
					<p class="price">{{number_format($item->price,0,',','.')}} VND</p>	  
					<div class="marsk">
						<a href="{{asset('sanpham/'.$item->prod_id.'/'.$item->slug)}}">Xem chi tiết</a>
					</div>                      	                        
				</div>
			@endforeach
		</div>                	                	
	</div>
	{{$items->links()}}
</div>
@stop
