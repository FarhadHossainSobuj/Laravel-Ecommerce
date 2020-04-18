@extends('frontend.layouts.master')
@section('content')
    <!-- Start sidebar + content -->
    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
                @include('frontend.partials.product-sidebar')
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>Searched Products</h3>
                    @include('frontend.product.partials.all_products')
                </div>
            </div>
        </div>
    </div>


    <!-- End sidebar + content -->

@endsection
