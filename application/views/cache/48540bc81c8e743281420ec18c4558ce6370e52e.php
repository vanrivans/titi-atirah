<?php $__env->startSection('header'); ?>
	
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
<div class="layout">
    
    <?php echo $__env->make('Home.views.partial_detail.firstview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('Home.views.partial_detail.about-us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('Home.views.partial_detail.our-product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('Home.views.partial_detail.privision', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('Home.views.partial_detail.gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="location">
        <div class="location__box">
            <div class="row">
                <div class="col-12">
                    <h2 class="title__menu">Location</h2>
                    <?php echo $__env->make('Layouts.icons.line-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <p>Our Team is prepared and ready to start working with you. Our commitment is to complete your request in efficient manner. You can contact us to get detail information not only about provision but also other things such as fuel or maritime training.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="maps"></div>
                </div>
            </div>
        </div>
    </section>

</div>
	
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready( function() {
            $('.gallery__box').slick({
                // lazyLoad: 'ondemand',
                // dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\titi-atirah\application\modules/Home/views/index.blade.php ENDPATH**/ ?>