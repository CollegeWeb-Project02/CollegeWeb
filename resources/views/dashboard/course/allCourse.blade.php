@extends('dashboard.layout.master')

@section('title', 'All Course')

@section('body')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>All Course</h2>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($courses as $course)

                        <div class="col-lg-4 col-md-6 mb-4 course-item">
                            <div class="rounded overflow-hidden mb-2">
                                <a href="/admin/course/{{ $course->id }}"><img class="img-fluid" src="front/img/{{ $course->image }}" alt=""></a>
                                <div class="bg-secondary p-4" >
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0" style="color: white;"><i class="fa fa-users mr-2"></i>{{ count(\Illuminate\Support\Facades\DB::table('users')->where('level', 1)->where('course_id', $course->id)->get()) }} Students</small>
                                        <small class="m-0" style="color: white;"><i class="far fa-clock mr-2"></i>{{ $course->time }} days</small>
                                    </div>
                                    <a class="h5" style="text-decoration: none; color: white;" href="/admin/course/{{ $course->id }}">{{ $course->name }}</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0" style="color: white;"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></h6>
                                            <h5 class="m-0" style="color: white;">${{ $course->price }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection
