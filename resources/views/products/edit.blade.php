@include('includes.header')

    <!--sidebar-wrapper-->
    @include('includes.sidebar')
    <!--end sidebar-wrapper-->
    <!--header-->
    @include('includes.topbar')
    <!--end header-->
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            @include('flash-messages')
            <div class="page-content">
                <div class="card border-top border-0 border-4 border-danger">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                            </div>
                            <h5 class="mb-0 text-danger">Add Product</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('products.update', $fields[0]->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $fields[0]->id }}" />
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="product_name" id="inputName" placeholder="Name" value="{{ $fields[0]->name }}">
                                </div>
                                @if ($errors->has('product_name'))
                                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputBrand" class="form-label">Brand</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="brand" id="inputBrand" placeholder="Brand" value="{{ $fields[0]->brand }}">
                                </div>
                                @if ($errors->has('brand'))
                                    <span class="text-danger">{{ $errors->first('brand') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputImage" class="form-label">Image</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="image" id="inputImage">
                                </div>
                                @if ($fields[0]->image != "")
                                    <img class="my-2" src="{{ asset('images/products/'.$fields[0]->image) }}" width="100px">
                                @endif
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger px-5">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->

@include('includes.footer')
