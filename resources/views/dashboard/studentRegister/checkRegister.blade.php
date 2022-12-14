@extends('dashboard.layout.master')

@section('title', 'Dashboard')

@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">

        <!-- Page Heading -->
        <h2 class="h3 mb-2 text-gray-800">Student Register(Paid)</h2>

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
                        @foreach($checkRegisters as $checkRegister)
                            <tr>
                                <th>#{{ $checkRegister->id }}</th>
                                <th>
                                    <img class="img-profile rounded" width="40px;" src="dashboard/img/{{ $student->avatar ?? 'default-avatar.png' }}" alt="">
                                    <span>{{ $checkRegister->name }}</span>
                                </th>
                                <th>{{ $checkRegister->email }}</th>
                                <th>{{ $checkRegister->created_at }}</th>
                                <th>{{ \Illuminate\Support\Facades\DB::table('course')->where('id', $checkRegister->course_id)->get('name')->value('name') }}</th>
                                <th id="registerStatus">{{ \App\Utilities\Constant::$student_register_status[$checkRegister->status] }}</th>
                                <th class="text-center">
                                    <a href="./admin/register/{{ $checkRegister->id }}/edit"><i class="fa fa-edit fa-w-20"></i></a>
                                    <form class="d-inline" action="/admin/register/{{$checkRegister->id}}" method="post">
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
