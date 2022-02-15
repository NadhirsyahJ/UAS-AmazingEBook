<?php $__env->startSection('container'); ?>
<div class="container content my-5 px-5">
    <form action="/request-update-role" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col">
                <h3 class="mb-5"> <?php echo e($user->first_name); ?> <?php echo e($user->middle_name); ?> <?php echo e($user->last_name); ?> </h3>
                <div class="mb-4">
                    <label for="id_role" class="form-label"> <?php echo e(__('Role')); ?> </label>
                    <select name="id_role" id="id_role" class="form-control form-select">
                        <?php if($user->role_id === 1): ?>
                            <option value="1" selected> <?php echo e(__('Admin')); ?> </option>
                            <option value="2"> <?php echo e(__('User')); ?> </option>
                        <?php else: ?>
                            <option value="1"> <?php echo e(__('Admin')); ?> </option>
                            <option value="2" selected> <?php echo e(__('User')); ?> </option>
                        <?php endif; ?>
                    </select>
                </div>
                <input type="hidden" name="id_account" value="<?php echo e($user->account_id); ?>">
                <button type="submit" class="btn btn-warning mt-5"> <?php echo e(__('Save')); ?> </button>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\AmazingE-Book\resources\views/roleupdates.blade.php ENDPATH**/ ?>