@extends('layouts.admin')

@section('content')

<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                    <h5>Students Inputs</h5>
                    <span></span>
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
                                            <h5>Update StudentInformation</h5>
                                        </div>
                            <div class="card-block">
                                    <form id="main" method="post" action="/" novalidate>

                                        <div class="card-header">
                                            <h5>Student Information</h5>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">Radio Buttons</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="residensial" id="residensial-1" value="{{ $edits->residensial }}"> Residensial
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="residensial" id="residensial-2" value="{{ $edits->residensial }}"> Non-Residensial
                                                        </label>
                                                    </div>
                                                    <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control" multiple / name="image" id="image" >
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Student Name (Bengali)</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_bn" id="name_bn" value="{{ $edits->name_bn }}">
                                                <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Student Name (Block)</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $edits->name_en }}">
                                                <span class="messages"></span>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Father's Name (Bengali)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_bn" id="f_name_bn" value="{{ $edits->f_name_bn }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Father's Name (Block)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_en" id="f_name_en" value="{{ $edits->f_name_en }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Father's Occupation</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="f_occupation" name="f_occupation" value="{{ $edits->f_occupation }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Father's Income</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="f_income" name="f_income" value="{{ $edits->f_income }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mother's Name (Bengali)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="m_name_bn" id="m_name_bn" value="{{ $edits->m_name_bn }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mother's Name (Block)</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="m_name_en" id="m_name_en" value="{{ $edits->m_name_en }}"">
                                            <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mother's Occupation</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="m_occupation" name="m_occupation" value="{{ $edits->m_occupation }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mother's Income</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="m_income" name="m_income" value="{{ $edits->m_income }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Present Address</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Village</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_village" name="p_village" value="{{ $edits->p_village }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">House No</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_house" name="p_house" value="{{ $edits->p_house }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Post Office</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_post" name="p_post" value="{{ $edits->p_post }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Thana</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_thana" name="p_thana" value="{{ $edits->p_thana }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">District</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_district" name="p_district" value="{{ $edits->p_district }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Permanant Address</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Village</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_village" name="per_village" value="{{ $edits->per_village }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">House No</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_house" name="per_house" value="{{ $edits->per_house }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Post Office</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_post" name="per_post" value="{{ $edits->per_post}}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Thana</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_thana" name="per_thana" value="{{ $edits->per_thana }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">District</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_district" name="per_district" value="{{ $edits->per_district }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Date of Birth</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="dob" name="dob" value="{{ $edits->dob }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Student Identification</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Blood Group</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="b_group" name="b_group" value="{{ $edits->b_group }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Height</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="height" name="height" value="{{ $edits->height }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Weight</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="weight" name="weight" value="{{ $edits->weight }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Skin Color</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="skin_color" name="skin_color" value="{{ $edits->skin_color }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Birth Sign</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="b_sign" name="b_sign" value="{{ $edits->b_sign }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Absense of Father</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">legal Guardian Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="lg_name" name="lg_name" value="{{ $edits->lg_name }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Village</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_village" name="lg_village" value="{{ $edits->lg_village }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">House No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_house" name="lg_house" value="{{ $edits->lg_house }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Post Office</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_post" name="lg_post" value="{{ $edits->lg_post }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thana</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_thana" name="lg_thana" value="{{ $edits->lg_thana }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">District</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_district" name="lg_district" value="{{ $edits->lg_district }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Relationship With Guardian</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="relationship" name="relationship" value="{{ $edits->relationship }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $edits->phone }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Previous Academic Record</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Exam / Class name</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exam_class_name" name="exam_class_name" value="{{ $edits->exam_class_name }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Institute Name</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="institute_name" name="institute_name" value="{{ $edits->institute_name }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Result</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="result" name="result" value="{{ $edits->result }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Passing Year</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pass_year" name="pass_year" value="{{ $edits->pass_year }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Board</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="board" name="board" value="{{ $edits->board }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Document No</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="document_no" name="document_no" value="{{ $edits->document_no }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Addmission Class</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="addmission_class" name="addmission_class" value="{{ $edits->addmission_class }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>Official Use Only</h5>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Addmission No</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="addission_no" id="addission_no" value="{{ $edits->addmission_no }}">
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" name="date" id="date" value="{{ $edits->date }}">
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Addmitted To Class</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="addmitted_to_class" id="addmitted_to_class" value="{{ $edits->addmitted_to_class }}">
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Roll No</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="roll_no" id="roll_no" value="{{ $edits->roll_no }}">
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary m-b-0">Update</button>
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
