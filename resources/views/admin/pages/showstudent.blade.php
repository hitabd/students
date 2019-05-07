@extends('layouts.admin')

@section('content')

<div class="page-header card">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="page-header-title">
                <i class="feather icon-box bg-c-blue"></i>
                <div class="d-inline">
                    <h5>{{ __('Student Information') }}</h5>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb breadcrumb-title float-left pl-0">
                            <li class="breadcrumb-item">
                                <a href="{{route('home') }}"><span class="feather icon-home"></span></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('student.index') }}">{{ __('Student') }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('student.show', $student->id) }}">{{ __('Student Information') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="float-right" style="padding:5px;">
                <form action="{{ route('student.destroy', $student->id) }}"
                    onclick="return confirm('{{ __('Are you sure you want to delete this Student Information?') }}');"
                    method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger waves-effect waves-light" type="submit">
                        <i class="feather icon-trash">{{ __('Delete') }}</i>
                    </button>
                </form>
            </div>
            <div class="float-right" style="padding:5px;">
                <a href="{{ route('student.edit', $student->id) }}"
                    class="btn btn-sm btn-primary bg-c-blue waves-effect waves-light">
                    <i class="feather icon-edit">{{ __('Edit Student') }}</i>
                </a>
            </div>
            <div class="float-right" style="padding:5px;">
                <a href="{{ route('student.academic', $student->id) }}"
                    class="btn btn-sm btn-primary bg-c-blue waves-effect waves-light">
                    <i class="feather icon-info">{{ __('Academic') }}</i>
                </a>
            </div>
        </div>
        <div class="col-lg-2 right">
            <img src="{{ URL::to('storage/student/images/'.$student->image) }}" alt="{{ $student->image }}" height="100"
                width="100">
        </div>
    </div>
    <hr>
</div>

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 col-xl-6 m-b-30">
                                <div class="form-group row">
                                    <span class="badge badge-primary"
                                        style="height:2 rem; font-size:20px; text-align:center;">{{ __('Student Information') }}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Student Name') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->name_en }}</label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __('Student Name (Bengali)') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->name_bn }}</label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __('Students Date of Birth') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->dob }}</label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __('Students Blood Group') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->b_group }}</label>
                                </div>
                                {{-- <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Students Height') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->height }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Students Weight') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->weight }}</label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __('Students Skin Color') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->skin_color }}</label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __('Students Birth Sign') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->b_sign }}</label>
                                </div> --}}
                                <div class="form-group row">
                                    <span class="badge badge-primary"
                                        style="height:2 rem; font-size:20px; text-align:center;">{{ __('Father Information') }}</span>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __("Father's Name (Bengali)") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->f_name_bn }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Father's Name") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->f_name_en }}</label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __("Father's Occupation") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->f_occupation }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Father's Income") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->f_income }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Father's Phone NO") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label"></label>
                                </div>
                                <div class="form-group row">
                                        <span class="badge badge-primary"
                                            style="height:2 rem; font-size:20px; text-align:center;">{{ __('Mother Information') }}</span>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-3 col-form-label"><b>{{ __("Mother's Name (Bengali)") }}</b></label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <label class="col-sm-4 col-form-label">{{ $student->m_name_bn }}</label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Name") }}</b></label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <label class="col-sm-4 col-form-label">{{ $student->m_name_en }}</b></label>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-3 col-form-label"><b>{{ __("Mother's Occupation") }}</b></label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <label class="col-sm-4 col-form-label">{{ $student->m_occupation }}</label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Income") }}</b></label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <label class="col-sm-4 col-form-label">{{ $student->m_income }}</label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Phone NO") }}</b></label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <label class="col-sm-4 col-form-label"></label>
                                    </div>
                            </div>
                            <div class="col-sm-12 col-xl-6 m-b-30">
                                    <div class="form-group row">
                                        <span class="badge badge-primary"
                                            style="height:2 rem; font-size:20px; text-align:center;"></span>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><b>{{ __('Students Height') }}</b></label>
                                            <label class="col-sm-1 col-form-label">:</label>
                                            <label class="col-sm-4 col-form-label">{{ $student->height }}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><b>{{ __('Students Weight') }}</b></label>
                                            <label class="col-sm-1 col-form-label">:</label>
                                            <label class="col-sm-4 col-form-label">{{ $student->weight }}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label"><b>{{ __('Students Skin Color') }}</b></label>
                                            <label class="col-sm-1 col-form-label">:</label>
                                            <label class="col-sm-4 col-form-label">{{ $student->skin_color }}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label"><b>{{ __('Students Birth Sign') }}</b></label>
                                            <label class="col-sm-1 col-form-label">:</label>
                                            <label class="col-sm-4 col-form-label">{{ $student->b_sign }}</label>
                                        </div>
                                {{-- <div class="form-group row">
                                    <span class="badge badge-primary"
                                        style="height:2 rem; font-size:20px; text-align:center;">{{ __('Mother Information') }}</span>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __("Mother's Name (Bengali)") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->m_name_bn }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Name") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->m_name_en }}</b></label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __("Mother's Occupation") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->m_occupation }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Income") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->m_income }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Phone NO") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
<<<<<<< Updated upstream
                                    <label class="col-sm-4 col-form-label">{{ $student->m_phone }}</label>
                                </div>
=======
                                    <label class="col-sm-4 col-form-label"></label>
                                </div> --}}
>>>>>>> Stashed changes
                                <div class="form-group row">
                                    <span class="badge badge-primary"
                                        style="height:2 rem; font-size:20px; text-align:center;">{{ __('Present Address') }}
                                    </span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Village') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->p_village }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('House No') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->p_house }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Post Office') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->p_post }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Thana') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <?php
                                        $p_thana = DB::table('upazilas')->where('upazilas.id',$student->p_thana)->select('name')->first();
                                    ?>
                                    <label class="col-sm-4 col-form-label">{{ $p_thana->name }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('District') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <?php
                                        $p_district = DB::table('districts')->where('districts.id',$student->p_district)->select('name')->first();
                                    ?>
                                    <label class="col-sm-4 col-form-label">{{ $p_district->name }}</label>
                                </div>
                                <div class="form-group row">
                                    <span class="badge badge-primary"
                                        style="height:2 rem; font-size:20px; text-align:center;">{{ __('Permanent Address') }}
                                    </span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Village') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->per_village }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('House No') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->per_house }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Post Office') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->per_post }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Thana') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <?php
                                        $per_thana = DB::table('upazilas')->where('upazilas.id',$student->per_thana)->select('name')->first();
                                    ?>
                                    <label class="col-sm-4 col-form-label">{{ $per_thana->name }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('District') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <?php
                                        $per_district = DB::table('districts')->where('districts.id',$student->per_district)->select('name')->first();
                                    ?>
                                    <label class="col-sm-4 col-form-label">{{ $per_district->name }}</label>
                                </div>
                                <div class="form-group row">
                                    <span class="badge badge-primary"
                                        style="height:2 rem; font-size:20px; text-align:center;">{{ __('Gurdian Information') }}
                                    </span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Village') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->lg_village }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('House No') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->lg_house }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Post Office') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->lg_post }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Thana') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <?php
                                        $lg_thana = DB::table('upazilas')->where('upazilas.id',$student->lg_thana)->select('name')->first();
                                    ?>
                                    <label class="col-sm-4 col-form-label">{{ $lg_thana->name }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('District') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <?php use Illuminate\Support\Facades\DB;
                                        $lg_district = DB::table('districts')->where('districts.id',$student->lg_district)->select('name')->first();
                                    ?>
                                    <label class="col-sm-4 col-form-label">{{ $lg_district->name }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Relation') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->relationship }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Gurdian's Phone NO") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->phone}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
