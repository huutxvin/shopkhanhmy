@extends('backend.master')
@section('master')
@section('title', 'Sửa danh mục sản phẩm')
<div class="container">
		<div class="side-app">
			
			<div class="page-header">
				<h4 class="page-title">Danh mục sản phẩm</h4>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>						
						<div class="panel-body">
							@include('errors.errors')
							<form method="post">
								<div class="form-group">
									<label>Tên danh mục:</label>
									<input type="text" name="name" class="form-control" value="{{$cate->cate_name}}" placeholder="Tên danh mục...">
								</div>
								<div class="form-group">
									<input type="submit" name="btn_editcate" value="Sửa" class="btn btn-success">
									<a href="{{asset('admin/danhmuc')}}" class="btn btn-danger">Hủy</a>
								</div>
								{{csrf_field()}}
							</form>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/.row-->
</div>	
<!--/.main-->
@stop