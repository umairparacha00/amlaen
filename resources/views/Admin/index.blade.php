@extends ('Admin.layouts.app')
@section('style')
	<style>
        /*.c-wraper {*/
        /*    min-height: 130px;*/
        /*    text-align: center;*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    flex-direction: column;*/
        /*    padding: 2em 0;*/
        /*}*/

        /*.c-wraper h2,*/
        /*.c-wraper h2 i {*/
        /*    color: #7367f0;*/
        /*    font-weight: 600;*/
        /*    font-size: 2.5rem;*/
        /*}*/

        /*.c-wraper p {*/
        /*    color: #10163a;*/
        /*    font-size: 1.2rem;*/
        /*    margin-left: 1.3em;*/
        /*}*/


        .btn-primary {
            border-color: #4839EB !important;
            background-color: #7367F0 !important;
            color: #FFF;
        }


        /*.user-update a {*/
        /*    background-color: #FF9F43;*/
        /*    color: #fff;*/
        /*    padding: 10px 25px;*/
        /*    width: 150px;*/
        /*    text-align: center;*/
        /*    text-transform: uppercase;*/
        /*    font-size: 1rem;*/
        /*    border-radius: 4px;*/
        /*}*/

        /*.user-update a:hover {*/
        /*    box-shadow: 0 0 15px #FF9F43;*/
        /*    border-width: 0;*/
        /*    transition: all 0.2s;*/
        /*    color: #fff;*/
        /*}*/
	</style>
@endsection
@section ('content')
	<div class="scrollbar-container">
	</div>
	<section id="dashboard-analytics">
		<div class="row">
			<div class="col-md-12">
				<div class="main-card mb-3 card">
					<div class="card-header">Active Users
						<div class="btn-actions-pane-right">
							<div role="group" class="btn-group-sm btn-group">
								<button class="active btn btn-focus">Last Week</button>
								<button class="btn btn-focus">All Month</button>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="align-middle mb-0 table table-borderless table-striped table-hover">
							<thead>
							<tr>
								<th class="text-center">ID</th>
								<th>Name</th>
								<th class="text-center">Sponsor</th>
								<th class="text-center">Status</th>
								<th class="text-center" style="width:40px;padding-right: 25px">Actions</th>
							</tr>
							</thead>
							<tbody>
							@foreach ($admins as $admin)
								<tr>
									<td class="text-center text-muted">{{ $admin->id }}</td>
									<td>
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">
												<div class="widget-content-left mr-3">
													<div class="widget-content-left">
														<img class="rounded-circle" src="@if($admin->user_file){{ asset('storage/'. $admin->user_file) }}@else{{ 'https://ui-avatars.com/api/?size=128&background=645bd3&color=fff&name='. $admin->name }} @endif" alt=""
															 height="40" width="40">
													</div>
												</div>
												<div class="widget-content-left flex2">
													<div class="widget-heading">{{ $admin->name }}</div>
													<div class="widget-subheading opacity-7">Web Developer</div>
												</div>
											</div>
										</div>
									</td>
									<td class="text-center">{{ $admin->sponsor}}</td>
									<td class="text-center">
										<div class="badge
											@if ($admin->status === 0)
												badge-warning
											@elseif($admin->status === 1)
												badge-success
											@elseif($admin->status === 2)
												badge-danger
											@elseif($admin->status === 3)
												badge-dark
											@endif">
											@if ($admin->status === 0)
												Inactive
											@elseif($admin->status === 1)
												Active
											@elseif($admin->status === 2)
												Suspended
											@elseif($admin->status === 3)
												Blocked
											@endif</div>
									</td>
									<td class="text-center">
										{{--										<button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details--}}
										{{--										</button>--}}
										<div class="d-flex justify-content-around align-items-center">
											<a href="" class="text-muted">
												<i class="fal fa-window-frame-open"></i>
											</a>
											<a href="" class="text-muted">
												<i class="fal fa-edit"></i>
											</a>
											<a href="" class="text-muted">
												<i class="fal fa-trash-alt"></i>
											</a>
										</div>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
					<div class="d-block text-center card-footer">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section ('page-script')
@endsection
