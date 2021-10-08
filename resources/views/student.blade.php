@extends('template', ['title' => 'Student'])

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Vertical Layout with Navbar</h3>
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
                <a href="/add_student" class="btn btn-success btn-lg mb-3">Create New Student</a>
                <table class="table table-dark table-striped" id="table1">
                    <thead>
                        <tr>
                            <th width="20px">#.</th>
                            <th width="170px">Name</th>
                            <th width="200px">Gender</th>
                            <th width="100px">Age</th>
                            <th width="200px">Adress</th>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                        <tr>
                            <td>{{ $index + 1 . '.' }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->address }}</td>
                            <td>
                                <a href="/detail_student/{{ $student->id }}" class="btn btn-sm btn-info mr-2 ">
                                    <i class="fas fa-edit"></i>
                                    Show
                                </a>

                                <a href="/edit_student/{{ $student->id }}" class="btn btn-sm btn-warning mr-2 ">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>

                                <a href="/delete_student/{{ $student->id }}" class="btn btn-sm btn-danger ml-2">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection