@extends('dashboard.layout.master')

@section('title', 'View Class')

@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h2 class="mb-2 text-gray-800">Class Name: {{ $class->classes_name }}</h2>
        <h4 class="mb-2 text-gray-800">Teacher: {{ \Illuminate\Support\Facades\DB::table('users')->where('class_id', $class->id)->where('level', 2)->get('name')->value('name') }}</h4>
        <h4 class="mb-2 text-gray-800">Start Date: {{ $class->created_at }}</h4>
        <h4 class="mb-2 text-gray-800">Students: {{ count(\Illuminate\Support\Facades\DB::table('users')->where('class_id', $class->id)->where('level', 1)->get()) }}</h4>

        <!-- DataTales Example -->
        @if(\Illuminate\Support\Facades\Auth::check())
            @if(\Illuminate\Support\Facades\Auth::user()->level == 1)
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Address</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th  class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Address</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td class="text-center">#{{ $student->id }}</td>
                                        <td class="">
                                            <img class="img-profile rounded" width="40px;" src="dashboard/img/{{ $student->avatar ?? 'default-avatar.png' }}" alt="">
                                            <span>{{ $student->name }}</span>
                                        </td>
                                        <td class="">{{ $student->email }}</td>
                                        <td class="text-center">{{ $student->address }}</td>
                                        <td class="text-center">{{ $student->phone }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
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
                                    <th class="text-center">Test Point</th>
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
                                    <th class="text-center">Test Point</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td class="text-center">#{{ $student->id }}</td>
                                        <td class="">
                                            <img class="img-profile rounded" width="40px;" src="dashboard/img/{{ $student->avatar ?? 'default-avatar.png' }}" alt="">
                                            <span>{{ $student->name }}</span>
                                        </td>
                                        <td class="">{{ $student->email }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->point }}</td>
                                        <td class="text-center">
                                            <a href="/admin/point/{{ $student->id }}/edit">
                                                <i class="fa fa-pen-alt"></i>
                                            </a>
                                            <form class="d-inline" action="./admin/point/{{$student->id}}" method="post">
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
            @endif
        @endif
    </div>
    <!-- /.container-fluid -->
@endsection
