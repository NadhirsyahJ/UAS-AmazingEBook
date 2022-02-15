<?php $__env->startSection('container'); ?>
    <div class="content container mt-5 mb-5" style="background-image:images/background/background2.jpg">
        <form action="/request-register" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <h3 class="mb-5"> <?php echo e(__('Sign Up')); ?> </h3>
            <div class="row mb-3">
                <div class="col">
                    <div class="mb-4">
                        <label for="first_name" class="form-label"> <?php echo e(__('First Name')); ?></label>
                        <input type="text" name="first_name" id="first_name" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('type here')); ?>" autofocus value="<?php echo e(old('first_name')); ?>" required>
                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block text-start">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="form-label"> <?php echo e(__('Last Name')); ?> </label>
                        <input type="text" name="last_name" id="last_name" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('type here')); ?>" value="<?php echo e(old('last_name')); ?>" required>
                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block text-start">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <p class="form-label"> <?php echo e(__('Gender')); ?> </p>
                        <div class="d-flex">
                            <div class="form-check">
                                <label for="gender_male" class="form-check-label"> <?php echo e(__('Male')); ?> </label>
                                <input class="form-check-input" type="radio" name="gender_id" id="gender_male" value="male">
                            </div>
                            <div class="form-check ms-5">
                                <label for="gender_female" class="form-check-label"> <?php echo e(__('Female')); ?> </label>
                                <input class="form-check-input" type="radio" name="gender_id" id="gender_female" value="female">
                            </div>
                        </div>
                        <?php $__errorArgs = ['gender_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block text-start">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label"> <?php echo e(__('Password')); ?> </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="<?php echo e(__('type here')); ?>" required>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block text-start">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-4">
                        <label for="middle_name" class="form-label"> <?php echo e(__('Middle Name')); ?> </label>
                        <input type="text" name="middle_name" class="form-control <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('type here')); ?>" value="<?php echo e(old('middle_name')); ?>">
                        <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block text-start">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label"> <?php echo e(__('Email Address')); ?> </label>
                        <input type="email" name="email" id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('example@mail.com')); ?>" value="<?php echo e(old('email')); ?>" required>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block text-start">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="role_id" class="form-label"> <?php echo e(__('Role')); ?> </label>
                        <select name="role_id" id="role_id" class="form-control form-select <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <option selected> <?php echo e(__('Choose Role')); ?> </option>
                            <option value="1"> <?php echo e(__('Admin')); ?> </option>
                            <option value="2"> <?php echo e(__('User')); ?> </option>
                        </select>
                        <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block text-start">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label for="display_picture_link" class="form-label"> <?php echo e(__('Display Picture')); ?> </label>
                        <input type="file" class="form-control form-control-sm" id="display_picture_link" name="display_picture_link">
                        <?php $__errorArgs = ['display_picture_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback d-block text-start">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-submit btn-light"> <?php echo e(__('Submit')); ?> </button>
            </div>
            <div class="text-center mt-5">
                <a href="/login"> <?php echo e(__('Already have an account? click here to log in')); ?> </a>
            </div>
        </form>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\AmazingE-Book\resources\views/registerpage.blade.php ENDPATH**/ ?>