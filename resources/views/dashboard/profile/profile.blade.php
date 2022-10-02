@extends('dashboard.layout.master')

@section('title', 'Profile')

@section('body')
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>View Profile</h2>
                    </div>
                </div>
                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="course-img-wrapper">
                                    <img src="dashboard/img/{{ $user->avatar ?? "default-avatar.png"}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <!-- Card Body -->
                            <div class="card-body container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="course-name">Name: {{ $user->name }}</h4><br>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course-title">Email: {{ $user->email }}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course-subtitle">Phone: {{ $user->phone }}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course-price">Address: {{ $user->address }}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course->discount">Achieve: {{ $user->achieve }}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Description: {{ $user->description }}</h5>
                                    </div>
                                    <a href="admin/teacher/{{ $user->id }}/edit" data-toggle="tooltip" title="Update"
                                       data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                                        <span class="btn-icon-wrapper opacity-8">
                                                            <i class="fa fa-edit fa-w-20"></i>
                                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
@endsection
