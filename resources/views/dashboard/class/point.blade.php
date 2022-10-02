@extends('dashboard.layout.master')

@section('title', 'Update point')

@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h2>Update student's point</h2>
            </div>
        </div>

        <div class="row">
            <form action="./admin/student/{{ $student->id }}" method="post" enctype="multipart/form-data" class="col-lg-12">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" id="course-name">
                            <input name="name" readonly value="{{ $student->name }}" type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="title">
                            <input name="phone" readonly value="{{ $student->phone }}" type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="subtitle">
                            <input name="dob" readonly value="{{ $student->dob }}" type="text" class="form-control" placeholder="Date Of Birth">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="time">
                            <input name="email" readonly value="{{ $student->email }}" type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="price">
                            <input name="address" readonly value="{{ $student->address }}" type="text" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="point">
                            <input name="point" type="text" class="form-control" placeholder="Test point">
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                        <a href="./admin/class/{{ $class->id }}" class="border-0 btn btn-outline-danger mr-1">
                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                                        <i class="fa fa-times fa-w-20"></i>
                                                    </span>
                            <span>Cancel</span>
                        </a>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
