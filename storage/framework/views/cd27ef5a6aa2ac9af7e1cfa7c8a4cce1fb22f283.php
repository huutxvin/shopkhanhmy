
<?php $__env->startSection('title', 'Thêm sản phẩm'); ?>
<?php $__env->startSection('master'); ?>
<div class="container">
	<div class="site-app">
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
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
						<div class="panel-heading">Thêm sản phẩm</div>
						<div class="panel-body">
							<form method="post" enctype="multipart/form-data">
								<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								<div class="row" style="margin-bottom:40px">
									<div class="col-xs-8">
										<div class="form-group" >
											<label>Tên sản phẩm</label>
											<input type="text" name="name" class="form-control">
										</div>
										<div class="form-group" >
											<label>Giá sản phẩm</label>
											<input type="number" name="price" class="form-control">
										</div>
										<div class="form-group" >
											<label>Ảnh sản phẩm</label>
											<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
						                    <img id="avatar" class="thumbnail" width="300px" src="assets/images/new_seo-10-512.png">
										</div>
										<div class="form-group" >
											<label>Phụ kiện</label>
											<input type="text" name="accessories" class="form-control">
										</div>
										<div class="form-group" >
											<label>Bảo hành</label>
											<input type="text" name="warranty" class="form-control">
										</div>
										<div class="form-group" >
											<label>Khuyến mãi</label>
											<input type="text" name="promotion" class="form-control">
										</div>
										<div class="form-group" >
											<label>Tình trạng</label>
											<input type="text" name="condition" class="form-control">
										</div>
										<div class="form-group" >
											<label>Trạng thái</label>
											<select name="status" class="form-control">
												<option value="1">Còn hàng</option>
												<option value="0">Hết hàng</option>
						                    </select>
										</div>
										<div class="form-group" >
											<label>Miêu tả</label>
											<textarea name="description" class="ckeditor"></textarea>
										</div>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('description',{
												language:'en',
												filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
										<div class="form-group" >
											<label>Danh mục</label>
											<select name="cate" class="form-control">
												<?php $__currentLoopData = $cate_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($cate->id); ?>"><?php echo e($cate->cate_name); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
										<div class="form-group" >
											<label>Sản phẩm nổi bật</label><br>
											Có: <input type="radio" name="featured" value="1">
											Không: <input type="radio" checked name="featured" value="0">
										</div>
										<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
										<a href="#" class="btn btn-danger">Hủy bỏ</a>
									</div>
								</div>
								<?php echo e(csrf_field()); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>