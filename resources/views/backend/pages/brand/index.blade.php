@extends('backend.layouts.master')
@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h2>Manage Brand</h2>
                </div>
                <div class="card-body">
                    @include('backend.partials.error_messages')
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Action</th>
                        </tr>

                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$brand->id}}</td>
                                <td>{{$brand->name}}</td>
                                <td><img src="{{asset('/images/brand/'.$brand->image)}}" alt="" width="100"></td>

                                <td>
                                    <a class="btn btn-success" href="{{route('admin.brand.edit', $brand->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="#deleteModal{{$brand->id}}" data-toggle="modal">Delete</a>

                                    <!-- Delete Modal -->
                                    <div class="modal" id="deleteModal{{$brand->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Are you sure?</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form action="{{route('admin.brand.delete', $brand->id)}}" method="post">
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
