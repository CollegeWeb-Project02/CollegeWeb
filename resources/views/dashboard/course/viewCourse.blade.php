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
                                    <img src="dashboard/img/{{ $course->image }}" alt="" class="img-fluid">
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
                                        <h4 class="course-name">Name: {{ $course->name}}</h4><br>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course-title">Title: {{ $course->title}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course-subtitle">Subtitle: {{ $course->subtitle}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course-price">Price: {{ $course->price}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="course->discount">Discount: {{ $course->discount}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Time: {{ $course->time}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Description: </h5><p class="course-description"> {{ $course->description}}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-raised waves-effect btn-round btn-primary">
                                            <a href="admin/course/{{ $course->id }}/edit" style="text-decoration: none; color: white">Update Course</a>
                                        </button>
                                        <form class="d-inline" action="./admin/course/{{$course->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-raised waves-effect btn-round btn-danger"
                                                    type="submit" data-toggle="tooltip" title="Delete"
                                                    data-placement="bottom"
                                                    onclick="return confirm('Do you really want to delete this?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
@endsection
