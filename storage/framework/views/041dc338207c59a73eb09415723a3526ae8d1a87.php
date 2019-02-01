<?php $__env->startSection('title','Danh mục'); ?>
<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href="assets/css/category.css">
<div id="wrap-inner">
	<div class="products">
		<h3><?php echo e($cate_name->cate_name); ?></h3>
		<div class="product-list row">
			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod_byCate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="<?php echo e(url('storage/upload/'.$prod_byCate->image)); ?>" class="img-thumbnail"></a>
				<p><a href="#"><?php echo e($prod_byCate->name); ?></a></p>
				<p class="price"><?php echo e(number_format($prod_byCate->price,0,',','.')); ?> VNĐ</p>	  
				<div class="marsk">
					<a href="<?php echo e(asset('sanpham/'.$prod_byCate->prod_id.'/'.$prod_byCate->slug)); ?>">Xem chi tiết</a>
				</div>                                    
			</div> 
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>              	                	
	</div>

	
	<?php echo e($items->links()); ?> 
</div>					
<!-- end main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>