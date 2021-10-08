@extends('template', ['title' => 'User'])

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
                <div class="row">
                    <div class="col"></div>
                    <div class="col pt-4 pl-5">
                        <table width="80%" border="0" cellspacing="0" cellpadding="0" class="ms-4">
                            <tr class="align-top">
                                <td>Full Name</td>
                                <td class="name px-2 pb-2"> : </td>
                                <td>{{ $students->name }}</td>
                            </tr>
                            <tr class="align-top">
                                <td>Gender</td>
                                <td class="email px-2 pb-2"> : </td>
                                <td>{{ $students->gender }}</td>
                            </tr>
                            <tr class="align-top">
                                <td>Age</td>
                                <td class="gender px-2 pb-2"> : </td>
                                <td>{{ $students->age }}</td>
                            </tr>
                            <tr class="align-top">
                                <td>Address</td>
                                <td class="age px-2 pb-2"> : </td>
                                <td>{{ $students->address }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection