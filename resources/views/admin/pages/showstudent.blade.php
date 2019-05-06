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
        <div class="col-lg-4">
            <div class="float-right" style="padding:5px;">
                <form action="{{ route('student.destroy', $student->id) }}"
                    onclick="return confirm('{{ __('Are you sure you want to delete this Student Information?') }}');" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger waves-effect waves-light" type="submit">
                        <i class="feather icon-trash">{{ __('Delete Student Information') }}</i>
                    </button>
                </form>
            </div>
			<div class="float-right"  style="padding:5px;">
                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-primary bg-c-blue waves-effect waves-light" >
                    <i class="feather icon-edit">{{ __('Edit student') }}</i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 right">
            <img src="{{ URL::to('storage/student/images/'.$student->image) }}" alt="{{ $student->image }}" height="100" width="100">
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
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Student Name') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->name_en }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Student Name (Bengali)') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->name_bn }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Father's Name (Bengali)") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->f_name_bn }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Father's Name") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->f_name_en }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Father's Occupation") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->f_occupation }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Father's Income") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->f_income }}</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6 m-b-30">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Name (Bengali)") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->m_name_bn }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Name") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $student->m_name_en }}</b></label>
                                </div>
                                <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Occupation") }}</b></label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <label class="col-sm-4 col-form-label">{{ $student->m_occupation }}</label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><b>{{ __("Mother's Income") }}</b></label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <label class="col-sm-4 col-form-label">{{ $student->m_income }}</label>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


