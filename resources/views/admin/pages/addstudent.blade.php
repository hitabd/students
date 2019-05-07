@extends('layouts.admin')

@section('content')

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
                                <form id="main" method="post" action="{{ route('student.store') }}" enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <div class="card-header">
                                        <h5>{{ __('Student Information') }}</h5>
                                    </div>
                                    <div class="row">
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
                                            <input type="file" class="form-control" multiple / name="image" id="image"  >
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Student Name(Bengali)') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_bn" id="name_bn" placeholder="{{ __('Enter Student Name') }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Student Name(Block)') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_en" id="name_en" placeholder="{{ __('English Block Letter') }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Father's Name(Bengali)") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_bn" id="f_name_bn" placeholder="{{ __("Enter Father's Name") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Father's Name(Block)") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_en" id="f_name_en" placeholder="{{ __('English Block Letter') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Father's Occupation") }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="f_occupation" name="f_occupation" placeholder=" {{ __("Enter Father's Occupation") }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Father's Income") }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="f_income" name="f_income" placeholder="{{ __("Enter Father's Income") }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Father's Phone No") }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="f_phone" name="f_phone" placeholder="{{ __("Enter Father's Phone No") }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Name(Bengali)") }}</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="m_name_bn" id="m_name_bn" placeholder="{{ __("Enter Mother's Name") }}">
                                        <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Name(Block)") }}</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="m_name_en" id="m_name_en" placeholder="{{ __('English Block Letter') }}">
                                        <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Occupation") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="m_occupation" name="m_occupation" placeholder="{{ __("Enter Mother's Occupation") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Income") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="m_income" name="m_income" placeholder="{{ __("Enter Mother's Income") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Mother's Phone No") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="m_phone" name="m_phone" placeholder="{{ __("Enter Mother's Phone No") }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                            <h5>{{ __("Present Address") }}</h5>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("Village") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_village" name="p_village" placeholder="{{ __('Enter Present Village Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __("House No") }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_house" name="p_house" placeholder="{{ __('Enter Present House No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="p_post" name="p_post" placeholder="{{ __('Enter Present Post Office') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                        <div class="col-sm-10">
                                            <select class="form-control js-example-basic-single" id="p_thana" name="p_thana">
                                                <optgroup label="{{ __('Thana') }}">
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
                                            <select class="form-control js-example-basic-single" id="p_district" name="p_district">
                                                <optgroup label="{{ __('District') }}">
                                                        <option>{{ __('Select District') }}</option>
                                                        @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                        @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                            <h5>{{ __('Permanant Address') }}</h5>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_village" name="per_village" placeholder="{{ __('Enter Permanant Village Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_house" name="per_house" placeholder="{{ __('Enter Permanant House No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="per_post" name="per_post" placeholder="{{ __('Enter Permanant Post Office') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                            <div class="col-sm-10">
                                                <select class="form-control js-example-basic-single" id="per_thana" name="per_thana">
                                                    <optgroup label="{{ __('Thana') }}">
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
                                                <optgroup label="{{ __('District') }}">
                                                        <option>{{ __('Select District') }}</option>
                                                        @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                        @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                            <h5>{{ __('Student Identification') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Date of Birth') }}</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="dob" name="dob" >
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
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Height') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="height" name="height" placeholder="{{ __('Enter Height') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Weight') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="weight" name="weight" placeholder="{{ __('Enter Weight') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Skin Color') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="skin_color" name="skin_color" placeholder="{{ __('Enter Skin Color') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Birth Sign') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="b_sign" name="b_sign" placeholder=" {{ __('Enter Birth Sign') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                            <h5>{{ __('Absense of Father') }}</h5>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('legal Guardian Name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_name" name="lg_name" placeholder="{{ __('Enter legal Guardian Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_village" name="lg_village" placeholder="{{ __('Enter Village') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_house" name="lg_house" placeholder="{{ __('Enter House No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lg_post" name="lg_post" placeholder="{{ __('Enter Post Office') }}">
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
                                                        <option>{{ __('Select District') }}</option>
                                                        @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                        @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Relationship With Guardian') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="relationship" name="relationship" placeholder="{{ __('Enter Relationship With Guardian') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="{{ __('Enter Phone Number') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>{{ __('Previous Academic Record') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Exam/Class name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exam_class_name" name="exam_class_name" placeholder="{{ __('Enter Exam/Class name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Institute Name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="institute_name" name="institute_name" placeholder="{{ __('Enter Institute Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Result') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="result" name="result" placeholder="{{ __('Enter Result') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pass_year" name="pass_year" placeholder="{{ __('Enter Passing Year') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Board') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="board" name="board" placeholder="{{ __('Enter Board Name') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Document No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="document_no" name="document_no" placeholder="{{ __('Enter Document No') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Addmission Class') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="addmission_class" name="addmission_class" placeholder="{{ __('Enter Addmission Class') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>{{ __('Official Use Only') }}</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Addmission No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="addmission_no" id="addmission_no" placeholder="{{ __('Addmission No') }}">
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
                                            <input type="text" class="form-control" name="addmitted_to_class" id="addmitted_to_class" placeholder="{{ __('Enter Addmitted To Class') }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('Roll No') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="{{ __('Enter Roll No') }}">
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

