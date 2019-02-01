<?php $__env->startSection('title','Chi tiết'); ?>
<?php $__env->startSection('main'); ?>
<div id="wrap-inner">
	<div id="product-info">
		<div class="clearfix"></div>
		<h3><?php echo e($item->name); ?></h3>
		<div class="row">
			<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
				<img width="200px" src="<?php echo e(url('storage/upload/'.$item->image)); ?>">
			</div>
			<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
				<p>Giá: <span class="price"><?php echo e(number_format($item->price,0,',','.')); ?> VNĐ</span></p>
				<p>Bảo hành: <?php echo e($item->warranty); ?></p> 
				<p>Phụ kiện: <?php echo e($item->accessories); ?></p>
				<p>Tình trạng: <?php echo e($item->condition); ?></p>
				<p>Khuyến mại: <?php echo e($item->promotion); ?></p>
				<p>Lưu trữ: <?php if($item->status == 1): ?> Còn hàng <?php else: ?> Hết hàng <?php endif; ?></p>
				<p class="add-cart text-center"><a href="<?php echo e(asset('cart/add/'.$item->prod_id)); ?>">Đặt hàng online</a></p>
			</div>
		</div>							
	</div>
	<div id="product-detail">
		<h3>Chi tiết sản phẩm</h3>
		<p class="text-justify"><?php echo $item->description; ?></p>
	</div>
	<div id="comment">
		<h3>Bình luận</h3>
		<div class="col-md-9 comment">
			<form method="post">
				<div class="form-group">
					<label for="email">Email:</label>
					<input required type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="name">Tên:</label>
					<input required type="text" class="form-control" id="name" name="username">
				</div>
				<div class="form-group">
					<label for="cm">Bình luận:</label>
					<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-default">Gửi</button>
				</div>
				<?php echo e(csrf_field()); ?>

			</form>
		</div>
	</div>
	<div id="comment-list">
		<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<ul>
			<li class="com-title">
				<?php echo e($comment->username); ?>

				<br>
				<span><?php echo e(date('d/m/Y H:i', strtotime($comment->created_at))); ?></span>	
			</li>
			<li class="com-details">
				<?php echo e($comment->content); ?>

			</li>
		</ul>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>					
<!-- end main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>