<x-outer-layout>
    <!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Thank You</h1>
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
                <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="order-id">Order Id</th>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          {{-- <th class="product-remove">Remove</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($orders as $item)
                        
                            
                            @foreach ($item->products as $product)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td class="product-thumbnail">
                                        <img src="{{$product->image_url}}" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{$product->title}}</h2>
                                    </td>
                                    <td>₹{{$product->pivot->price}}</td>
                                    <td>{{$product->pivot->quantity}}</td>
                                    <td>₹{{$product->pivot->total_price}}</td>
                                </tr>   
                            @endforeach
                           
                               
                                                    
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Orders Found</td>
                            </tr>
                        @endforelse
                      </tbody>
                    </table>
              </div>
            </div>
        </div>
</x-outer-layout>