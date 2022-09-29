@extends('dashboard.layout.master')

@section('title', 'Account')

@section('body')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-2 text-gray-800">Account</h2>

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
                        <th class="text-center">Password</th>
                        <th class="text-center">Level</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Level</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="text-center">#{{ $user->id }}</td>
                        <td class="text-center">
                            {{ $user->name }}
                        </td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->password }}</td>
                        <td class="text-center">{{ $user->level }}</td>
                        <td class="text-center">
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
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
