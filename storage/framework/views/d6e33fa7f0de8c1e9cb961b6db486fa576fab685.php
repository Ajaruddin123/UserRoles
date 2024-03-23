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


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('admin_css/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo e(asset('admin_css/css/metisMenu.min.css')); ?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo e(asset('admin_css/css/timeline.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('admin_css/css/startmin.css')); ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo e(asset('admin_css/css/morris.css')); ?>" rel="stylesheet">

    <link rel="icon" href="<?php echo e(asset('images/Favicon16x16.png')); ?>" type="image/x-icon">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <!-- Custom Fonts -->
    <link href="<?php echo e(asset('admin_css/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="<?php echo e(asset('admin_css/css/dataTables/dataTables.bootstrap.css')); ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo e(asset('admin_css/css/dataTables/dataTables.responsive.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('resources/css/app.css')); ?>">
    <script src="<?php echo e(asset('resources/js/app.js')); ?>"></script>
    <!-- Scripts -->

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <?php echo $__env->make('layouts.company-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page Heading -->
        <?php if(isset($header)): ?>
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <?php echo e($header); ?>

                </div>
            </header>
        <?php endif; ?>

        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>
    <!-- jQuery -->
    <script src="<?php echo e(asset('admin_css/js/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(asset('admin_css/js/bootstrap.min.js')); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo e(asset('admin_css/js/metisMenu.min.js')); ?>"></script>

    <!-- moment JavaScript -->
    <script src="<?php echo e(asset('admin_css/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_css/js/dataTables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_css/js/dataTables/dataTables.bootstrap.min.js')); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
     <script src="<?php echo e(asset('js/blankOrg/orgchart.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\laravel_projects\booksstore\resources\views/layouts/app.blade.php ENDPATH**/ ?>