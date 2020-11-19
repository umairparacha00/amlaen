@extends ('Admin.layouts.app')
@section('style')
    <style>
        /* Section  */
        .bg-analytics {
            background: -webkit-linear-gradient(332deg, #7367F0, rgba(115, 103, 240, .7));
            background: linear-gradient(118deg, #7367F0, rgba(115, 103, 240, .7));
        }

        #dashboard-analytics .img-left {
            max-width: 175px;
            position: absolute;
            top: 0;
            left: 0;
        }

        #dashboard-analytics .img-right {
            max-width: 175px;
            position: absolute;
            top: 0;
            right: 0;
        }

        #dashboard-analytics .bg-analytics .avatar {
            margin-bottom: 2rem;
        }

        .avatar {
            white-space: nowrap;
            background-color: #C3C3C3;
            position: relative;
            cursor: pointer;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            font-size: .75rem;
            text-align: center;
            border-radius: 50%;
            margin: 5px;
        }

        .avatar.avatar-xl .avatar-content,
        .avatar.avatar-xl img {
            height: 70px;
            width: 70px;
        }

        .c-wraper {
            min-height: 130px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 2em 0;
        }

        .c-wraper h2,
        .c-wraper h2 i {
            color: #7367f0;
            font-weight: 600;
            font-size: 2.5rem;
        }

        .c-wraper p {
            color: #10163a;
            font-size: 1.2rem;
            margin-left: 1.3em;
        }

        .user-inner {
            height: 246px;
        }

        .username-right-detail {
            padding-left: 1.5em;
            padding-top: 1.5em;
            margin-bottom: 14px;
        }

        .username-right-card {
            overflow: hidden;
            padding-bottom: 10px;
        }

        .label {
            float: left;
            width: 150px;
            color: #999;
            font-size: 15px;
        }

        .btn-primary {
            border-color: #4839EB !important;
            background-color: #7367F0 !important;
            color: #FFF;
        }

        .label-info {
            font-size: 15px;
            color: #555;
            padding-left: 5px;
            overflow: hidden;
        }

        .user-update {
            padding-left: 25px;
            font-size: 15px;
            color: #fff;
            margin-bottom: 1em;
        }

        .user-update a {
            background-color: #FF9F43;
            color: #fff;
            padding: 10px 25px;
            width: 150px;
            text-align: center;
            text-transform: uppercase;
            font-size: 1rem;
            border-radius: 4px;
        }

        .user-update a:hover {
            box-shadow: 0 0 15px #FF9F43;
            border-width: 0;
            transition: all 0.2s;
            color: #fff;
        }

        .user-detail-buttons.text-center {
            padding-left: 0;
        }

        .user-detail-right-section .user-detail-buttons {
            padding-right: 0;
        }

        .user-detail-buttons .btn.btn-success {
            background-color: #7367F0;
            border: 1px solid #7367F0;
        }

        .user-detail-right-section .user-detail-buttons .btn {
            font-size: 24px !important;
            padding: 12px 25px !important;
            width: 224px !important;
            margin-right: 1px !important;
            margin-bottom: 20px !important;
        }

        @media (min-width: 1697px) {
            .user-inner {
                height: 220px;
            }
        }

        @media (max-width: 576px) {
            .img-right {
                width: 130px;
            }

            .img-left {
                width: 130px;
            }
        }

        @media (max-width: 1200px) {
            .user-inner {
                height: 236px;
            }
        }
    </style>
@endsection
@section ('content')
    <div class="scrollbar-container">
    </div>
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-xl-5 col-12">
                <div class="card bg-analytics text-white">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <img src="{{ asset ('assets/images/decore-left.png') }}" class="img-left" alt="
                                      card-img-left">
                            <img src="{{ asset ('assets/images/decore-right.png') }}" class="img-right" alt="
                                      card-img-right">
                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                <div class="avatar-content">
                                    <i class="fal fa-award white fa-3x pt-3"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-2 text-white">Hi,
{{--                                    {{ current_user()->name }}--}}
                                </h1>
                                <p class="m-auto w-75">Let's <strong>Take</strong> your
                                    <strong>Earnings</strong> to next level, And it depends on your
                                    <strong>Effort</strong>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="user-inner">
                        <div class="username-right-detail">
                            <div class="username-right-card">
                                <div class="label">Joining Date :</div>
                                <div class="label-info">
{{--                                    {{current_user()->created_at->format('d M Y') }}--}}
                                </div>
                            </div>
                            <div class="username-right-card">
                                <div class="label">Last Login :</div>
                                <div class="label-info">
{{--                                    {{ Carbon\Carbon::parse(auth()->user()->last_logged_at)->format('d M Y') }}--}}
                                </div>
                            </div>
                            <div class="username-right-card">
                                <div class="label"> Membership Type :</div>
                                <div class="label-info">
{{--                                    {{ current_user()->membership()->name }}--}}
                                </div>
                            </div>
                            <div class="username-right-card">
                                <div class="label"> Upgrade Expires :</div>
                                <div class="label-info">20 Oct, 2020</div>
                            </div>
                        </div>
                        <div class="user-update">
                            <a href="/purchase/membership" class="nav-link">Upgrade
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="user-inner">
                        <div class="row-cols-3 pt-4 pb-4">
                            <div class="col-12">
                                <a href="{{ route('profile.edit') }}" class="btn btn-success btn-block mb-3">
                                    Edit Profile
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="/advertisers/view-ads" class="btn btn-primary btn-block mb-3">
                                    View Ads
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{ url('/network/referral-link') }}" class="btn btn-primary btn-block">
                                    RefBanner
                                </a> <br class="db-sm-none">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="c-wraper">
                        <h2>
                            <span><i class="fal fa-badge-dollar" style="font-weight: 300;"></i></span>
{{--                            {{ number_format(current_user()->balance->main_balance, 2, '.', ',')}}--}}
                        </h2>
                        <p>Main Points</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="c-wraper">
                        <h2><span><i class="fal fa-badge-dollar" style="font-weight: 300;"></i></span>
{{--                            {{ number_format(current_user()->balance->group_balance, 2 , '.', ',') }}--}}
                        </h2>
                        <p>Group Points</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <div class="c-wraper">
                        <h2><span><i class="fal fa-badge-dollar" style="font-weight: 300;"></i></span>
{{--                            {{ number_format(current_user()->balance->mall_balance, 2, '.', ',') }}--}}
                        </h2>
                        <p>Mall Points</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <div class="c-wraper">
                        <h2><span><i class="fal fa-badge-dollar" style="font-weight: 300;"></i></span>
{{--                            {{ number_format(current_user()->balance->ad_power_balance, 2, '.', ',') }}--}}
                        </h2>
                        <p>Silver Pack</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <div class="c-wraper">
                        <h2><span><i class="fal fa-badge-dollar" style="font-weight: 300;"></i></span>
                            0</h2>
                        <p>Gold Pack</p>
                    </div>
                </div>
            </div>
        </div>
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
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th class="text-center">City</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center text-muted">#345</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img class="rounded-circle" src="assets/images/avatars/4.jpg" alt="" width="40">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">John Doe</div>
                                                <div class="widget-subheading opacity-7">Web Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Madrid</td>
                                <td class="text-center">
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">#347</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img class="rounded-circle" src="assets/images/avatars/3.jpg" alt="" width="40">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">Ruben Tillman</div>
                                                <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Berlin</td>
                                <td class="text-center">
                                    <div class="badge badge-success">Completed</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">#321</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img class="rounded-circle" src="assets/images/avatars/2.jpg" alt="" width="40">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">Elliot Huber</div>
                                                <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">London</td>
                                <td class="text-center">
                                    <div class="badge badge-danger">In Progress</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">#55</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img class="rounded-circle" src="assets/images/avatars/1.jpg" alt="" width="40"></div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">Vinnie Wagstaff</div>
                                                <div class="widget-subheading opacity-7">UI Designer</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Amsterdam</td>
                                <td class="text-center">
                                    <div class="badge badge-info">On Hold</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                        <button class="btn-wide btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section ('page-script')
@endsection
