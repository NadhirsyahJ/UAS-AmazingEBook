<?php $__env->startSection('container'); ?>
<div class="container content my-5 px-5">
    <h2 class="text-center mb-5"> <?php echo e(__('E-Book Cart')); ?> </h2>
    <?php if(count($listEbook) !== 0): ?>
        <table class="table table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"> <?php echo e(__('Title')); ?> </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listEbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($item->ebook->title); ?> </td>
                        <td> 
                            <form action="/deleteitem" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="item" id="item" value="<?php echo e($item->order_id); ?>">
                                <button type="submit" class="btn btn-danger px-5" > <?php echo e(__('Delete')); ?></button>
                            </form>
                        </td>
                    </tr>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <form action="/submitorder" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-warning px-5" > <?php echo e(__('Submit')); ?></button>
        </form>
    <?php else: ?>
        <h5 class="text-center my-5"> <?php echo e(__('Your Cart Is Empty!')); ?> </h5>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\AmazingE-Book\resources\views/cartpage.blade.php ENDPATH**/ ?>