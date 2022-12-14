@extends('dashboard.layout.master')

@section('title', 'Add Class')

@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h2 class="h3 mb-2 text-gray-800">All Class</h2>

        <div class="search-classes">
            <form>
                <div class="input-group">
                    <input type="search" name="search" id="search"
                           placeholder="Search class..." class="form-control">
                    <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-search"></i>&nbsp;
                                                    Search
                                                </button>
                                            </span>
                </div>
            </form>
        </div>

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
                            <th class="text-center">Teacher</th>
                            <th class="text-center">Course</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Teacher</th>
                            <th class="text-center">Course</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($classes as $class)
                        <tr>
                            <td class="text-center">#{{ $class->id }}</td>
                            <td class="text-center">
                                <span>{{ $class->classes_name }}</span>
                            </td>
                            <td class="text-center">
                                <span>{{ \Illuminate\Support\Facades\DB::table('users')->where('id', $class->user_id)->where('level', 2)->get('name')->value('name') }}</span>
                            </td>
                            <td class="text-center">{{ \Illuminate\Support\Facades\DB::table('course')->where('id', $class->course_id)->get('name')->value('name') }}</td>
                            <td class="text-center">{{ \App\Utilities\Constant::$class_status[$class->status] }}</td>
                            <td class="text-center">
                                <a href="admin/class/{{ $class->id }}"
                                   class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                    Details
                                </a>
                                <form class="d-inline" action="" method="post">
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
                    <div class="paginate">
                        {{ $classes->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
