@extends('dashboard.layout.master')

@section('title', 'Send Feedback')

@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h2>Send Feedback About The Courses</h2>

        <div class="row">
            <form method="post" action="admin/feedback" class="col-lg-12">
                @csrf
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select name="course_id" id="course">
                                    <option selected
                                            value="{{ $user->course_id }}">{{ \Illuminate\Support\Facades\DB::table('course')->where('id', $user->course_id)->get('name')->value('name') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <img width="100%" src="front/img/{{ $course->image }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                                <input name="email" readonly value="{{ $user->email }}" type="email"
                                       class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group" id="content">
                                <textarea name="content" rows="4" class="form-control no-resize"
                                          placeholder="Write your feedback there..."></textarea>
                            </div>
                        </div>

                        <style>
                            .rate {
                                float: left;
                                height: 36px;
                                padding: 0 10px;
                            }

                            .rate:not(:checked) > input {
                                display: none;
                            }

                            .rate:not(:checked) > label {
                                float:right;
                                width: 1em;
                                overflow: hidden;
                                white-space: nowrap;
                                cursor: pointer;
                                font-size: 30px;
                                color: #ccc;
                            }

                            label{
                                margin-bottom: -0.5rem; !important;
                            }

                            .rate:not(:checked) > label:before {
                                content: '★ ';
                            }

                            .rate > input:checked ~ label {
                                color: #ffc700;
                            }

                            .rate:not(:checked) > label:hover,
                            .rate:not(:checked) > label:hover ~ label {
                                color: #deb217;
                            }

                            .rate > input:checked + label:hover,
                            .rate > input:checked + label:hover ~ label,
                            .rate > input:checked ~ label:hover,
                            .rate > input:checked ~ label:hover ~ label,
                            .rate > label:hover ~ input:checked ~ label {
                                color: #c59b08;
                            }
                        </style>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="personal-rating">
                                <h6>Your Rating</h6>
                                <div class="rate">
                                    <input type="radio" id="star5" name="rating" value="5"/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rating" value="4"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rating" value="3"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rating" value="2"/>
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rating" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                            <div style="float: right; margin-top: 1em" class="col-lg-12">
                            <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit
                            </button>
                            <a href="./admin/feedback" class="border-0 btn btn-outline-danger mr-1">
                                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                                        <i class="fa fa-times fa-w-20"></i>
                                                    </span>
                                <span>Cancel</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
