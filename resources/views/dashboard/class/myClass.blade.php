@extends('dashboard.layout.master')

@section('title', 'My Class')

@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h2 class="h3 mb-2 text-gray-800">My Class</h2>

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
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Course</th>
                            <th class="text-center">Start Date</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Course</th>
                            <th class="text-center">Start Date</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($classes as $class)
                            <tr>
                                <td class="text-center">#{{ $class->id }}</td>
                                <td class="text-center">
                                    <span>{{ $class->classes_name }}</span>
                                </td>
                                <td class="text-center">{{ \Illuminate\Support\Facades\DB::table('course')->where('id', $class->course_id)->get('name')->value('name') }}</td>
                                <td class="text-center">{{ $class->created_at }}</td>
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
