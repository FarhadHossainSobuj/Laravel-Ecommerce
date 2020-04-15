@extends('backend.layouts.master')
@section('content')

    <!-- partial -->
    <div class="main-panel">

        <div class="card card-body">
            <h3>Welcome to your Admin Panel</h3><br><br>
            <p><a href="{{route('index')}}" class="btn btn-primary btn-lg">Visit Main site</a></p>
        </div>

    </div>
    <!-- main-panel ends -->

@endsection
