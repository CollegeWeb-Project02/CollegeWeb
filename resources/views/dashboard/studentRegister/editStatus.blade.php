@extends('dashboard.layout.master')

@section('title', 'Add Teacher')

@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Register</h2>
            </div>
        </div>

        <div class="row">
            <form method="post" action="admin/teacher/" class="col-lg-12">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" id="name">
                            <input name="name" type="text" class="form-control" placeholder="Name" value="{{ $register->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="phone">
                            <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{ $register->phone }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="dob">
                            <input name="dob" type="text" class="form-control" placeholder="Date Of Birth" value="{{ $register->dob }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="email">
                            <input name="email" type="email" class="form-control" placeholder="Email" value="{{ $register->email }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="password">
                            <input name="password" type="text" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="course_id">
                            <input name="course_id" value="{{ $register->course_id }}" type="text" class="form-control" placeholder="Course Name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="position">Position </label>
                            <select name="level" id="position">
                                <option value="1">Student</option>
                                <option value="2">Teacher</option>
                                <option value="3">Host</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="class_id">Class </label>
                            <select name="class_id" id="class_id">
                                <option value="1">T2108</option>
                                <option value="2">T2109</option>
                                <option value="3">T2110</option>
                                <option value="4">T2111</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="status">Status </label>
                            <select name="status" id="status">
                                <option value="0">Unpaid</option>
                                <option value="1">Paid</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="address">
                            <input name="address" type="text" class="form-control" placeholder="Address" value="{{ $register->address }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="achieve">
                            <textarea name="achieve" rows="4" class="form-control no-resize" placeholder="Achieve"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="description">
                            <textarea name="description" rows="4" class="form-control no-resize" placeholder="Description"></textarea>
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
                        <a href="./admin/teacher" class="border-0 btn btn-outline-danger mr-1">
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
