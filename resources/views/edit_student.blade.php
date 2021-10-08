@extends('template', ['title' => 'Student'])

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Form Edit Data</h3>
                <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Example Content</h4>
            </div>
            <div class="card-body">
                <form action="/update_student/{{ $students->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group position-relative mb-3">
                        <label for="code" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $students->name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Gender</label>
                        <input type="text" class="form-control" name="gender" id="gender" value="{{ $students->gender }}">

                    </div>

                    <div class="form-group position-relative mb-3">
                        <label for="price" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" id="age" value="{{ $students->age }}">
                        <div class="form-control-icon mt-3">

                        </div>
                    </div>

                    <div class="form-group position-relative mb-3">
                        <label for="qty" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ $students->address }}">
                        <div class="form-control-icon mt-3">

                        </div>

                        <div class="row my-4">
                            <div class="col pt-3">
                                <a href="/student" class="btn btn-lg btn-block btn-primary mr-2">
                                    <i class="far fa-arrow-alt-circle-left"></i>
                                    Back
                                </a>
                            </div>
                            <div class="col pt-3">
                                <button type="submit" class="btn btn-dark btn-lg btn-block">Save</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection