<x-outer-layout>
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
                        @foreach ($cartItems as $item)  
                        @php
                            $books = DB::table('book_stores')->where('id',$item->book_store_id)->get();
                            // $books = $item->books;
                        @endphp 
                            @foreach ($books as $book)                                
                                <tr id="remove_tr_{{$item->cart_id}}" class="tr_r">
                                    <td class="product-thumbnail">
                                        <img src="{{$book->image_url}}" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{$book->title}}</h2>
                                    </td>
                                    <td>₹{{$book->price}}</td>
                                    <td>
                                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                        </div>
                                        <input type="text" class="form-control text-center quantity-amount" id="cartQuant-{{$item->cart_id}}" value="{{$item->quantity}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                        </div>
                                        <div class="p-3">

                                            <button type="button" class="btn-info btn-sm updateQnt" data-up-id="{{$item->cart_id}}">update</button>
                                        </div>
                                        </div>
                    
                                    </td>
                                    @php
                                        $total = $book->price * $item->quantity;
                                        $priceTotal[]=$total;
                                    @endphp
                                    <td>₹{{$book->price * $item->quantity}}</td>
                                    <td><a href="javascript:void(0)" class="btn btn-black btn-sm btn-remove" data-cart-id="{{$item->cart_id}}">X</a></td>
                                </tr>
                            @endforeach                       
                        @endforeach
        
                        {{-- <tr>
                          <td class="product-thumbnail">
                            <img src="images/product-2.png" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">Product 2</h2>
                          </td>
                          <td>$49.00</td>
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                              </div>
                              <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                              </div>
                            </div>
        
                          </td>
                          <td>$49.00</td>
                          <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr> --}}
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    {{-- <div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Update Cart</button>
                    </div> --}}
                    <div class="col-md-6">
                      <a href="{{url('/')}}" class="btn btn-outline-black btn-sm btn-block">Continue Shopping</a>
                    </div>
                  </div>
                  {{-- <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                  </div> --}}
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      {{-- <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">$230.00</strong>
                        </div>
                      </div> --}}
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">
                            @if (isset($priceTotal))
                                ₹{{array_sum($priceTotal)}}
                            @else
                                ₹0
                            @endif
                                 {{-- $230.00 --}}
                          </strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='{{route('checkout')}}'">Proceed To Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</x-outer-layout>