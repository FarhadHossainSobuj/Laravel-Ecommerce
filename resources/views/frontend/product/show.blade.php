
@extends('frontend.layouts.master')
@section('title')
    {{$product->title}} | Laravel Ecommerce
@endsection
@section('content')
    <!-- Start sidebar + content -->
    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php $i = 1;   @endphp
                        @foreach($product->images as $image)
                            @if($i==1)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('/images/products/'.$image->image)}}" alt="First slide">
                                </div>
                                @php $i ++;   @endphp

                            @else
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('/images/products/'.$image->image)}}" alt="First slide">
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>{{$product->title}}</h3>
                    <h4>{{$product->price}} Taka
                        <span class="badge badge-primary">{{$product->quantity < 1 ? 'No Item is Available': $product->quantity.' items in stock'}}</span>
                    </h4>
                    <hr>
                    <div class="product-description">
                        <h4>{{$product->description}}</h4>
                    </div>
{{--                    @include('frontend.product.partials.all_products')--}}
                </div>
            </div>
        </div>
    </div>


    <!-- End sidebar + content -->

@endsection
