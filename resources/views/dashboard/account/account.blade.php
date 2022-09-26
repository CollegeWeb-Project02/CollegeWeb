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
                    <tr>
                        <td class="text-center">#1233</td>
                        <td class="text-center">
                            <img class="img-profile" width="40px;" src="../../img/undraw_profile_1.svg" alt="">
                            <span>Quanh</span>
                        </td>
                        <td class="text-center">quanh@gmail.com</td>
                        <td class="text-center">dfgdgfjsdhgfsdh</td>
                        <td class="text-center">Teacher</td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
