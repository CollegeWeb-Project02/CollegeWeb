@extends('dashboard.layout.master')

@section('title', 'Send Feedback')

@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h2>Send Feedback About The Courses</h2>

        <div class="row">
            <form method="post" action="admin/feedback" class="col-lg-12">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" id="student_id">
                            <input name="student_id" hidden
                                   value="{{ $user->id }}"
                                   type="text" class="form-control" placeholder="id">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="name">
                            <input name="name" readonly
                                   value="{{ $user->name }}"
                                   type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="email">
                            <input name="email" readonly value="{{ $user->email }}" type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <select name="course_id" id="course">
                                    <option selected value="{{ $user->course_id }}">{{ \Illuminate\Support\Facades\DB::table('course')->where('id', $user->course_id)->get('name')->value('name') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="content">
                            <textarea name="content" rows="4" class="form-control no-resize" placeholder="Write your feedback there..."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                        <a href="./admin/feedback" class="border-0 btn btn-outline-danger mr-1">
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
