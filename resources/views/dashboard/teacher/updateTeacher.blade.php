@extends('dashboard.layout.master')

@section('title', 'Update Teacher')

@section('body')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Update Teacher</h2>
                    </div>
                </div>

                <div class="row">
                    <form action="" class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" id="course-name">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="title">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="subtitle">
                                    <input type="text" class="form-control" placeholder="Date Of Birth">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="time">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="price">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="achieve">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Achieve"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="description">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="max-width: 100%">
                                    <img style="height: 400px;" class="img-thumbnail" src="../../img/undraw_profile_1.svg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="image">
                                    <img style="width: 98%; cursor: pointer;"
                                         class="thumbnail"
                                         data-toggle="tooltip" title="Click to add image" data-placement="bottom"
                                         src="../../img/img-new.png" alt="Add Image">

                                    <input name="image" type="file" onchange="changeImg(this);"
                                           accept="image/x-png,image/gif,image/jpeg"
                                           class="image form-control-file" style="display: none;">
                                </div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                                <button type="submit" class="btn btn-raised waves-effect btn-round">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <!-- /.container-fluid -->
@endsection
