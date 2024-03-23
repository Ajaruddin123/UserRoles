<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
		<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="<?php echo e(asset('css/tiny-slider.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

        
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <!-- Scripts -->
        <script src="<?php echo e(asset('resources/js/app.js')); ?>"></script>
     
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <?php echo $__env->make('layouts.outernav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Start Hero Section -->
                <div class="hero">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="intro-excerpt">
                                    <?php if(request()->routeIs('register')): ?>
                                        <h1>Register</h1>                                        
                                    <?php endif; ?>
                                    <?php if(request()->routeIs('login')): ?>
                                        <h1>Login</h1>                                        
                                    <?php endif; ?>
                                    <?php if(request()->routeIs('forgot.password')): ?>
                                        <h1>Forgot Password</h1>                                        
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <!-- End Hero Section -->
       
            <div class="untree_co-section">
                

                <div class="container">
                    <div class="block">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-8 pb-4">
                                <?php echo e($slot); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\laravel_projects\booksstore\resources\views/layouts/guest.blade.php ENDPATH**/ ?>