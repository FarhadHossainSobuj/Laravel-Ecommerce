@extends('backend.layouts.master')
@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h2>Add Product</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('admin.product.update', $product->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @include('backend.partials.error_messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$product->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" name="description" id="" cols="80" rows="10">{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" class="form-control" name="price"  value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->

@endsection
