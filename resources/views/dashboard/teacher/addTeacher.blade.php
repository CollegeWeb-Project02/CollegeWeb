@extends('dashboard.layout.master')

@section('title', 'Add Teacher')

@section('body')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Add New Teacher</h2>
                    </div>
                </div>

                <div class="row">
                    <form method="post" action="admin/teacher/" class="col-lg-12">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" id="course-name">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="title">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="subtitle">
                                    <input name="dob" type="text" class="form-control" placeholder="Date Of Birth">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="time">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="price">
                                    <input name="address" type="text" class="form-control" placeholder="Address">
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
