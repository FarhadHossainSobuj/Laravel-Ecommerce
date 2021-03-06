@extends('backend.layouts.master')
@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h2>Update Category</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('admin.category.update', $category->id)}}" enctype="multipart/form-data">
                        @csrf
                        @include('backend.partials.error_messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" name="description" id="" cols="80" rows="10">{{$category->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Parent Category</label>
                            <select class="form-control" name="parent_id">
                                <option value="">Please select a primary category</option>
                                @foreach($main_categories as $cat)
                                    <option value="{{$cat->id}}" {{$cat->id == $category->parent_id ? 'selected':''}}>{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            </div>
                        <div class="form-group">
                            <label for="old image">Category Old Image</label><br>
                            <img src="{{asset('/images/categories/'.$category->image)}}" alt="" width="100" height="100"><br>

                            <label for="image">Category Image</label>
                            <input type="file" class="form-control" name="image" id="exampleInputEmail1">
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
