@extends('backend.layouts.master')
@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h2>Add Category</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                        @csrf
                        @include('backend.partials.error_messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" name="description" id="" cols="80" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Parent Category</label>
                            <select class="form-control" name="parent_id">
                                @foreach($parent_categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Category Image</label>
                            <input type="file" class="form-control" name="image" id="exampleInputEmail1">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->



@endsection
