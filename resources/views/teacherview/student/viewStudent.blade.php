@extends('dashboard.layout.master')

@section('title', 'View Student')

@section('body')
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>View Teacher</h2>
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
                                    <img src="../../img/undraw_profile_1.svg" alt="" class="img-fluid">
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
                                        <h4 class="course-name">{{ teacher->name}}</h4><br>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="course-title">{{ teacher->email}}</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="course-subtitle">{{ teacher->phone}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course-price">{{ teacher->address}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course->discount">{{ teacher->achieve}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>{{ teacher->description}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
@endsection
