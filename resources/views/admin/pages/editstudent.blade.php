@extends('layouts.admin')

@section('content')

<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-clipboard bg-c-blue"></i>
                <div class="d-inline">
                    <h5>{{ __('Edit Students') }}</h5>
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
                    <li class="breadcrumb-item">
                        <a href="#!">{{ __('Student') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#!">{{ __('Edit Student') }}</a>
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
                                            <h5>{{ __('Update Student Information') }}</h5>
                                        </div>
                            <div class="card-block">
                                    <form id="main" method="post" action="{{ route('student.update', $student->id) }}" novalidate>
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">{{ __('Student Type') }}</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="residensial" id="residensial-1" value="{{ $student->residensial }}"> {{ __('Residensial') }}
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="residensial" id="residensial-2" value="{{ $student->residensial }}"> {{ __('Non-Residensial') }}
                                                        </label>
                                                    </div>
                                                    <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control" multiple / name="image" id="image" >
                                                <span class="messages"></span>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('Student Name(Bengali)') }}</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_bn" id="name_bn" value="{{ $student->name_bn }}">
                                                <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('Student Name(Block)') }}</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $student->name_en }}">
                                                <span class="messages"></span>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Father's Name(Bengali)") }}</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_bn" id="f_name_bn" value="{{ $student->f_name_bn }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Father's Name(Block)") }}</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="f_name_en" id="f_name_en" value="{{ $student->f_name_en }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __("Father's Occupation") }}</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="f_occupation" name="f_occupation" value="{{ $student->f_occupation }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __("Father's Income") }}</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="f_income" name="f_income" value="{{ $student->f_income }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Mother's Name(Bengali)") }}</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="m_name_bn" id="m_name_bn" value="{{ $student->m_name_bn }}">
                                            <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Mother's Name(Block)") }}</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="m_name_en" id="m_name_en" value="{{ $student->m_name_en }}"">
                                            <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Mother's Occupation") }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="m_occupation" name="m_occupation" value="{{ $student->m_occupation }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __("Mother's Income") }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="m_income" name="m_income" value="{{ $student->m_income }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>{{ __('Present Address') }}</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_village" name="p_village" value="{{ $student->p_village }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_house" name="p_house" value="{{ $student->p_house }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_post" name="p_post" value="{{ $student->p_post }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_thana" name="p_thana" value="{{ $student->p_thana }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="p_district" name="p_district" value="{{ $student->p_district }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>{{ __('Permanant Address') }}</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_village" name="per_village" value="{{ $student->per_village }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_house" name="per_house" value="{{ $student->per_house }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_post" name="per_post" value="{{ $student->per_post}}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_thana" name="per_thana" value="{{ $student->per_thana }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="per_district" name="per_district" value="{{ $student->per_district }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Date of Birth') }}</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="dob" name="dob" value="{{ $student->dob }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>{{ __('Student Identification') }}</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Blood Group') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="b_group" name="b_group" value="{{ $student->b_group }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Height') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="height" name="height" value="{{ $student->height }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Weight') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="weight" name="weight" value="{{ $student->weight }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Skin Color') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="skin_color" name="skin_color" value="{{ $student->skin_color }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Birth Sign') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="b_sign" name="b_sign" value="{{ $student->b_sign }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <h5>{{ __('Absense of Father') }}</h5>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Legal Guardian Name') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="lg_name" name="lg_name" value="{{ $student->lg_name }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_village" name="lg_village" value="{{ $student->lg_village }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('House No') }}</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_house" name="lg_house" value="{{ $student->lg_house }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('Post Office') }}</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_post" name="lg_post" value="{{ $student->lg_post }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('Thana') }}</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_thana" name="lg_thana" value="{{ $student->lg_thana }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lg_district" name="lg_district" value="{{ $student->lg_district }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">{{ __('Relationship With Guardian') }}</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="relationship" name="relationship" value="{{ $student->relationship }}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}">
                                            <span class="messages"></span>
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
