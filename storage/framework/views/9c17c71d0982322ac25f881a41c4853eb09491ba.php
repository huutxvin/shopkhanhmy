<?php $__env->startSection('master'); ?>
<?php $__env->startSection('title','Danh mục sản phẩm'); ?>
<div class="container">
	<div class="site-app">
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<div class="page-header">
					<h4 class="page-title">Danh mục sản phẩm</h4>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-xs-12 col-md-5 col-lg-5">
						<div class="panel panel-primary">
							<div class="panel-heading">
								Thêm danh mục
							</div>
							<div class="panel-body">
								<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								<form action="" method="post">
									<div class="form-group">										
										<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
									</div>
									<div class="form-group">
										<input type="submit" name="btn_submit" value="Thêm mới" class="form-control btn btn-primary">
									</div>
									<?php echo e(csrf_field()); ?>

								</form>							
							</div>
						</div>
				</div>
				<div class="col-xs-12 col-md-7 col-lg-7">
					<div class="panel panel-primary">
						<div class="panel-heading">Danh sách danh mục</div>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Tên danh mục</th>
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		<?php $__currentLoopData = $catelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($cate->cate_name); ?></td>
											<td>
					                    		<a href="<?php echo e(asset('admin/danhmuc/edit/'.$cate->cate_id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Sửa</a>
					                    		<a href="<?php echo e(asset('admin/danhmuc/delete/'.$cate->cate_id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Xóa</a>
					                  		</td>
					                  	</tr>
				                  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				                  	
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	</div>
	<!--/.main-->
</div>		
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>