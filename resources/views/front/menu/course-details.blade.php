@extends('front.layout.master-breadcrumb')

@section('title', 'Course Registering')

@section('body')

    <div  class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-information">
                            <div style="border-bottom: none;">
                                <h1 class="mb-5 course-name">{{ $course->subtitle }}</h1>
                            </div>
                            <div class="course-thumbnail">
                                <img class="img-fluid rounded w-100 mb-4 course-img" src="front/img/{{ $course->image }}" alt="">
                            </div>
                            <div>
                                <p class="course-description">
                                    {{ $course->description }}
                                </p>
                            </div>
                        </div>
                        <div class="course-feedback">
                            <h2>Feedback From Students ({{ count($feedbacks) }})</h2>
                            @foreach($feedbacks as $feedback)
                                <div class="media mb-4">
                                    <img src="dashboard/img/default-avatar.png" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                         style="width: 45px;">
                                    <div class="media-body">
                                        <h6>{{ $feedback->name }}<small><i>
                                                    {{ date('M d, Y', strtotime($feedback->created_at)) }}
                                                </i></small></h6>
                                        <p>{{ $feedback->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="course-sidebar-right">
                            <!-- Author Bio -->
                            <div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4">
                                <img src="front/img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3 admin-img" style="width: 100px;">
                                <h3 class="text-primary mb-3 course-teacher">John Doe</h3>
                                <p class="text-white m-0 course-teacher-description">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit
                                    no ut est ipsum erat kasd amet elitr</p>
                            </div>

                            <!-- Search Form -->
                            <div class="mb-5">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Related course -->
                            <div class="mb-5 related-course">
                                <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Related Course</h3>
                                @foreach($limitCourse as $courses)
                                <a class="d-flex align-items-center text-decoration-none mb-3" href="course/course-details/{{ $courses->id }}">
                                    <img class="img-fluid course-img" src="front/img/{{ $courses->image }}" alt="">
                                    <div class="pl-3">
                                        <h6 class="m-1 course-name">{{ $courses->subtitle }}</h6>
                                        <small class="course-time">
                                            {{ date('M d, Y', strtotime($courses->created_at)) }}
                                        </small>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid bg-registration py-5" style="max-height: 140%">
                <div class="row" style="padding: 60px 0">
                    <div class="col-md-5 col-lg-5 offset-md-1 offset-lg-1">
                        <div class="container">
                            <div class="card-header bg-light text-center p-4" style="border-bottom: none;">
                                <h1 class="m-0">Register Now</h1>
                            </div>
                            <div class="course-register-form card-body rounded-bottom bg-primary">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6" style="display: none">
                                            <input type="hidden" name="course_id" value="{{ $course->id }}">                                        </div>
                                        <div class="col-lg-6">
                                            <label for="name">Your Name <span>*</span></label>
                                            <input type="text" id="name" name="name">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Your Email <span>*</span></label>
                                            <input type="email" id="email" name="email">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="address">Your Address <span>*</span></label>
                                            <input type="text" id="address" name="address">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="dob">Date Of Birth <span>*</span></label>
                                            <input type="text" id="dob" name="dob">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="phone">Phone <span>*</span></label>
                                            <input type="text" id="phone" name="phone">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="achieve">Your Achieve</label>
                                            <textarea name="achieve" id="achieve"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
                        <div class="mb-4">
                            <div class="course-name col-lg-12 text-center course-register-item">
                                <h1 class="text-white">{{ $course->subtitle }}</h1>
                            </div>
                            <div class="course-subtitle col-lg-12 course-register-item">
                                <p class="text-white">
                                    {{ $course->subtitle }}
                                </p>
                            </div>
                            <div class="schedule col-lg-12 course-register-item">
                                <h4 class="text-primary">Schedule</h4>
                                <span class="text-white"><i class="fa fa-check text-white-50 mr-3"></i>3 days/week</span>
                            </div>
                            <div class="course-time col-lg-6 course-register-item">
                                <h4 class="text-primary">Study Time</h4>
                                <span class="text-white"><i class="fa fa-check text-white-50 mr-3"></i>{{ $course->time }} months</span>
                            </div>
                            <div class="course-price col-lg-6 course-register-item">
                                <h4 class="text-primary">Tuition</h4>
                                <span class="text-white"><i class="fa fa-check text-white-50 mr-3"></i>${{ $course->price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
