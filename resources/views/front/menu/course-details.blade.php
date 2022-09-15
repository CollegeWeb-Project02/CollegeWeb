@extends('front.layout.master-breadcrumb')

@section('title', 'Course Registering')

@section('body')

    <div  class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div style="border-bottom: none;">
                            <h1 class="mb-5">Web design for beginner</h1>
                        </div>
                        <div class="course-thumbnail">
                            <img class="img-fluid rounded w-100 mb-4" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="course-introduce">
                            <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.

                                Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="related-course">
                            <!-- Author Bio -->
                            <div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4">
                                <img src="img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                                <h3 class="text-primary mb-3">John Doe</h3>
                                <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                                <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit
                                    no ut est ipsum erat kasd amet elitr</p>
                            </div>

                            <!-- Search Form -->
                            <div class="mb-5">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                                        <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary"><i
                                            class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Related course -->
                            <div class="mb-5">
                                <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Related Course</h3>
                                <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                                    <img class="img-fluid" src="img/course-2.jpg" alt="">
                                    <div class="pl-3">
                                        <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                        <small>Jan 01, 2050</small>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                                    <img class="img-fluid" src="img/course-3.jpg" alt="">
                                    <div class="pl-3">
                                        <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                        <small>Jan 01, 2050</small>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                                    <img class="img-fluid" src="img/course-4.jpg" alt="">
                                    <div class="pl-3">
                                        <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                        <small>Jan 01, 2050</small>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                                    <img class="img-fluid" src="img/course-5.jpg" alt="">
                                    <div class="pl-3">
                                        <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                        <small>Jan 01, 2050</small>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                                    <img class="img-fluid" src="img/course-6.jpg" alt="">
                                    <div class="pl-3">
                                        <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                        <small>Jan 01, 2050</small>
                                    </div>
                                </a>
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
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">Your Name <span>*</span></label>
                                            <input type="text" id="name">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Your Email <span>*</span></label>
                                            <input type="text" id="email">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="address">Your Address <span>*</span></label>
                                            <input type="text" id="address">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="dob">Date Of Birth <span>*</span></label>
                                            <input type="text" id="dob">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="phone">Phone <span>*</span></label>
                                            <input type="text" id="phone">
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
                                <h1 class="text-white">Web design for beginner</h1>
                            </div>
                            <div class="course-subtitle col-lg-12 course-register-item">
                                <p class="text-white">Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et.</p>
                            </div>
                            <div class="schedule col-lg-12 course-register-item">
                                <h4 class="text-primary">Schedule</h4>
                                <span class="text-white"><i class="fa fa-check text-white-50 mr-3"></i>3days/week</span>
                            </div>
                            <div class="course-time col-lg-6 course-register-item">
                                <h4 class="text-primary">Study Time</h4>
                                <span class="text-white"><i class="fa fa-check text-white-50 mr-3"></i>180 days</span>
                            </div>
                            <div class="course-price col-lg-6 course-register-item">
                                <h4 class="text-primary">Tuition</h4>
                                <span class="text-white"><i class="fa fa-check text-white-50 mr-3"></i>$99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
