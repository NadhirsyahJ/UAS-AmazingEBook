<?php $__env->startSection('container'); ?>
<div class="container content my-5 px-5">
    <h2 class="text-center mb-5"> <?php echo e(__('Account Maintenance')); ?> </h2>
        <table class="table table-light">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col"> <?php echo e(__('Account')); ?> </th>
                    <th class="text-center" scope="col" colspan="2"> <?php echo e(__('Action')); ?> </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listAccount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                        <td> <?php echo e($item->first_name); ?> <?php echo e($item->middle_name); ?> <?php echo e($item->last_name); ?>-<?php echo e(__($item->role->role_desc)); ?></td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-success px-5 me-5" href="/role-updates/<?php echo e($item->account_id); ?>"> <?php echo e(__('Update')); ?> </a> 
                            <form action="/deleteaccount" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="item" id="item" value="<?php echo e($item->account_id); ?>">
                                <button type="submit" class="btn btn-danger px-5" > <?php echo e(__('Delete')); ?></button>
                            </form>
                        </td>
                    </tr>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\Amazing E-Book\resources\views/accountmaintanance.blade.php ENDPATH**/ ?>