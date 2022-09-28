@extends('dashboard.layout.master')

@section('title', 'Dashboard')

@section('body')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h2 class="h3 mb-2 text-gray-800">Student Register</h2>

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
                                            <a href="editStatus.blade.php"><i class="fa fa-edit fa-w-20"></i></a>
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
