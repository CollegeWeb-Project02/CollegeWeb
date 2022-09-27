@extends('dashboard.layout.master')

@section('title', 'All Teacher')

@section('body')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h2 class="h3 mb-2 text-gray-800">Teachers</h2>

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
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th  class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                @foreach($teachers as $teacher)
                                    <tr>
                                        <td class="text-center">#{{ $teacher->id }}</td>
                                        <td class="">
                                            <img class="img-profile rounded" width="40px;" src="dashboard/img/{{ $teacher->avatar ?? 'default-avatar.png' }}" alt="">
                                            <span>{{ $teacher->name }}</span>
                                        </td>
                                        <td class="">{{ $teacher->email }}</td>
                                        <td class="text-center">{{ $teacher->address }}</td>
                                        <td class="text-center">{{ $teacher->phone }}</td>
                                        <td class="text-center">
                                            <a href="admin/teacher/{{ $teacher->id }}"
                                               class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                Details
                                            </a>
                                            <a href="admin/teacher/{{ $teacher->id }}/edit" data-toggle="tooltip" title="Update"
                                               data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                                        <span class="btn-icon-wrapper opacity-8">
                                                            <i class="fa fa-edit fa-w-20"></i>
                                                        </span>
                                            </a>
                                            <form class="d-inline" action="./admin/teacher/{{$teacher->id}}" method="post">
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
                                        </td>
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
