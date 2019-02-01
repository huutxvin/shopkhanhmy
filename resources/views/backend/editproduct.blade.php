@extends('backend.master')
@section('title', 'Sửa sản phẩm')
@section('master')
<div class="container">
	<div class="site-app">		
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<h1 class="page-header">
					<h4 class="page-title">
						Sửa sản phẩm
					</h4>
				</h1>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					
					<div class="panel panel-primary">
						<div class="panel-heading">Sửa sản phẩm</div>
						<div class="panel-body">
							<form method="post" enctype="multipart/form-data">
								<div class="row" style="margin-bottom:40px">
									<div class="col-xs-8">
										<div class="form-group" >
											<label>Tên sản phẩm</label>
											<input required type="text" name="name" class="form-control" value="{{$product->name}}">
										</div>
										<div class="form-group" >
											<label>Giá sản phẩm</label>
											<input required type="number" name="price" class="form-control" value="{{$product->price}}">
										</div>
										<div class="form-group" >
											<label>Ảnh sản phẩm</label>
											<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
						                    <img id="avatar" class="thumbnail" width="200px" src="{{ url('/storage/upload/'.$product->image)}}">
										</div>
										<div class="form-group" >
											<label>Phụ kiện</label>
											<input required type="text" name="accessories" class="form-control" value="{{$product->accessories}}">
										</div>
										<div class="form-group" >
											<label>Bảo hành</label>
											<input required type="text" name="warranty" class="form-control" value="{{$product->warranty}}">
										</div>
										<div class="form-group" >
											<label>Khuyến mãi</label>
											<input required type="text" name="promotion" class="form-control" value="{{$product->promotion}}">
										</div>
										<div class="form-group" >
											<label>Tình trạng</label>
											<input required type="text" name="condition" class="form-control" value="{{$product->condition}}">
										</div>
										<div class="form-group" >
											<label>Trạng thái</label>
											<select required name="status" class="form-control">
												<option value="1" @if($product->status==1) selected @endif>Còn hàng</option>
												<option value="0" @if($product->status==0) selected @endif>Hết hàng</option>
						                    </select>
										</div>
										<div class="form-group" >
											<label>Miêu tả</label>
											<textarea required name="description" id="summary-ckeditor">{{$product->description }}</textarea>
										</div>										
										<script type="text/javascript">
											CKEDITOR.replace( 'summary-ckeditor', {
										        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
										        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
										        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
										        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
										        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
										        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
										    } );
										</script>
										<div class="form-group" >
											<label>Danh mục</label>
											<select required name="cate" class="form-control">
												@foreach($cate_list as $cate)
												<option value="{{$cate->cate_id}}" @if($product->category_id==$cate->cate_id) selected @endif>{{$cate->cate_name}}</option>
												@endforeach
						                    </select>
										</div>
										<div class="form-group" >
											<label>Sản phẩm nổi bật</label><br>
											Có: <input type="radio" name="featured" value="1" @if($product->featured == 1) checked @endif>
											Không: <input type="radio" name="featured" value="0" @if($product->featured == 0) checked @endif>
										</div>
										<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
										<a href="{{asset('admin/sanpham')}}" class="btn btn-danger">Hủy bỏ</a>
									</div>
								</div>
								{{csrf_field()}}
							</form>
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