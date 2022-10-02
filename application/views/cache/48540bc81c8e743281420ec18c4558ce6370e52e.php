<?php $__env->startSection('header'); ?>
	
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
<div class="layout">
    
	<section class="firstview">
		<div class="firstview__box">
            <h1>We are delivering fresh provisions to ships</h1>
            <h3>Our provision comes together with "always fresh and in a high quality" provisions/food, and it will be delivered to your place promptly without takes long transport time</h3>
            <a href="contact-us" target="_self" class="common-button">
                Contact Us
            </a>
		</div>
    </section>

    <?php echo $__env->make('Home.views.partial_detail.about-us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('Home.views.partial_detail.our-product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
	
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\titi-atirah\application\modules/Home/views/index.blade.php ENDPATH**/ ?>