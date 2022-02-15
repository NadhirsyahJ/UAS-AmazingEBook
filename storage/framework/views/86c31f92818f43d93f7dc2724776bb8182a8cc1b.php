<?php $__env->startSection('container'); ?>
    <?php if(session()->has('signup-success')): ?>
        <div class="container justify-content-center mt-3 mb-3 d-flex">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('signup-success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>

    <?php if(session()->has('login-fail')): ?>
        <div class="container justify-content-center mt-3 mb-3 d-flex">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session('login-fail')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>

    <div class="content container py-5 my-5">
        <form action="/request-login" method="POST">
            <?php echo csrf_field(); ?> 
            <h3 class="px-5 mb-5"> <?php echo e(__('Log In')); ?> </h3>
            <div class="mb-3 px-5">
                <label for="email" class="form-label"> <?php echo e(__('Email Address')); ?></label>
                <input type="email" name="email" id="email" placeholder="<?php echo e(__('example@mail.com')); ?>" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autofocus required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3 px-5">
                <label for="password" class="form-label"> <?php echo e(__('Password')); ?></label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-5 px-5">
                <button type="submit" class="btn btn-light"> <?php echo e(__('Submit')); ?> </button>
            </div>
            <div class="mb-3 px-5">
                <a href="/signup"> <?php echo e(__('Don\'t have an account? click here to sign up')); ?> </a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\AmazingE-Book\resources\views/loginpage.blade.php ENDPATH**/ ?>