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
                    <h3>Featured Products</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{asset('images/products/samsung_galaxy_5.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 50000</p>
                                    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{asset('images/products/samsung_tv.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 50000</p>
                                    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{asset('images/products/samsung_tv.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 50000</p>
                                    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{asset('images/products/samsung_tv.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 50000</p>
                                    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{asset('images/products/samsung_tv.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 50000</p>
                                    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{asset('images/products/samsung_tv.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 50000</p>
                                    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{asset('images/products/samsung_tv.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 50000</p>
                                    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End sidebar + content -->

@endsection
