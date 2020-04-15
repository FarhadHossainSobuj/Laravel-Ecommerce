@extends('layouts.master')
@section('content')
    <!-- Start sidebar + content -->
    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
                @include('partials.product-sidebar')
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>All Products</h3>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-3">
                                <div class="card" style="">
                                    @php $i = 1; @endphp
                                    @foreach($product->images as $image)
                                        @if($i > 0)
                                            <img class="card-img-top" src="{{asset('images/products/'.$image->image)}}" alt="Card image">
                                        @endif

                                        @php $i--; @endphp
                                    @endforeach
                                    <div class="card-body">
                                        <h4 class="card-title">{{$product->title}}</h4>
                                        <p class="card-text">Taka - {{$product->price}}</p>
                                        <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End sidebar + content -->

@endsection
