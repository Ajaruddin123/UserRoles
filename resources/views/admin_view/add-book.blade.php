<x-app-layout>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Book</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="panel-heading">
                        Add Book
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
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="POST" action="{{ route('save.book') }}">
                                    @csrf
                                    <div class="col-md-6">
                                        <x-input-label for="title" :value="__('Title')" />
                        
                                        <x-text-input class="block mt-1 w-full form-control" type="text" name="title" id="title" :value="old('title')" required autofocus />
                                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-label for="author" :value="__('Author')" />
                        
                                        <x-text-input class="block mt-1 w-full form-control" type="text" name="author" id="author" :value="old('author')" required autofocus />
                                        <x-input-error :messages="$errors->get('author')" class="mt-2" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-label for="genre" :value="__('Genre')" />
                        
                                        <x-text-input class="block mt-1 w-full form-control" type="text" name="genre" id="genre" :value="old('genre')" required autofocus />
                                        <x-input-error :messages="$errors->get('genre')" class="mt-2" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-label for="price" :value="__('Price')" />
                        
                                        <x-text-input class="block mt-1 w-full form-control" type="number" name="price" id="price" :value="old('price')" required autofocus />
                                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-label for="quantity" :value="__('Quantity')" />
                        
                                        <x-text-input class="block mt-1 w-full form-control" type="number" name="quantity" id="quantity" :value="old('quantity')" required autofocus />
                                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                                    </div>

                                    <div class="col-lg-12" style="margin: 10px"></div>
                                        <div
                                            class="flex items-center justify-end mt-4 col-lg-12 col-md-12 col-sm-12 py-2">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-6 text-center py-2">
                                                    <x-primary-button class="ml-4 col-md-12 btn btn-info">
                                                        {{ __('Save') }}
                                                    </x-primary-button>
                                                </div>

                                                {{-- <div class="col-lg-4 text-center py-2">
                                                    <x-button class="ml-4 col-md-2">
                                                        {{ __('cancel') }}
                                                    </x-button>
                                                </div> --}}
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>