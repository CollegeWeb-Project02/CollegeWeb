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
        <form action="" class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group" id="class-name">
                        <input type="text" class="form-control" placeholder="Class Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group" id="course-name">
                        <input type="text" class="form-control" placeholder="Course">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group" id="teacher">
                        <input type="text" class="form-control" placeholder="Teacher">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group" id="status">
                        <input type="text" class="form-control" placeholder="Status">
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                    <button type="submit" class="btn btn-raised waves-effect btn-round">Cancel</button>
                </div>
            </div>
        </form>

    </div>

</div>
<!-- /.container-fluid -->

@endsection
