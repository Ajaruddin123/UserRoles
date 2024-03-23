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
								<h1>Checkout</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
   
		<div class="untree_co-section">
		    <div class="container">
		      
              <form action="<?php echo e(route('order')); ?>" method="post" enctype="application/x-www-form-urlencoded">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Billing Details</h2>
                    <div class="p-3 p-lg-5 border bg-white">
                        
                        <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_fname" value="<?php echo e($user->name); ?>" name="c_fname" readonly>
                        </div>
                        
                        </div>

                        

                        <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_address" value="<?php echo e($user->address); ?>" name="c_address" placeholder="Street address" required>
                        </div>
                        </div>

                        

                        <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_city" class="text-black"> City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_city" value="<?php echo e($user->city); ?>" name="c_city" required>
                        </div>
                        <div class="col-md-6">
                            <label for="c_state_country" class="text-black"> Country <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_country" value="<?php echo e($user->country); ?>" name="c_country" required>
                        </div>
                        <div class="col-md-6">
                            <label for="c_state_country" class="text-black">State  <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_state_country" value="<?php echo e($user->state); ?>" name="c_state_country" required>
                        </div>
                        <div class="col-md-6">
                            <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_postal_zip" value="<?php echo e($user->zip); ?>" name="c_postal_zip" required>
                        </div>
                        </div>

                        <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_email_address" value="<?php echo e($user->email); ?>" name="c_email_address" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_phone"  value = "<?php echo e($user->phone); ?>" name="c_phone" placeholder="Phone Number" required>
                        </div>
                        </div>

                        


                        <div class="form-group">
                        
                        <div class="collapse" id="ship_different_address">
                            <div class="py-2">

                            


                            <div class="form-group row">
                                <div class="col-md-12">
                                <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_diff_fname" value="<?php echo e($user->name); ?>" name="c_diff_fname">
                                </div>
                                
                            </div>

                            

                            <div class="form-group row  mb-3">
                                <div class="col-md-12">
                                <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_diff_address" value="<?php echo e($user->adress); ?>" name="c_diff_address" placeholder="Street address">
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <div class="col-md-6">
                                <label for="c_diff_state_country" class="text-black">Country <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_diff_state_country" value= "<?php echo e($user->country); ?>" name="c_diff_state_country">
                                </div>
                            
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                <label for="c_diff_state_country" class="text-black">State <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_diff_state_country" value="<?php echo e($user->state); ?>" name="c_diff_state_country">
                                </div>
                                <div class="col-md-6">
                                <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_diff_postal_zip" value="<?php echo e($user->zip); ?>" name="c_diff_postal_zip">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <div class="col-md-6">
                                <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_diff_email_address" value="<?php echo e($user->zip); ?>" name="c_diff_email_address">
                                </div>
                                <div class="col-md-6">
                                <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" value="<?php echo e($user->phone); ?>" placeholder="Phone Number">
                                </div>
                            </div>

                            </div>

                        </div>
                        </div>

                        

                    </div>
                    </div>
                    <div class="col-md-6">

                    

                    <div class="row mb-5">
                        <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Your Order</h2>
                        <div class="p-3 p-lg-5 border bg-white">
                            <table class="table site-block-order-table mb-5">
                            <thead>
                                <th>Product</th>
                                <th>Total</th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $books = DB::table('book_stores')->where('id',$item->book_store_id)->get();
                                        // $books = $item->books;
                                    ?>
                                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($book->title); ?> <strong class="mx-2">x</strong> <?php echo e($item->quantity); ?></td>
                                        <?php
                                            $total = $book->price * $item->quantity;
                                            $priceTotal[]=$total;
                                        ?>
                                        <td>₹<?php echo e($book->price * $item->quantity); ?></td>
                                    </tr>
                                    <input type="hidden" name="price[]" value="<?php echo e($book->price); ?>">
                                    <input type="hidden" name="quantity[]" value="<?php echo e($item->quantity); ?>">
                                    <input type="hidden" name="total[]" value="<?php echo e($book->price * $item->quantity); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <tr>
                                <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                <td class="text-black font-weight-bold"><strong><?php if(isset($priceTotal)): ?>
                                    ₹<?php echo e(array_sum($priceTotal)); ?>

                                    <input type="hidden" name="grand_total" value="<?php echo e(array_sum($priceTotal)); ?>">
                                <?php else: ?>
                                    ₹0
                                <?php endif; ?></strong></td>
                                </tr>
                            </tbody>
                            </table>

                            <div class="border p-3 mb-3">
                            <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">COD</a></h3>

                            <div class="collapse" id="collapsebank">
                                <div class="py-2">
                                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                            </div>
                            </div>

                            

                            

                            <div class="form-group">
                            <button type="submit" class="btn btn-black btn-lg py-3 btn-block" >Place Order</button>
                            </div>

                        </div>
                        </div>
                    </div>

                    </div>
                </div>
		       </form>
		    </div>
		</div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002)): ?>
<?php $component = $__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002; ?>
<?php unset($__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002); ?>
<?php endif; ?><?php /**PATH C:\laravel_projects\booksstore\resources\views/checkout.blade.php ENDPATH**/ ?>