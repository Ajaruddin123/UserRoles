<x-outer-layout>
         <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                        {{-- <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a></p> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{asset('images/couch.png')}}" class="img-fluid">
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

                {{-- <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique. </p>
                    <p><a href="shop.html" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 --> --}}
                @forelse (isset($books)?$books :[] as $item)  
                        @php
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
                        @endphp                  
                    <!-- Start Column 2 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5 p-3 mb-md-0">
                        <a class="product-item" href="{{route('add.to.cart',$item->id)}}" data-id="{{$item->id}}">
                            <img src="{{asset($item->image_url)}}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">Title  : {{$item->title}}</h3>
                            <h3 class="product-title">Author : {{$item->author}}</h3>
                            <h3 class="product-title">Genre  : {{$item->genre}}</h3>
                            @if (in_array($item->genre,$genre))                                
                                <h3 class="product-title" style="background-color: brown;">Recomended</h3>
                            @endif
                            <strong class="product-price">₹{{$item->price}}</strong>

                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                    <!-- End Column 2 -->
                @empty
                    <div class="col-12 col-md-8 col-lg-8 mb-5 mb-md-0 text-center">
                       <h3>No Product found</h3>
                    </div>
                @endforelse
                {{-- <div class="d-flex justify-content-center ">
                    {{ $books->links() }}  
                </div> --}}
            {{-- <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="images/product-2.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 --> --}}

            </div>
        </div>
    </div>
    <!-- End Product Section -->
</x-outer-layout>