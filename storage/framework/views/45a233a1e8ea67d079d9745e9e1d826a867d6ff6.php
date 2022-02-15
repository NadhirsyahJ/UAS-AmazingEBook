<?php $__env->startSection('container'); ?>
    <?php if(session()->has('success-rent')): ?>
    <div class="container justify-content-center mt-3 mb-3 d-flex">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success-rent')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <?php endif; ?>

    <div class="container content my-5 px-5">
        <h2 class="text-center mb-5"> <?php echo e(__('E-Book Detail')); ?> </h2>

        <div class="row mb-5">
            <div class="col-3">
                <?php echo e(__('Title')); ?>

            </div>
            <div class="col-9">
                <?php echo e($bookdetail->title); ?>

            </div>
        </div>
        <div class="row mb-5">
            <div class="col-3">
                <?php echo e(__('Author')); ?>

            </div>
            <div class="col-9">
                <?php echo e($bookdetail->author); ?>

            </div>
        </div>
        <div class="row mb-5">
            <div class="col-3">
                <?php echo e(__('Description')); ?>

            </div>
            <div class="col-9">
                <?php echo e($bookdetail->description); ?>

            </div>
        </div>

        <form class="text-center" action="/request-rent" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="item" id="item" value="<?php echo e($bookdetail->ebook_id); ?>">
            <button type="submit" class="btn btn-dark px-5" > <?php echo e(__('Rent')); ?></button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\AmazingE-Book\resources\views/bookdetailpage.blade.php ENDPATH**/ ?>