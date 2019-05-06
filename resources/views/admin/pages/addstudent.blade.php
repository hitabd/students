@extends('layouts.admin')

@section('content')

<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                    <h5>{{ __('Students Inputs') }}</h5>
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
                    <li class="breadcrumb-item"><a href="#!">{{ __('Student') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#!">{{ __('Student Input') }}</a>
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
                                        <h5>{{ __('Student Information') }}</h5>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">{{ __('Student Type') }}</label>
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
                                        <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" multiple / name="image" id="image"  >
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Student Name(Bengali)') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_bn" id="name_bn" placeholder="Enter Student Name">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Student Name(Block)') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_en" id="name_en" placeholder="English Block Letter">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Father's Name(Bengali)") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_bn" id="f_name_bn" placeholder="Enter Father's Name">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Father's Name(Block)") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_en" id="f_name_en" placeholder="English Block Letter">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Father's Occupation") }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="f_occupation" name="f_occupation" placeholder=" Enter Father's Occupation">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Father's Income") }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="f_income" name="f_income" placeholder="Enter Father's Income">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Name(Bengali)") }}</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="m_name_bn" id="m_name_bn" placeholder="Enter Mother's Name">
                                        <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Name(Block)") }}</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="m_name_en" id="m_name_en" placeholder="English Block Letter">
                                        <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Occupation") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="m_occupation" name="m_occupation" placeholder="Enter Mother's Occupation">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Income") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="m_income" name="m_income" placeholder="Enter Mother's Income">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                            <h5>{{ __("PresentAddress") }}</h5>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Village") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_village" name="p_village" placeholder="Enter Present Village Name">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("House No") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_house" name="p_house" placeholder="Enter Present HouseNo">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_post" name="p_post" placeholder="Enter Present Post Office">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_thana" name="p_thana" placeholder="Enter Present Thana">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_district" name="p_district" placeholder="Enter Present District">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                            <h5>{{ __('PermanantAddress') }}</h5>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_village" name="per_village" placeholder="Enter Permanant Village Name">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_house" name="per_house" placeholder="Enter Permanant House No">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_post" name="per_post" placeholder="Enter Permanant Post Office">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_thana" name="per_thana" placeholder="Enter Permanant Thana">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_district" name="per_district" placeholder="Enter Permanant District">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Date of Birth') }}</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="dob" name="dob" >
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                            <h5>{{ __('StudentIdentification') }}</h5>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Blood Group') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="b_group" name="b_group" placeholder="Enter Blood Group">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Height') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="height" name="height" placeholder="Enter Height">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Weight') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Weight">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Skin Color') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="skin_color" name="skin_color" placeholder="Enter Skin Color">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Birth Sign') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="b_sign" name="b_sign" placeholder=" Enter Birth Sign">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                            <h5>{{ __('AbsenseofFather') }}</h5>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('legal Guardian Name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_name" name="lg_name" placeholder="Enter legal Guardian Name">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_village" name="lg_village" placeholder="Enter Village">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_house" name="lg_house" placeholder="Enter House No">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_post" name="lg_post" placeholder="Enter Post Office">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_thana" name="lg_thana" placeholder="Enter Thana">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_district" name="lg_district" placeholder="Enter District">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Relationship With Guardian') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Enter Relationship With Guardian">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>{{ __('PreviousAcademicRecord') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Exam/Class name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exam_class_name" name="exam_class_name" placeholder="Enter Exam/Class name">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Institute Name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="institute_name" name="institute_name" placeholder="Enter Institute Name">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Result') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="result" name="result" placeholder="Enter Result">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pass_year" name="pass_year" placeholder="Enter Passing Year">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Board') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="board" name="board" placeholder="Enter Board Name">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Document No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="document_no" name="document_no" placeholder="Enter Document No">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Addmission Class') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="addmission_class" name="addmission_class" placeholder="Enter Addmission Class">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>{{ __('OfficialUseOnly') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Addmission No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="addmission_no" id="addission_no" placeholder=" Enter Addmission No">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="date" id="date" >
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Addmitted To Class') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="addmitted_to_class" id="addmitted_to_class" placeholder="Enter Addmitted To">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Roll No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Enter Roll No">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary m-b-0">{{ __('Submit') }}</button>
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

