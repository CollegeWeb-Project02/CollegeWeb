@extends('dashboard.layout.master')

@section('title', 'Add Course')

@section('body')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Add New Course</h2>
                    </div>
                </div>

                <div class="row">
                    <form action="/admin/course" method="post" class="col-lg-12">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" id="course-name">
                                    <input type="text" name="name" class="form-control" placeholder="Courses Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="title">
                                    <input type="text" name="title" class="form-control" placeholder="Course Title">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="subtitle">
                                    <input type="text" name="subtitle" class="form-control" placeholder="Course Subtitle">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group" id="time">
                                    <input type="text" name="time" class="form-control" placeholder="Course Time">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group" id="price">
                                    <input type="text" name="price" class="form-control" placeholder="Course Price">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group" id="discount">
                                    <input type="text" name="discount" class="form-control" placeholder="Course Discount">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="description">
                                   <textarea rows="4" name="description" class="form-control no-resize" placeholder="Course Description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="description">
                                    <label for="subject">
                                        <select name="subject_id" id="subject">
                                            @foreach($courses as $course)
                                            <option value="{{ $a++ }}">{{ $course->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="image" style="max-width: 50%">
                                    <img style="width: 98%; cursor: pointer;"
                                         class="thumbnail"
                                         data-toggle="tooltip" title="Click to add image" data-placement="bottom"
                                         src="dashboard/img/img-new.png" alt="Add Image">

                                    <input name="image" type="file" onchange="changeImg(this);"
                                           accept="image/x-png,image/gif,image/jpeg"
                                           class="image form-control-file" style="display: none;">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                                <a href="./admin/course" class="border-0 btn btn-outline-danger mr-1">
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
