@extends ('layouts.app')
@section('style')
	<style type="text/css">
        .new-form-container .tab-content form .form-control {
            height: 36px;
            font-size: 13px;
            border-radius: 0;
        }

        .btn-primary {
            border-color: #4839EB !important;
            background-color: #7367F0 !important;
            color: #FFF;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .new-form-container .tab-content {
            padding: 36px 30px;
        }

        .new-form-container {
            background-color: #ffffff;
            -webkit-box-shadow: 8px 5px 17px -7px #ccc;
            box-shadow: 8px 5px 17px -7px #ccc;
        }

        .new-form-container h1 {
            margin-left: 0;
            margin-bottom: 0;
            text-align: center;
            background-color: #7367F0;
            color: #fff;
            font-size: 38px;
            padding: 16px 0 15px;
            position: relative;
            font-family: Lato-Bold, sans-serif;
        }

        .new-form-container h1:after {
            display: block;
            content: "";
            height: 6px;
            background-color: #FF9F43;
            width: inherit;
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            bottom: 0;
        }

        .new-form-container .tab-content form .btn {
            background-color: #FF9F43;
            padding: .58rem .75rem;
            border: 1px solid #FF9F43;
            color: #fff;
            text-transform: capitalize;
            margin: 0 auto;
            border-radius: 0.25rem;
        }

        .new-form-container .tab-content form .btn:hover {
            box-shadow: 0 0 15px #FF9F43;
            transition: all 0.2s;
            color: #fff;
        }

        .select-top-spacing {
            padding-top: 2.4em;
        }

        .t_t1 thead {
            background: #f1f2f7;
        }

        .t_t1 thead th {
            color: #212529;
            border: 1px solid #e7e7e7;
        }

        .t_t1 tbody tr td {
            vertical-align: top;
            color: inherit;
            letter-spacing: .7px;
            border: 1px solid #e7e7e7;
            font-size: .86rem;
        }

        .custom-page-digits {
            padding-right: 8px;
        }

        .custom-page-digits>a,
        .custom-page-item>a {
            color: #9a9a9a !important;
        }

        .page-item.active .page-link {
            background-color: #FF9F43;
            border-color: #FF9F43;
            color: #ffffff !important;
        }

        @media (max-width: 575.98px) and (min-width: 320px) {
            .new-form-container .tab-content form .btn {
                font-size: 14px;
                padding: 8px 10px;
            }
        }
	</style>
@endsection
@section ('content')
	<div class="scrollbar-container">
	</div>
	<div class="new-form-container row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pr-0 pl-0">
			<h1>Transactions</h1>
			<div class="tab-content">
				<div>
					<!---->
					<div class="table-responsive">
						<table class="table table-bordered t_t1">
							<thead>
							<tr>
								<th>#</th>
								<th>Full Name</th>
								<th>CNIC Image</th>
                                <th>Bank Or Bill</th>
                                <th>Action</th>
							</tr>
							</thead>
							@foreach ($users as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->name }}</td>
									<td>
                                        <a href="#">
                                            <img width="150" height="150"
                                                 src="@if($user->user_file){{ asset('storage/'. $user->user_file) }}
                                                 @else{{ 'https://ui-avatars.com/api/?background=645bd3&color=fff&name=' . $user->name }}
                                                 @endif"
                                                 alt=""
                                            >
                                        </a>
                                    </td>
									<td>Hello</td>
								</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section ('page-script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
			integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
			crossorigin="anonymous"></script>
	<script>
        $(document).ready(function () {
            $('#u-pic').change(function (e) {
                var fileName = e.target.files[0].name;
                var myElement = document.getElementById('clip3');
                if (myElement) {
                    myElement.remove();
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip3';
                    clipDiv.classList.add('clip3');
                    document.getElementById("ct2").appendChild(clipDiv);
                    document.getElementById('clip3').innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                } else {
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip3';
                    clipDiv.classList.add('clip3');
                    document.getElementById("ct2").appendChild(clipDiv);
                    document.getElementById("clip3").innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                }
            });
        });
        $(document).ready(function () {
            $('#u-cnic').change(function (e) {
                var fileName = e.target.files[0].name;
                var myElement = document.getElementById('clip');
                if (myElement) {
                    myElement.remove();
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip';
                    clipDiv.classList.add('clip');
                    document.getElementById("ct").appendChild(clipDiv);
                    document.getElementById('clip').innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                } else {
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip';
                    clipDiv.classList.add('clip');
                    document.getElementById("ct").appendChild(clipDiv);
                    document.getElementById("clip").innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                }
            });
        });
        $(document).ready(function () {
            $('#u-bill').change(function (e) {
                var fileName = e.target.files[0].name;
                var myElement = document.getElementById('clip1');
                if (myElement) {
                    myElement.remove();
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip1';
                    clipDiv.classList.add('clip');
                    document.getElementById("ct1").appendChild(clipDiv);
                    document.getElementById('clip1').innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                } else {
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip1';
                    clipDiv.classList.add('clip');
                    document.getElementById("ct1").appendChild(clipDiv);
                    document.getElementById("clip1").innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                }
            });
        });
	</script>
@endsection