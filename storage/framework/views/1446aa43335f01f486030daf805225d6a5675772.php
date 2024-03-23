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
								<h1>Cart</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
            <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">
                <table>
                    <thead>
                        <th>
                            SL.NO
                        </th>
                        <th>
                            Full Name
                        </th>
                        <th>
                            Roles
                        </th>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                        ?>
                        <?php $__empty_1 = true; $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                               <td>
                                <?php echo e($i++); ?>

                                </td> 
                                <td>
                                    
                                    <?php echo e($item->name); ?>

                                </td>
                                <td>
                                    <ul>
                                    <?php $__empty_2 = true; $__currentLoopData = $item->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                        <li>
                                            <?php echo e($r->role); ?>

                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    
                                    <?php endif; ?>
                                    </ul>
                                    
                                </td>
                            </tr>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002)): ?>
<?php $component = $__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002; ?>
<?php unset($__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002); ?>
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\user_roles\resources\views/all-users.blade.php ENDPATH**/ ?>