<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?php echo e(URL::asset('/css/style.css')); ?>" rel="stylesheet" >
</head>
<body>
    
    <header class="header-section">
        <?php if(auth()->guard()->check()): ?>
            <div class="row bg-dark text-white py-2">
                <div class="col text-center mt-2">
                    <?php if($current_locale === 'en'): ?>
                        <a class="btn btn-light btn-sm" href="language/en"> English </a>
                        <a class="btn btn-secondary btn-sm" href="language/id"> Indonesia </a>
                    <?php else: ?>
                        <a class="btn btn-secondary btn-sm" href="language/en"> English </a>
                        <a class="btn btn-light btn-sm" href="language/id"> Indonesia </a>
                    <?php endif; ?>
                </div>

                <h1 class="col text-center">Amazing E-Book</h1>
                
                <div class="col text-center mt-2">
                    <form action="/logout" method="post">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-light"><?php echo e(__('Log Out')); ?></button>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-center bg-white navbar-home align-items-center py-1">
                <a href="/" class="me-5 custom-a-link text-decoration-none"><?php echo e(__('Home')); ?></a>
                <a href="/cart" class="me-5 custom-a-link text-decoration-none"><?php echo e(__('Cart')); ?></b>
                <a href="/profile" class="me-5 custom-a-link text-decoration-none"><?php echo e(__('Profile')); ?></a>
                <?php if(auth()->user()->role_id === 1): ?>
                    
                    <a href="/maintenance-account" class="me-3 custom-a-link text-decoration-none"><?php echo e(__('Account Maintenance')); ?></a>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="row py-4 bg-dark text-white">
                <div class="col text-center mt-2">
                    <?php if($current_locale === 'en'): ?>
                        <a class="btn btn-light btn-sm" href="language/en"> English </a>
                        <a class="btn btn-secondary btn-sm" href="language/id"> Indonesia </a>
                    <?php else: ?>
                        <a class="btn btn-secondary btn-sm" href="language/en"> English </a>
                        <a class="btn btn-light btn-sm" href="language/id"> Indonesia </a>
                    <?php endif; ?>    
                </div> 

                <h1 class="col text-center"> Amazing E-Book </h1>
                
                <div class="col text-center mt-2">
                    <a href="/signup"><button type="button" class="btn btn-secondary text-white"> <?php echo e(__('Sign Up')); ?> </button></a>
                    <a href="/login"><button type="button" class="btn btn-secondary text-white"> <?php echo e(__('Log In')); ?> </button></a>
                </div>
            </div>
        <?php endif; ?>
    </header>

    
    <div class="layout-section">
        <?php echo $__env->yieldContent('container'); ?>
    </div>

    
    <footer>
        <h6 class="footer-section text-lg-center bg-dark text-white">
            © Amazing E-Book 2022
        </h6>
    </footer>
</body>
</html><?php /**PATH C:\Users\Cakbomb\Desktop\SMT 5\1 FINAL EXAM\WP\AmazingE-Book\resources\views/masterlayout.blade.php ENDPATH**/ ?>