@extends('admin.layouts.master')
@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h2>Manage Product</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.error_messages')
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Parent Category</th>
                            <th>Action</th>
                        </tr>

                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td><img src="{{asset('/images/categories/'.$category->image)}}" alt="" width="100"></td>
                                <td>
                                    @if($category->parent_id == null)
                                        Primary Category
                                    @else
                                        {{$category->parent->name}}
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.category.edit', $category->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="#deleteModal{{$category->id}}" data-toggle="modal">Delete</a>

                                    <!-- Delete Modal -->
                                    <div class="modal" id="deleteModal{{$category->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Are you sure?</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form action="{{route('admin.category.delete', $category->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>

                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->



@endsection
