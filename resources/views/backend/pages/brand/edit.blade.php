@extends('backend.layouts.master')
@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h2>Update Brand</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('admin.brand.update', $brand->id)}}" enctype="multipart/form-data">
                        @csrf
                        @include('backend.partials.error_messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$brand->name}}" placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" name="description" id="" cols="80" rows="10">{{$brand->description}}</textarea>
                        </div>
                        <div class="form-group">
                            </div>
                        <div class="form-group">
                            <label for="old image">Brand Old Image</label><br>
                            <img src="{{asset('/images/categories/'.$brand->image)}}" alt="" width="100" height="100"><br>

                            <label for="image">Brand Image</label>
                            <input type="file" class="form-control" name="image" id="exampleInputEmail1">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Brand</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->



@endsection
