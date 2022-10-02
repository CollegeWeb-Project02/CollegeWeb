@extends('dashboard.layout.master')

@section('title', 'Feedbacks')

@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h2 class="h3 mb-2 text-gray-800">All Feedbacks</h2>

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
                            <th class="text-center">Student Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Course</th>
                            <th class="text-center">Content</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Student Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Course</th>
                            <th class="text-center">Content</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <td class="text-center">#{{ $feedback->id }}</td>
                                <td class="text-center">
                                    <span>{{ $feedback->name }}</span>
                                </td>
                                <td class="text-center">{{ $feedback->email }}</td>
                                <td class="text-center">{{ \Illuminate\Support\Facades\DB::table('course')->where('id', $feedback->course_id)->get('name')->value('name') }}</td>
                                <td class="text-center">{{ $feedback->content }}</td>
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
