<?php $__env->startSection('container'); ?>
    <div class="content container mt-5 mb-5">
        <form action="/request-update-profile" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <h3> <?php echo e(__('Your Profile')); ?> </h3>
            <div class="row mb-3">
                <div class="col-4 d-flex justify-content-center mt-3">
                    <img class="profile-img" src="<?php echo e(URL::asset(auth()->user()->display_picture_link)); ?>" alt="" width="300px" height="300px">
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label for="first_name" class="form-label"> <?php echo e(__('First Name')); ?></label>
                        <input type="text" name="first_name" id="first_name" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="type here" autofocus value="<?php echo e(auth()->user()->first_name); ?>" required>
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
unset($__errorArgs, $__bag); ?>" placeholder="type here" value="<?php echo e(auth()->user()->last_name); ?>" required>
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
                                <?php if(auth()->user()->gender_id === 1): ?>
                                    <input class="form-check-input" type="radio" name="gender_id" id="gender_male" value="male" checked>
                                <?php else: ?>
                                    <input class="form-check-input" type="radio" name="gender_id" id="gender_male" value="male">
                                <?php endif; ?>
                            </div>
                            <div class="form-check ms-5">
                                <label for="gender_female" class="form-check-label"> <?php echo e(__('Female')); ?> </label>
                                <?php if(auth()->user()->gender_id === 2): ?>
                                <input class="form-check-input" type="radio" name="gender_id" id="gender_female" value="female" checked>    
                                <?php else: ?>
                                    <input class="form-check-input" type="radio" name="gender_id" id="gender_female" value="female">    
                                <?php endif; ?>
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
                        <input type="password" class="form-control" name="password" id="password" placeholder="input new password here" required>
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
                <div class="col-4">
                    <div class="mb-4">
                        <label for="middle_name" class="form-label"> <?php echo e(__('Middle Name')); ?> </label>
                        <input type="text" name="middle_name" class="form-control <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="type here" value="<?php echo e(auth()->user()->middle_name); ?>">
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
unset($__errorArgs, $__bag); ?>" placeholder="example@mail.com" value="<?php echo e(auth()->user()->email); ?>" required>
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
                        <fieldset disabled>
                            <label id="role_selected" class="form-label"> <?php echo e(__('Role')); ?> </label>
                            <select id="role_selected" class="form-control form-select">
                                <?php if(auth()->user()->role_id === 1): ?>
                                    <option value="1" selected> <?php echo e(__('Admin')); ?> </option>
                                <?php else: ?>
                                    <option value="2" selected> <?php echo e(__('User')); ?> </option>
                                <?php endif; ?>
                            </select>
                        </fieldset>
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
                <button type="submit" class="btn btn-submit btn-dark"> <?php echo e(__('Save')); ?> </button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\Amazing E-Book\resources\views/userprofilepage.blade.php ENDPATH**/ ?>