@extends('dashboard.layout.master')

@section('title', 'View Student')

@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>View Student</h2>
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
                            <img src="front/img/{{ $student->avatar ?? 'default-avatar.png' }}" alt="" class="img-fluid">
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
                                <h4 class="course-name">Name:  {{ $student->name}}</h4><br>
                            </div>
                            <div class="col-lg-12">
                                <h5 class="course-title">Email:  {{ $student->email}}</h5>
                            </div>
                            <div class="col-lg-12">
                                <h5 class="course-subtitle">Phone:  {{ $student->phone}}</h5>
                            </div>
                            <div class="col-lg-12">
                                <h5 class="course-price">Address:  {{ $student->address}}</h5>
                            </div>
                            <div class="col-lg-12">
                                <h5 class="course->discount">Achieve:  {{ $student->achieve}}</h5>
                            </div>
                            <div class="col-lg-12">
                                <h5>Description:  {{ $student->description}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
