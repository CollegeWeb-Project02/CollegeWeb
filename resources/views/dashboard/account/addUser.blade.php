@extends('dashboard.layout.master')

@section('title', 'Add Teacher')

@section('body')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Add New User</h2>
                    </div>
                </div>

                <div class="row">
                    <form method="post" action="admin/account/" class="col-lg-12">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" id="name">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="phone">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" id="dob">
                                    <input name="dob" type="text" class="form-control" placeholder="Date Of Birth">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="email">
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="password">
                                    <input name="password" type="text" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select name="level" id="level">
                                        <option value="1">Student</option>
                                        <option value="2">Teacher</option>
                                        <option value="3">Host</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" id="address">
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
                                    <input hidden name="avatar" value="default-avatar.png">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                                <a href="./admin/account" class="border-0 btn btn-outline-danger mr-1">
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
