<?php $__env->startSection('container'); ?>
    <style>
        #bg-img{
            height: 50rem;
            background-size: cover;
            background-image: url(<?php echo e(URL::asset('images/background/background1.jpg')); ?>);
        }
    </style>

    <div id="bg-img" class="d-flex flex-column align-items-center justify-content-center text-center h-10">
        <h2 class="title-center text-light mb-5"> <?php echo e(__($resulttitle)); ?> </h2>
        <h5 class="btn btn-dark py-1 px-5"> <a href="/"> <?php echo e(__('Click here to "Home"')); ?> </a></h5>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\AmazingE-Book\resources\views/displayresultpage.blade.php ENDPATH**/ ?>