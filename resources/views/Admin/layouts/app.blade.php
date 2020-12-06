<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	@yield('meta')
	<meta name="viewport"
		  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
	<link href="{{ asset ('assets/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset ('assets/css/all.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Proza+Libre:ital,wght@1,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	@yield('style')
	<livewire:styles />
</head>

<body>
<div id="ni-09"
	 class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
	<div class="app-header header-shadow">
		<div class="app-header__logo">
			<div class="logo-src">
				<h2>Amlaen</h2>
			</div>
			<div class="header__pane ml-auto">
				<div>
					<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
							data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
					</button>
				</div>
			</div>
		</div>
		<div class="app-header__mobile-menu">
			<div>
				<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
				</button>
			</div>
		</div>
		<div class="app-header__menu">
                <span>
                    <button type="button"
							class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fal fa-ellipsis-v"></i>
                        </span>
                    </button>
                </span>
		</div>
		<div class="app-header__content">
			<div class="app-header-right">
				<div class="header-btn-lg pr-0">
					<div class="widget-content p-0">
						<div class="widget-content-wrapper">
							<div class="widget-content-left header-user-info">
								<div class="widget-heading">
									{{ current_admin()->name ?? 'Umair' }}
								</div>
								<div class="widget-subheading">
									Admin
								</div>
							</div>
							<div class="widget-content-left ml-3">
								<div class="btn-group">
									<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
									   class="p-0 btn d-flex align-items-center">
										<img width="42" height="42" class="rounded-circle"
											 											 src="@if(current_admin()->user_file){{ asset('storage/'. current_admin()->user_file) }}@else{{ 'https://ui-avatars.com/api/?background=645bd3&color=fff&name=' . current_admin()->name }} @endif"
											 alt="">
										<i class="fal fa-angle-down ml-2 fa-2x"></i>
									</a>
									<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
										<a href="{{ url('/profile') }}" type="button" tabindex="0"
										   class="dropdown-item">Profile
										</a>
										<a href="{{ '/admin/logout' }}" tabindex="1"
										   class="dropdown-item">{{ __('Logout') }}
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="app-main">
		<div class="app-sidebar sidebar-shadow">
			<div class="app-header__logo">
				<div class="logo-src">
					<h2>Amlaen</h2>
				</div>
				<div class="header__pane ml-auto">
					<div>
						<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
								data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
						</button>
					</div>
				</div>
			</div>
			<div class="app-header__mobile-menu">
				<div>
					<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
					</button>
				</div>
			</div>
			<div class="app-header__menu">
                    <span>
                        <button type="button"
								class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fal fa-ellipsis-v"></i>
                            </span>
                        </button>
                    </span>
			</div>
			<div class="scrollbar-sidebar">
				<div class="app-sidebar__inner">
					<ul class="vertical-nav-menu">
						<li>
							<a href="{{ url('/admin/dashboard') }}"
							   class="{{ Request::path() === 'admin/dashboard' ? 'mm-active' : '' }}">
								<i class="metismenu-icon fal fa-tachometer-alt-average"></i>
								Dashboard
							</a>
						</li>
						<li class="{{ Request::is('admin/resources*') ?  'mm-active' : '' }}">
							<a href="#">
								<i class="metismenu-icon fal fa-th-large"></i>
								Resources
								<i class="metismenu-state-icon fal fa-angle-right"></i>
							</a>
							<ul>
								<li>
									<a href="{{ route('admins.index') }}"
									   class="mb-0 {{ Request::is('admin/resources/admins*') ? 'mm-active' : '' }}">
										<i class="fal fa-circle mr-3 fx-6">
										</i>Admins
									</a>
								</li>
								<li>
									<a href="{{ route('users.index') }}"
									   class="mb-0 {{ Request::is('admin/resources/users*') ? 'mm-active' : '' }}">
										<i class="fal fa-circle mr-3 fx-6">
										</i>Users
									</a>
								</li>
							</ul>
						</li>
						<li class="@if(Request::is('admin/transactions'))
						mm-active
						@endif
						@if(Request::is('admin/create-points'))
						mm-active
						@endif"
						>
							<a href="#">
								<i class="metismenu-icon fal fa-usd-circle"></i>
								Transactions
								<i class="metismenu-state-icon fal fa-angle-right"></i>
							</a>
							<ul>
								<li>
									<a href="{{ url('/admin/transactions') }}"
									   class="{{ Request::path() === 'admin/transactions' ? 'mm-active' : '' }}">
										<i class="fal fa-circle mr-3 fx-6"></i>Transactions
									</a>
								</li>
								<li>
									<a href="{{ url('/admin/create-points')}}"
									   class="{{ Request::path() === 'admin/create-points' ? 'mm-active' : '' }}">
										<i class="fal fa-circle mr-3 fx-6"></i>Create Points
									</a>
								</li>
							</ul>
						</li>
						<li class="{{ Request::is('admin/settings*') ?  'mm-active' : '' }}">
							<a href="#">
								<i class="metismenu-icon fal fa-cog"></i>Settings
								<i class="metismenu-state-icon fal fa-angle-right"></i>
							</a>
							<ul>
								<li>
									<a href="/admin/settings/change-password"
									   class="{{ Request::path() === 'admin/settings/change-password' ? 'mm-active' : '' }}">
										<i class="fal fa-circle mr-3 fx-6"></i>Change Password
									</a>
								</li>
								<li>
									<a href="/admin/settings/change-pin"
									   class="{{ Request::path() === 'admin/settings/change-pin' ? 'mm-active' : '' }}">
										<i class="fal fa-circle mr-3 fx-6"></i>Change Pin
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="app-main__outer">
			<div class="app-main__inner">
				@yield('content')
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
<livewire:scripts>
<script type="text/javascript" src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@yield('page-script')
@include('sweetalert::alert')

</body>

</html>
