@extends('layouts.admin')

@section('content')

<div class="page-header card">
	<div class="row align-items-center">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-box bg-c-blue"></i>
				<div class="d-inline">
					<h5>{{ __('Student Information') }}</h5>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb breadcrumb-title float-left pl-0">
							<li class="breadcrumb-item">
								<a href="#"><span class="feather icon-home"></span></a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">{{ __('Student') }}</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">{{ __('Student Information') }}</a>
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
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 col-xl-12 m-b-30">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">{{ __('Student Information') }}</label>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="order-table"
                                            class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Roll No') }}</th>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Fathers Name') }}</th>
                                                    <th>{{ __('Mothers Name') }}</th>
                                                    <th>{{ __('Village') }}</th>
                                                    <th>{{ __('District') }}</th>
                                                    <th>{{ __('G.Name') }}</th>
                                                    <th>{{ __('G.Phone No') }}</th>
                                                    <th>{{ __('Image') }}</th>
                                                    <th>{{ __('Action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($students as $key => $student)
                                                <tr>
                                                    <td><b>{{ $key+1 }}</b></td>
                                                    <td>{{ $student->name_en }}</td>
                                                    <td>{{ $student->f_name_en }}</td>
                                                    <td>{{ $student->m_name_en }}</td>
                                                    <td>{{ $student->p_village }}</td>
                                                    <td>{{ $student->p_district }}</td>
                                                    <td>{{ $student->lg_name }}</td>
                                                    <td>{{ $student->phone }}</td>
                                                    <td><img src="{{ URL::to('storage/student/images/'.$student->image) }}" alt="{{ $student->image }}" height="100" width="100"></td>
                                                    <td style="white-space: nowrap; width: 1%;">
                                                        <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                                <a href="{{ route('student.show', $student->id) }}" type="button" class="btn btn-primary waves-effect waves-light"
                                                                    style="float: none;margin: 5px;">
                                                                    <span class="feather icon-eye"></span>
                                                                </a>
                                                                <a href="{{ route('student.edit', $student->id) }}" type="button" class="btn btn-primary waves-effect waves-light"
                                                                    style="float: none; margin: 5px;">
                                                                    <span class="feather icon-edit"></span>
                                                                </a>
                                                                <a href="{{ route('student.pdf', $student->id) }}" type="button" class="btn btn-info waves-effect waves-light"
                                                                    style="float: none; margin: 5px;">
                                                                    <span class="feather icon-download"></span>
                                                                </a>
                                                                <form id="del" action="{{ route('student.destroy', $student->id) }}" onclick="return confirm('{{ __('Are you sure you want to delete this Student?') }}');" method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                </form>
                                                                <a class="btn btn-danger waves-effect waves-light" onclick="document.getElementById('del').submit();" style="float: none;margin: 5px;">
                                                                    <span class="feather icon-trash"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
