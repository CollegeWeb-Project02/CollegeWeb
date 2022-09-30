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
                                    <th>Register Date</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Register Date</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($registers as $register)
                                    <tr>
                                        <th>#{{ $register->id }}</th>
                                        <th>{{ $register->name }}</th>
                                        <th>{{ $register->email }}</th>
                                        <th>{{ $register->created_at }}</th>
                                        <th>{{ \Illuminate\Support\Facades\DB::table('course')->where('id', $register->course_id)->get('name')->value('name') }}</th>
                                        <th>{{ \App\Utilities\Constant::$student_register_status[$register->status] }}</th>
                                        <th class="text-center">

                                            <form action="admin/register/{{ $register->id }}" method="post" data-toggle="tooltip" title="Update"
                                                  data-placement="bottom" class="btn border-0 btn-sm">
                                                @csrf
                                                @method('PUT')

                                                <input class="btn-icon-wrapper opacity-8" name="status" type="number" hidden value="1">
                                                <button type="submit" style="border: none; background-color: white; color: lawngreen;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                    </svg>
                                                </button>
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
