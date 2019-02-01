<?php $__env->startSection('title','Trang chủ'); ?>
<?php $__env->startSection('main'); ?>
<div id="wrap-inner">
	<div class="products">
		<h3>sản phẩm nổi bật</h3>
		<div class="product-list row">
			<?php $__currentLoopData = $product_featured_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="<?php echo e(url('storage/upload/'.$product_featured->image)); ?>" class="img-thumbnail"></a>
				<p><a href="#"><?php echo e($product_featured->name); ?></a></p>
				<p class="price"><?php echo e(number_format($product_featured->price,0,',','.')); ?> VNĐ</p>	  
				<div class="marsk">
					<a href="<?php echo e(asset('sanpham/'.$product_featured->prod_id.'/'.$product_featured->slug)); ?>">Xem chi tiết</a>
				</div>                                    
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>								
		</div>                	                	
	</div>

	<div class="products">
		<h3>sản phẩm mới</h3>
		<div class="product-list row">
			<?php $__currentLoopData = $product_new_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="<?php echo e(url('storage/upload/'.$product->image)); ?>" class="img-thumbnail"></a>
				<p><a href="#"><?php echo e($product->name); ?></a></p>
				<p class="price"><?php echo e(number_format($product->price,0,',','.')); ?> VND</p>	  
				<div class="marsk">
					<a href="<?php echo e(asset('sanpham/'.$product->prod_id.'/'.$product->slug)); ?>">Xem chi tiết</a>
				</div>                      	                        
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>    
	</div>
</div>
<?php $__env->stopSection(); ?>					

<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>