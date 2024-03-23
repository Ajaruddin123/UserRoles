<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Book</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="panel-heading">
                        View Book
                    </div>
                    <!-- Validation Errors -->
                    

                    <?php if($message = Session::get('success')): ?>

                    <div class="" style="margin: 10px"></div>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                       
                    <?php endif; ?>
                    <div class="panel-body">
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class="img">
                                    <img src="<?php echo e($book->image_url); ?>" alt="" srcset="">
                                </div>
                                <div class="title col-md-12">
                                    <h3>Title  : <?php echo e($book->title); ?></h3>
                                    <h3>Author : <?php echo e($book->author); ?></h3>
                                    <h3>Genre  : <?php echo e($book->genre); ?></h3>
                                    <h3>Price  : <?php echo e($book->price); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\laravel_projects\booksstore\resources\views/admin_view/show-book.blade.php ENDPATH**/ ?>