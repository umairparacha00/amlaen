@extends ('layouts.app')
@section('style')
    <style type="text/css">
        .nav.nav-tabs {
            border: none;
            margin-bottom: 1rem;
            border-radius: 0;
        }

        .nav.nav-tabs,
        .nav.nav-tabs .nav-item {
            position: relative;
        }

        .nav.nav-tabs .nav-item .nav-link {
            color: #999;
            font-size: 1.1rem;
            border: none;
            min-width: auto;
            font-weight: 500;
            padding: .61rem .635rem;
            border-radius: 0;
        }

        .nav.nav-tabs .nav-item .nav-link.active {
            border: none;
            position: relative;
            color: #7367F0;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
            background-color: transparent;
        }

        .nav.nav-tabs .nav-item .nav-link.active:after {
            content: attr(data-before);
            height: 2px;
            width: 100%;
            left: 0;
            position: absolute;
            bottom: 0;
            top: 100%;
            background: -webkit-linear-gradient(60deg, #7367F0, rgba(115, 103, 240, .5)) !important;
            background: linear-gradient(30deg, #7367F0, rgba(115, 103, 240, .5)) !important;
            box-shadow: 0 0 8px 0 rgba(115, 103, 240, .5) !important;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
            -webkit-transition: all .2s linear;
            transition: all .2s linear;
        }

        .new-form-container .tab-content form .form-control {
            height: 36px;
            font-size: 1rem;
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

        .content-area {
            min-height: 450px;
            padding: 40px 0;
        }

        .new-form-container .tab-content {
            padding: 36px 30px;
        }

        .new-form-container {
            background-color: #ffffff;
            -webkit-box-shadow: 8px 5px 17px -7px #ccc;
            box-shadow: 8px 5px 17px -7px #ccc;
        }

        .new-form-container .nav-tabs.nav {
            padding: 1.5em 1.5em 0 1.5em;
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
        }

        .new-form-container h1:after {
            display: block;
            content: "";
            height: 6px;
            background-color: #FF9F43;
            width: auto;
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
    </style>
    <style>
        .m-h-0897 {
            table-layout: fixed;
            width: 100%
        }

        .m-h-0897 > thead {
            background: #f1f2f7
        }

        .m-h-0897 > tbody {
            background: #fff
        }

        .m-h-0897 > tbody > tr > td,
        .m-h-0897 > thead > tr > th {
            color: #555;
            border: 1px solid #e7e7e7;
            vertical-align: middle
        }

        @media (min-width: 768px) {
            .op-6 {
                padding-top: 2.4rem;
            }
        }
    </style>
@endsection
@section ('content')
    <div class="scrollbar-container">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="new-form-container">
                <h1>AdPower</h1>
                <ul role="tablist" class="nav nav-tabs">
                    <li class="nav-item"><a href="#investment" role="tab" data-toggle="tab" class="nav-link active"
                                            aria-selected="true"><i class="fal fa-cart-plus mr-2"></i> Purchase Pack</a>
                    </li>
                    <li class="nav-item"><a href="#history" role="tab" data-toggle="tab" class="nav-link"
                                            aria-selected="false"><i class="fal fa-history mr-2"></i>
                            History</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" id="investment" class="tab-pane fade in active show">
                        <form method="post" action="{{ route('purchase.adPack') }}">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-xl-4 col-lg-4">
                                    <div class="form-group"><label for="sel1">Pack Type:</label>
{{--                                        <select class="custom-select ">--}}
{{--                                            <option selected disabled>-- Select Option --</option>--}}
{{--                                            <option>Silver</option>--}}
{{--                                            <option>Gold</option>--}}
{{--                                        </select>--}}
                                        <input type="text" id="pt" name="pt" class="form-control" value="Gold Pack" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xl-4 col-lg-4">
                                    <div class="form-group"><label for="sel2">Purchase:</label>
                                        <select class="custom-select" name="no">
                                            <option selected disabled>-- Select Option --</option>
                                            <option value="1">No of AdPack 1</option>
                                            <option value="2">No of AdPack 2</option>
                                            <option value="3">No of AdPack 3</option>
                                            <option value="4">No of AdPack 4</option>
                                            <option value="5">No of AdPack 5</option>
                                            <option value="6">No of AdPack 6</option>
                                            <option value="7">No of AdPack 7</option>
                                            <option value="8">No of AdPack 8</option>
                                            <option value="9">No of AdPack 9</option>
                                            <option value="10">No of AdPack 10</option>
                                            <option value="11">No of AdPack 11</option>
                                            <option value="12">No of AdPack 12</option>
                                            <option value="13">No of AdPack 13</option>
                                            <option value="14">No of AdPack 14</option>
                                            <option value="15">No of AdPack 15</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                                    <div class="form-group"><label for="usr">Enter Pin:</label>
                                        <input type="text" id="usr" class="form-control"></div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 op-6">
                                    <button type="button" data-toggle="modal" data-target="#myModal"
                                            class="btn btn-default">Purchase
                                        AdPower
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" id="history" class="tab-pane fade">
                        <div class="table-responsive">
                            <table class="table m-h-0897">
                                <thead>
                                <tr>
                                    <th>Pack Type</th>
                                    <th>Total Purchased</th>
                                    <th>Amount</th>
                                    <th>Total Invested</th>
                                    <th>Start Date</th>
                                    <th>Expiry Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basic Pack</td>
                                    <td>1</td>
                                    <td>$50</td>
                                    <td>$50.0000</td>
                                    <td>2020-01-29 07:23:00</td>
                                    <td>2021-04-23 12:00:00</td>
                                    <td><label class="label label-warning">Active</label></td>
                                    <td>
                                        <!---->
                                    </td>
                                </tr>
                                <!---->
                                <!---->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section ('page-script')
@endsection