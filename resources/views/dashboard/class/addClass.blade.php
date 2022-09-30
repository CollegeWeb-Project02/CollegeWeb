@extends('dashboard.layout.master')

@section('title', 'Add Class')

@section('body')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Add New Class</h2>
                    </div>
                </div>

                <div class="row">
                    <form action="./admin/course" method="post" class="col-lg-12">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" id="class-name">
                                    <input type="text" name="name" class="form-control" placeholder="Class Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="status">
                                    <input type="number" value="1" name="status" class="form-control" hidden>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="title">
                                    <label class="form-control" for="course">
                                        <select style="width: 100%; border: none;" id="course" name="course_id">
                                            @foreach($courses as $course)
                                            <option value="{{ $c++ }}">{{ $course->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="user_id">
                                    <label for="user_id"></label>
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
