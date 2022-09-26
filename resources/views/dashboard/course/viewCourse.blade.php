@extends('dashboard.layout.master')

@section('title', 'View Course')

@section('body')
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>View Course</h2>
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
                                    <img src="../../img/course-1.jpg" alt="" class="img-fluid">
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
                                        <h4 class="course-name">{{ course->name}}</h4><br>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="course-title">{{ course->title}}</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="course-subtitle">{{ course->subtitle}}</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="course-price">{{ course->price}}</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="course->discount">{{ course->discount}}</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>{{ course->time}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="course-description">{{ course->description}}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-raised waves-effect btn-round btn-primary">
                                            <a href="updateCourse.blade.php" style="text-decoration: none; color: white">Update Course</a>
                                        </button>
                                        <button class="btn btn-raised waves-effect btn-round btn-danger">Delete Course</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
@endsection
