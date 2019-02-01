
<?php $__env->startSection('master'); ?>
<?php $__env->startSection('title', 'Sửa danh mục sản phẩm'); ?>
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
							<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							<form method="post">
								<div class="form-group">
									<label>Tên danh mục:</label>
									<input type="text" name="name" class="form-control" value="<?php echo e($cate->name); ?>" placeholder="Tên danh mục...">
								</div>
								<div class="form-group">
									<input type="submit" name="btn_editcate" value="Sửa" class="btn btn-success">
									<a href="<?php echo e(asset('admin/danhmuc')); ?>" class="btn btn-danger">Hủy</a>
								</div>
								<?php echo e(csrf_field()); ?>

							</form>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/.row-->
</div>	
<!--/.main-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>