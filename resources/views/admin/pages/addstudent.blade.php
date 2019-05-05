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
                                <div class="card-block">
                                    <form id="main" method="post" action="{{ route('student.store') }}" novalidate>
                                        @csrf
                                        <div class="card-header">
                                            <h5>Student Information</h5>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">Radio Buttons</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="residensial" id="residensial-1" > Residensial
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="residensial" id="residensial-2" > Non-Residensial
                                                        </label>
                                                    </div>
                                                    <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control" multiple / name="image" id="image" placeholder="Roll No" >
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Student Name (Bengali)</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_bn" id="name_bn" placeholder="Student Name">
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
                                            <label class="col-sm-2 col-form-label">Father's Name (Bengali)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_bn" id="f_name_bn" placeholder="Student Name">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Father's Name (Block)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_en" id="f_name_en" placeholder="English Block Letter">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Father's Occupation</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="f_occupation" name="f_occupation" placeholder="">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Father's Income</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="f_income" name="f_income" placeholder="">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mother's Name (Bengali)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="m_name_bn" id="m_name_bn" placeholder="Student Name">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mother's Name (Block)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="m_name_en" id="m_name_en" placeholder="English Block Letter">
                                            <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mother's Occupation</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="m_occupation" name="m_occupation" placeholder="Password input">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mother's Income</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="m_income" name="m_income" placeholder="">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Present Address</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Village</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_village" name="p_village" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">House No</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_house" name="p_house" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Post Office</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_post" name="p_post" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Thana</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_thana" name="p_thana" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">District</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_district" name="p_district" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Permanant Address</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Village</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_village" name="per_village" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">House No</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_house" name="per_house" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Post Office</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_post" name="per_post" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Thana</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_thana" name="per_thana" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">District</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_district" name="per_district" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Date of Birth</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="dob" name="dob" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Student Identification</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Blood Group</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="b_group" name="b_group" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Height</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="height" name="height" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Weight</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="weight" name="weight" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Skin Color</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="skin_color" name="skin_color" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Birth Sign</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="b_sign" name="b_sign" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Absense of Father</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">legal Guardian Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="lg_name" name="lg_name" placeholder="Repeat Password">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Village</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_village" name="lg_village" placeholder="Repeat Password">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">House No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_house" name="lg_house" placeholder="Repeat Password">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Post Office</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_post" name="lg_post" placeholder="Repeat Password">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thana</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_thana" name="lg_thana" placeholder="Repeat Password">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">District</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_district" name="lg_district" placeholder="Repeat Password">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Relationship With Guardian</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Repeat Password">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Previous Academic Record</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Exam / Class name</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exam_class_name" name="exam_class_name" placeholder="Enter ">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Institute Name</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="institute_name" name="institute_name" placeholder="Enter Institute Name">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Result</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="result" name="result">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Passing Year</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pass_year" name="pass_year" placeholder="Enter Passing Year">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Board</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="board" name="board" placeholder="Enter Passing Year">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Document No</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="document_no" name="document_no" placeholder="Enter Document No">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Addmission Class</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="addmission_class" name="addmission_class" placeholder="Enter Document No">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Official Use Only</h5>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Addmission No</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="addission_no" id="addission_no" placeholder="Addmission No">
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" name="date" id="date" placeholder="Date">
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Addmitted To Class</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="addmitted_to_class" id="addmitted_to_class" placeholder="Addmitted To">
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Roll No</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Roll No">
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
