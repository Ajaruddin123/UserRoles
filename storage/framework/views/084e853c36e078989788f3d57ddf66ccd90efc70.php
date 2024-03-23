<?php if (isset($component)) { $__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002 = $component; } ?>
<?php $component = App\View\Components\OuterLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('outer-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\OuterLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                        
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="<?php echo e(asset('images/couch.png')); ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                
                <?php $__empty_1 = true; $__currentLoopData = isset($books)?$books :[]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>  
                        <?php
                            if (isset(auth()->user()->id)) {
                               $userId = auth()->user()->id;
                            } else {
                                $userId = '';
                            }
                            
                            $bookId = DB::table('book_store_order')->where(['user_id'=>$userId,'book_store_id'=>$item->id])->value('book_store_id');
                            if (!empty($bookId)) {
                                $genres = DB::table('book_stores')->where('id',$bookId)->value('genre');
                                Session::put('genre',$genres);
                                $genre[] =  Session::get('genre');
                                $genre =  array_unique($genre);
                            } else {
                                $genre[] = Session::get('genre');
                                $genre =  array_unique($genre);
                            }
                            
                          
                            // print_r($genre);
                        ?>                  
                    <!-- Start Column 2 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5 p-3 mb-md-0">
                        <a class="product-item" href="<?php echo e(route('add.to.cart',$item->id)); ?>" data-id="<?php echo e($item->id); ?>">
                            <img src="<?php echo e(asset($item->image_url)); ?>" class="img-fluid product-thumbnail">
                            <h3 class="product-title">Title  : <?php echo e($item->title); ?></h3>
                            <h3 class="product-title">Author : <?php echo e($item->author); ?></h3>
                            <h3 class="product-title">Genre  : <?php echo e($item->genre); ?></h3>
                            <?php if(in_array($item->genre,$genre)): ?>                                
                                <h3 class="product-title" style="background-color: brown;">Recomended</h3>
                            <?php endif; ?>
                            <strong class="product-price">₹<?php echo e($item->price); ?></strong>

                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                    <!-- End Column 2 -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 col-md-8 col-lg-8 mb-5 mb-md-0 text-center">
                       <h3>No Product found</h3>
                    </div>
                <?php endif; ?>
                
            

            </div>
        </div>
    </div>
    <!-- End Product Section -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002)): ?>
<?php $component = $__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002; ?>
<?php unset($__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002); ?>
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\user_roles\resources\views/welcome.blade.php ENDPATH**/ ?>