@extends('backend.master')
@section('title', 'Sản phẩm')
@section('master')
<div class="container">
	<div class="site-app">	
		<div class="col-sm-9 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
			<div class="row">
				<h1 class="page-header">
					<h4 class="page-title">
						Sản phẩm
					</h4>
				</h1>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					
					<div class="panel panel-primary">
						<div class="panel-heading">Danh sách sản phẩm</div>
						<div class="panel-body">
							<div class="bootstrap-table">
								<div class="table-responsive">
									<a href="{{asset('admin/sanpham/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
									<table class="table table-bordered" style="margin-top:20px;">				
										<thead>
											<tr class="bg-primary">
												<th>ID</th>
												<th width="15%">Tên Sản phẩm</th>
												<th>Giá sản phẩm</th>
												<th width="18%">Ảnh sản phẩm</th>
												<th>Trạng thái</th>
												<th>Tình trạng</th>
												<th>Danh mục</th>
												<th>Tùy chọn</th>
											</tr>
										</thead>
										<tbody>
											@foreach($product_list as $product)
											<tr>
												<td>{{$product->prod_id}}</td>
												<td>{{$product->name}}</td>
												<td>{{number_format($product->price,0,',','.')}} VND</td>
												<td>
													<img height="100px" src="{{ url('/storage/upload/'.$product->image)}}" class="thumbnail">
												</td>
												<td>{{$product->condition}}</td>
												@if($product->status==1)
													<td>Còn hàng</td>
												@else
													<td>Hết hàng</td>	
												@endif												
												<td>{{$product->cate_name}}</td>
												<td>
													<a href="{{asset('admin/sanpham/edit/'.$product->prod_id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
													<a href="{{asset('admin/sanpham/delete/'.$product->prod_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
												</td>
											</tr>
											@endforeach											
										</tbody>
									</table>																
								</div>
								{{$product_list->links()}}
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	</div>
</div>
<!--/.main-->

@stop