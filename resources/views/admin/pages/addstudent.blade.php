@extends('layouts.admin')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="page-header card">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-box bg-c-blue"></i>
                <div class="d-inline">
                    <h5>{{ __('Student Input') }}</h5>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb breadcrumb-title float-left pl-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}"><span class="feather icon-home"></span></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('student.index') }}">{{ __('Student') }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('student.create') }}">{{ __('Student Input') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr>
</div>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <form  class="needs-validation" id="main" method="post" action="{{ route('student.store') }}"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <div class="card-header">
                                        <h5>{{ __('Student Information') }}</h5>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-2 col-form-label">{{ __('Student Type') }}</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="residensial" id="r1" value="1" > {{ __('Residensial') }}
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="residensial" id="r2" value="0" > {{ __('Non-Residensial') }}
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" multiple / name="image" id="image"
                                                required>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Student Name(Bengali)') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name_bn" id="name_bn" value="{{ old('name_bn') }}" placeholder="{{ __('Enter Student Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Student Name(Block)') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name_en" id="name_en" value="{{ old('name_en') }}" placeholder="{{ __('English Block Letter') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-2 col-form-label">{{ __("Father's Name(Bengali)") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_bn" id="f_name_bn" value="{{ old('f_name_bn') }}" placeholder="{{ __("Enter Father's Name") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Father's Name(Block)") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_en" id="f_name_en" value="{{ old('f_name_en') }}" placeholder="{{ __('English Block Letter') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Father's Occupation") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="f_occupation" name="f_occupation" value="{{ old('f_occupation') }}" placeholder=" {{ __("Enter Father's Occupation") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Father's Income") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="f_income" name="f_income" value="{{ old('f_income') }}" placeholder="{{ __("Enter Father's Income") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Father's Phone No") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="f_phone" name="f_phone" value="{{ old('f_phone') }}" placeholder="{{ __("Enter Father's Phone No") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Name(Bengali)") }}</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="m_name_bn" id="m_name_bn" value="{{ old('m_name_bn') }}" placeholder="{{ __("Enter Mother's Name") }}">
                                        <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Name(Block)") }}</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="m_name_en" id="m_name_en" value="{{ old('m_name_en') }}" placeholder="{{ __('English Block Letter') }}">
                                        <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Occupation") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="m_occupation" name="m_occupation" value="{{ old('m_occupation') }}" placeholder="{{ __("Enter Mother's Occupation") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Income") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="m_income" name="m_income" value="{{ old('m_income') }}" placeholder="{{ __("Enter Mother's Income") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Phone No") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="m_phone" name="m_phone" value="{{ old('m_phone') }}" placeholder="{{ __("Enter Mother's Phone No") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>{{ __("Present Address") }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Village") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_village" name="p_village" value="{{ old('p_village') }}" placeholder="{{ __('Enter Village Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("House No") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_house" name="p_house" value="{{ old('p_house') }}" placeholder="{{ __('Enter House No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_post" name="p_post" value="{{ old('p_post') }}" placeholder="{{ __('Enter Post Office') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                        <div class="col-sm-10">
                                            <select class="form-control js-example-basic-single" id="p_thana" name="p_thana">
                                                <optgroup> <!-- label="{{ __('Select Thana') }}"-->
                                                    <option selected>{{ __('Select Thana') }}</option>
                                                    @foreach ($thanas as $thana)
                                                    <option value="{{ $thana->id }}">{{ $thana->name }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                        <div class="col-sm-10">
                                            <select class="form-control js-example-basic-single" id="p_district" name="p_district">
                                                <optgroup>
                                                        <option selected>{{ __('Select District') }}</option>
                                                        @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                        @endforeach
                                                </optgroup>
                                            </select>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>{{ __('Permanant Address') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_village" name="per_village" value="{{ old('per_village') }}" placeholder="{{ __('Enter Village Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_house" name="per_house" value="{{ old('per_house') }}" placeholder="{{ __('Enter House No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_post" name="per_post" value="{{ old('per_post') }}" placeholder="{{ __('Enter Post Office') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                            <div class="col-sm-10">
                                                <select class="form-control js-example-basic-single" id="per_thana" name="per_thana">
                                                    <optgroup">
                                                        <option>{{ __('Select Thana') }}</option>
                                                        @foreach ($thanas as $thana)
                                                        <option value="{{ $thana->id }}">{{ $thana->name }}</option>
                                                        @endforeach

                                                    </optgroup>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                        <div class="col-sm-10">

                                            <select class="form-control js-example-basic-single" id="per_district" name="per_district">
                                                <optgroup>
                                                        <option selected>{{ __('Select District') }}</option>
                                                        @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                        @endforeach
                                                </optgroup>
                                            </select>
                                            <span class="messages"></span>

                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5>{{ __('Student Identification') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Date of Birth') }}</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                            <label class="col-sm-2 col-form-label">{{ __('Blood Group') }}</label>
                                            <div class="col-sm-10">
                                                <select class="form-control js-example-basic-single" id="b_group" name="b_group">
                                                    <optgroup label="{{ __('Blood Group') }}">
                                                            <option>{{ __('Select Blood Group') }}</option>
                                                            <option value="A+">A+</option>
                                                            <option value="A-">A-</option>
                                                            <option value="B+">B+</option>
                                                            <option value="B-">B-</option>
                                                            <option value="O+">O+</option>
                                                            <option value="O-">O-</option>
                                                            <option value="AB+">AB+</option>
                                                            <option value="AB-">AB-</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Height') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="height" name="height" value="{{ old('height') }}" placeholder="{{ __('Enter Height') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Weight') }}</label>
                                        <div class="col-sm-10">

                                            <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight') }}" placeholder="{{ __('Enter Weight') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Skin Color') }}</label>
                                        <div class="col-sm-10">

                                            <input type="text" class="form-control" id="skin_color" name="skin_color" value="{{ old('skin_color') }}" placeholder="{{ __('Enter Skin Color') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Birth Sign') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="b_sign" name="b_sign" value="{{ old('b_sign') }}" placeholder=" {{ __('Enter Birth Sign') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                            <h5>{{ __('Absense of Father') }}</h5>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('legal Guardian Name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_name" name="lg_name" value="{{ old('lg_name') }}" placeholder="{{ __('Enter legal Guardian Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_village" name="lg_village" value="{{ old('lg_village') }}" placeholder="{{ __('Enter Village') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_house" name="lg_house" value="{{ old('lg_house') }}" placeholder="{{ __('Enter House No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_post" name="lg_post" value="{{ old('lg_post') }}" placeholder="{{ __('Enter Post Office') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                        <div class="col-sm-10">
                                            <select class="form-control js-example-basic-single" id="lg_thana" name="lg_thana">
                                                <optgroup label="{{ __('Thana') }}">
                                                    <option>{{ __('Select Thana') }}</option>
                                                    @foreach ($thanas as $thana)
                                                    <option value="{{ $thana->name }}">{{ $thana->name }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                        <div class="col-sm-10">
                                            <select class="form-control js-example-basic-single" id="lg_district" name="lg_district">
                                                <optgroup label="{{ __('District') }}">
                                                    <option selected>{{ __('Select District') }}</option>
                                                    @foreach ($districts as $district)
                                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-2 col-form-label">{{ __('Relationship With Guardian') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="relationship" name="relationship" value="{{ old('relationship') }}" placeholder="{{ __('Enter Relationship With Guardian') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="{{ __('Enter Phone Number') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>{{ __('Previous Academic Record') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Exam/Class name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exam_class_name" name="exam_class_name" value="{{ old('exam_class_name') }}" placeholder="{{ __('Enter Exam/Class name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Institute Name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="institute_name" name="institute_name" value="{{ old('institute_name') }}" placeholder="{{ __('Enter Institute Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Result') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="result" name="result" value="{{ old('result') }}" placeholder="{{ __('Enter Result') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pass_year" name="pass_year" value="{{ old('pass_year') }}" placeholder="{{ __('Enter Passing Year') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Blood Group') }}</label>
                                            <div class="col-sm-10">
                                                <select class="form-control js-example-basic-single" id="board" name="board">
                                                    <optgroup label="{{ __('Boards') }}">
                                                            <option>{{ __('Select Board Name') }}</option>
                                                            <option value="Dhaka">Dhaka</option>
                                                            <option value="Rajshahi">Rajshahi</option>
                                                            <option value="Kumilla">Kumilla</option>
                                                            <option value="Jessore">Jessore</option>
                                                            <option value="Chottogram">Chottogram</option>
                                                            <option value="Barishal">Barishal</option>
                                                            <option value="Sylhet">Sylhet</option>
                                                            <option value="Dinajpur">Dinajpur</option>
                                                            <option value="Dinajpur">Dinajpur</option>
                                                            <option value="Madrasha">Madrasha</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <span class="messages"></span>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Document No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="document_no" name="document_no" value="{{ old('document_no') }}" placeholder="{{ __('Enter Document No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Addmission Class') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="addmission_class" name="addmission_class" value="{{ old('addmission_class') }}" placeholder="{{ __('Enter Addmission Class') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>{{ __('Official Use Only') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Addmission No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="addmission_no" id="addmission_no" value="{{ old('addmission_no') }}" placeholder="{{ __('Addmission No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="date" id="date" value="{{ old('date') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Addmitted To Class') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="addmitted_to_class" id="addmitted_to_class" value="{{ old('addmitted_to_class') }}" placeholder="{{ __('Enter Addmitted To Class') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Roll No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="roll_no" id="roll_no" value="{{ old('roll_no') }}" placeholder="{{ __('Enter Roll No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <button type="submit"
                                                class="btn btn-primary m-b-0">{{ __('Submit') }}</button>
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
