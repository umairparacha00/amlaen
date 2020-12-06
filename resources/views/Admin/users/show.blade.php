@extends ('Admin.layouts.app')
@section('style')
	<style>
        h3 {
            color: black;
        }

        .profile-outer {
            background-color: white;
            margin-left: 0;
            margin-right: 0;
            padding: 26px;
        }
		
        .column-name {
            color: #8d9196;
        }

        .column-data {
            color: #3b3b3c;
        }

        .main {
            padding-top: 1.25em;
            padding-bottom: .8em;
            border-bottom: 1px solid #e3e7eb;
		}
		
		.destroy{
			padding: 3px 13px 3px 13px;
			background-color: #ff9f43;
			border-radius: 3px;
			font-size: 1.4rem;
			cursor: pointer;
			color: white !important;
		}
        .destroy:hover {
            box-shadow: 0 0 10px #FF9F43;
            border-width: 0;
            transition: all 0.2s;
            color: #fff;
        }
        .edit{
            padding: 3px 11px 3px 13px;
            background-color: #645bd3;
            border-radius: 3px;
            font-size: 1.4rem;
			cursor: pointer;
			color: white;
        }
        .edit:hover {
            box-shadow: 0 0 10px #574dcf;
            border-width: 0;
            transition: all 0.2s;
            color: #fff;
        }
	</style>
@endsection
@section ('content')
	<div class="scrollbar-container">
	</div>
	<div>
		<div>
			<div class="d-flex justify-content-between align-items-center pb-2">
				<div><h3>User</h3></div>
				<div>
					<div class="d-flex justify-content-around align-items-center mr-5">
						<a class="destroy mr-4">
							<form action="{{ route('users.destroy', $user->id) }}" method="POST" id="{{ $user->id }}">
								@csrf
								@method('DELETE')
							</form>
							<i class="fal fa-trash-alt"></i>
						</a>
						<a href="{{ route('users.edit', $user->id) }}" class="edit">
							<i class="fal fa-edit"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="profile-outer">
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>ID</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->id }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>Account ID</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->account_id }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>User Name</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->username }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>Sponsor</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->sponsor }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>Full Name</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->name }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>Status</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<div class="badge
											@if ($user->status === 0)
								badge-warning
@elseif($user->status === 1)
								badge-success
@elseif($user->status === 2)
								badge-danger
@elseif($user->status === 3)
								badge-dark
@endif">
							@if ($user->status === 0)
								Inactive
							@elseif($user->status === 1)
								Active
							@elseif($user->status === 2)
								Suspended
							@elseif($user->status === 3)
								Blocked
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>CNIC</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->cnic }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>Personal Pin</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->pl_pin }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>Date Of Birth</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->date_of_birth }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>Mobile Number</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->phone }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>City</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->city }}</h6>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-lg-4">
					<div class="profile-inner column-name">
						<h6>Address</h6>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="profile-inner column-data">
						<h6>{{ $user->address }}</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section ('page-script')
	<script>
        $(".destroy").on('click', function () {
            axios.post('/admin/resources/getUserDetailsForDestroying', {
                "id": {{ $user->id }},
            }).then(function (response) {
                Swal.fire({
                    title: response.data.name,
                    text: 'Are you sure, you want to delete ' + response.data.username + ' !',
                    position: "top",
                    showCancelButton: true,
                    confirmButtonColor: '#218838',
                    cancelButtonColor: '#c82333',
                    confirmButtonText: 'Proceed!'
                }).then((result) => {
                    if (result.value) {
                        $('#'+{{ $user->id }}).submit()
                    }
                })
            }).catch((error) => {
                const errors = error.response.data.errors
                const firstItem = Object.keys(errors)[0];
                const firstErrorMessage = errors[firstItem][0]

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: false,
                    onOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
                Toast.fire({
                    icon: 'error',
                    title: firstErrorMessage
                });
            });
        })
	
	</script>
@endsection