@extends('layouts.admin')

@section('content')

<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                    <h5>Students Inputs</h5>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                    <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Form Components</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#!">Forms Validation</a>
                    </li>
                    </ul>
            </div>
        </div>
    </div>
</div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                         <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                        <h5>Basic Inputs Validation</h5>
                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                </div>
                            <div class="card-block">
                                    <form id="main" method="post" action="/" novalidate>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Student Name (Bengali)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name_bn" id="name_bn" placeholder="Student Name">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Father's Name (Block)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name_en" id="name_en" placeholder="English Block Letter">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Student Name (Block)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name_en" id="name_en" placeholder="English Block Letter">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Student Name (Block)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name_en" id="name_en" placeholder="English Block Letter">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password input">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Repeat Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">Radio Buttons</label>
                                            <div class="col-sm-10">
                                                <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gender" id="gender-1" value="option1"> Male
                                                </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gender" id="gender-2" value="option2"> Female
                                                </label>
                                                </div>
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                </div>
                                        </div>
                                    </form>
                            </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
