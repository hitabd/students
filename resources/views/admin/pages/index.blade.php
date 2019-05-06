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
								<a href="{{route('home') }}"><span class="feather icon-home"></span></a>
							</li>
							<li class="breadcrumb-item">
								<a href="{{ route('event.index') }}">{{ __('Event') }}</a>
							</li>
							<li class="breadcrumb-item">
								<a href="{{ route('event.show', $event->id) }}">{{ __('Show Event') }}</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
            @permission('event-delete')
            <div class="float-right" style="padding:5px;">
                <form action="{{ route('event.destroy', $event->id) }}"
                    onclick="return confirm('{{ __('Are you sure you want to delete this item?') }}');" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger waves-effect waves-light" type="submit">
                        <i class="feather icon-trash">{{ __('Delete Event') }}</i>
                    </button>
                </form>
            </div>
            @endpermission
            @permission('user-update')
			<div class="float-right"  style="padding:5px;">
                <a href="{{ route('event.edit', $event->id) }}" class="btn btn-sm btn-primary bg-c-blue waves-effect waves-light" >
                    <i class="feather icon-edit">{{ __('Edit Event') }}</i>
                </a>
            </div>
            @endpermission
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
                                    <label class="col-sm-3 col-form-label">{{ __('Event Name') }}</label>
                                    <label class="col-sm-1 col-form-label">:</label>
                                    <label class="col-sm-4 col-form-label">{{  }}</label>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="order-table"
                                            class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Roll No</th>
                                                    <th>Name</th>
                                                    <th>Fathers Name</th>
                                                    <th>Mothers Name</th>
                                                    <th>Village</th>
                                                    <th>District</th>
                                                    <th>G.Name</th>
                                                    <th>G.Phone No</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                    <td>
                                                        <a href=""><button class="btn waves-effect waves-light btn-success btn-icon"><i class="ti-pencil"></i></button></a>
                                                        <a><button class="btn waves-effect waves-light btn-danger btn-icon"><i class="ti-trash"></i></button></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6 m-b-30">
                                <h4 class="title">{{ __('Surveys') }}</h4>
                                @foreach ($event->surveys as $key=>$survey)
                                    <div>
                                        <?php $i = $key+1; ?>
                                        <label class="col-sm-2 col-form-label">{{ '('.$i.')  ' }}</label>
                                        <label class="col-sm-8 col-form-label">{{  }}</label>
                                    </div>
                                @endforeach
                                <br><h4 class="title">{{ __('Depots') }}</h4>
                                @foreach ()
                                    <div>
                                        <label class="col-sm-2 col-form-label">{{  }}</label>
                                        <label class="col-sm-8 col-form-label">{{  }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection