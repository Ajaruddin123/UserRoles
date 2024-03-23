<x-app-layout>
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
                    {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

                    @if ($message = Session::get('success'))

                    <div class="" style="margin: 10px"></div>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $message }}</strong>
                    </div>
                       
                    @endif
                    <div class="panel-body">
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class="img">
                                    <img src="{{$book->image_url}}" alt="" srcset="">
                                </div>
                                <div class="title col-md-12">
                                    <h3>Title  : {{$book->title}}</h3>
                                    <h3>Author : {{$book->author}}</h3>
                                    <h3>Genre  : {{$book->genre}}</h3>
                                    <h3>Price  : {{$book->price}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>