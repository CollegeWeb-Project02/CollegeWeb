@extends('dashboard.layout.master')

@section('title', 'Dashboard')

@section('body')

            <!-- Begin Page Content -->
            <div class="container-fluid" xmlns="http://www.w3.org/1999/html">

                <!-- Page Heading -->
                <h2 class="h3 mb-2 text-gray-800">Student Register(Unpaid)</h2>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date Of Birth</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date Of Birth</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($registers as $register)
                                    <tr>
                                        <th>#{{ $register->id }}</th>
                                        <th>{{ $register->name }}</th>
                                        <th>{{ $register->email }}</th>
                                        <th>{{ $register->dob }}</th>
                                        <th>{{ $register->course_id }}</th>
                                        <th>{{ $register->status }}</th>
                                        <th class="text-center">
                                            <form action="admin/register/{{ $register->id }}" method="post">
                                                @csrf
                                                @method('PUT')

                                                <input name="status" type="number" hidden value="1">
                                                <button type="submit">Edit status</button>
                                            </form>
                                            <form class="d-inline" action="/admin/register/{{$register->id}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                        type="submit" data-toggle="tooltip" title="Delete"
                                                        data-placement="bottom"
                                                        onclick="return confirm('Do you really want to delete this item?')">
                                                            <span class="btn-icon-wrapper opacity-8">
                                                                <i class="fa fa-trash fa-w-20"></i>
                                                            </span>
                                                </button>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

@endsection
