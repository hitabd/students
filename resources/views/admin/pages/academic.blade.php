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
                    <i class="feather icon-edit">{{ __('Edit') }}</i>
                </a>
            </div>
            <div class="float-right" style="padding:5px;">
                <a href="{{ route('student.academic', $student->id) }}"
                    class="btn btn-sm btn-primary bg-c-blue waves-effect waves-light">
                    <i class="feather icon-info">{{ __('Academic') }}</i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 right">
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
                                        style="height:2 rem; font-size:20px; text-align:center;">Student
                                        Information</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Pre Academic Qualification') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $premadrasha->exam_class_name }}</label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __('Institute Name') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $premadrasha->institute_name}}</label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __('Result') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $premadrasha->result }}</ladobbel>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __('Board ') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $premadrasha->board }}</ladobbel>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Document No') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $premadrasha->document_no }}</ladobbel>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __('Admission Class ') }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $premadrasha->admission_class }}</ladobbel>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6 m-b-30">
                                <div class="form-group row">
                                    <span class="badge badge-primary"
                                        style="height:2 rem; font-size:20px; text-align:center;">Official Information
                                        </span>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __("Admission No") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $official->admission_no }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Admission Date") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $official->date }}</b></label>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label"><b>{{ __("Admitted Class") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $official->addmitted_to_class }}</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><b>{{ __("Roll") }}</b></label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{ $official->roll }}</label>
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