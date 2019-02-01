@extends('frontend.master')
@section('title','Danh mục')
@section('main')
<link rel="stylesheet" href="assets/css/category.css">
<div id="wrap-inner">
	<div class="products">
		<h3>{{$cate_name->cate_name}}</h3>
		<div class="product-list row">
			@foreach($items as $prod_byCate)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="{{url('storage/upload/'.$prod_byCate->image)}}" class="img-thumbnail"></a>
				<p><a href="#">{{$prod_byCate->name}}</a></p>
				<p class="price">{{number_format($prod_byCate->price,0,',','.')}} VNĐ</p>	  
				<div class="marsk">
					<a href="{{asset('sanpham/'.$prod_byCate->prod_id.'/'.$prod_byCate->slug)}}">Xem chi tiết</a>
				</div>                                    
			</div> 
			@endforeach
		</div>              	                	
	</div>

	{{-- <div id="pagination">
		<ul class="pagination pagination-lg justify-content-center">
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
			<li class="page-item disabled"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		</ul>
	</div> --}}
	{{$items->links()}} 
</div>					
<!-- end main -->
@stop