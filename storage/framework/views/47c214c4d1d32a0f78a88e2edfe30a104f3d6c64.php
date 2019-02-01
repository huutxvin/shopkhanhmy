<?php $__env->startSection('title','Tìm kiếm'); ?>
<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href="assets/css/search.css">
<div id="wrap-inner">
	<div class="products">
		<h3>Tìm kiếm với từ khóa: <span><?php echo e($key_word); ?></span></h3>
		<div class="product-list row">
			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="<?php echo e(url('storage/upload/'.$item->image)); ?>" class="img-thumbnail"></a>
					<p><a href="#"><?php echo e($item->name); ?></a></p>
					<p class="price"><?php echo e(number_format($item->price,0,',','.')); ?> VND</p>	  
					<div class="marsk">
						<a href="<?php echo e(asset('sanpham/'.$item->prod_id.'/'.$item->slug)); ?>">Xem chi tiết</a>
					</div>                      	                        
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>                	                	
	</div>
	<?php echo e($items->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>