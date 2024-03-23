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
        
		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <?php
                            $books = DB::table('book_stores')->where('id',$item->book_store_id)->get();
                            // $books = $item->books;
                        ?> 
                            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                
                                <tr id="remove_tr_<?php echo e($item->cart_id); ?>" class="tr_r">
                                    <td class="product-thumbnail">
                                        <img src="<?php echo e($book->image_url); ?>" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black"><?php echo e($book->title); ?></h2>
                                    </td>
                                    <td>₹<?php echo e($book->price); ?></td>
                                    <td>
                                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                        </div>
                                        <input type="text" class="form-control text-center quantity-amount" id="cartQuant-<?php echo e($item->cart_id); ?>" value="<?php echo e($item->quantity); ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                        </div>
                                        <div class="p-3">

                                            <button type="button" class="btn-info btn-sm updateQnt" data-up-id="<?php echo e($item->cart_id); ?>">update</button>
                                        </div>
                                        </div>
                    
                                    </td>
                                    <?php
                                        $total = $book->price * $item->quantity;
                                        $priceTotal[]=$total;
                                    ?>
                                    <td>₹<?php echo e($book->price * $item->quantity); ?></td>
                                    <td><a href="javascript:void(0)" class="btn btn-black btn-sm btn-remove" data-cart-id="<?php echo e($item->cart_id); ?>">X</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                        
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    
                    <div class="col-md-6">
                      <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-black btn-sm btn-block">Continue Shopping</a>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">
                            <?php if(isset($priceTotal)): ?>
                                ₹<?php echo e(array_sum($priceTotal)); ?>

                            <?php else: ?>
                                ₹0
                            <?php endif; ?>
                                 
                          </strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='<?php echo e(route('checkout')); ?>'">Proceed To Checkout</button>
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
<?php if (isset($__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002)): ?>
<?php $component = $__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002; ?>
<?php unset($__componentOriginalb50fa256e918110d2ffe4696e875b1e78b162002); ?>
<?php endif; ?><?php /**PATH C:\laravel_projects\booksstore\resources\views/cart.blade.php ENDPATH**/ ?>