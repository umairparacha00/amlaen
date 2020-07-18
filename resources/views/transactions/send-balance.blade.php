@extends ('layouts.userdash')
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
            color: #626262;
            font-size: 1.1rem;
            border: none;
            min-width: auto;
            font-weight: 450;
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

        .btn-primary {
            border-color: #FF9F43 !important;
            background-color: #FF9F43 !important;
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

        .amount-heading {
            background-image: url(assets/images/layer.png);
            background-repeat: repeat-x;
            background-position: 0 0;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: baseline;
        }

        .purchase-pin-title {
            padding: 1.3em;
            color: #fff;
            font-size: 1.5rem;
            text-align: center;
        }

        .purchase-pin-ammount {
            color: #fff;
            text-align: center;
            font-size: 2.125rem;
            float: right;
            padding: .95em;
        }

        .new-form-container .nav-tabs.nav {
            padding: 1.5em 1.5em 0 1.5em;
        }

        .new-form-container .tab-content form .btn {
            background-color: #FF9F43;
            border: 1px solid #FF9F43;
            color: #fff;
            text-transform: capitalize;
            margin: 0 auto;
            -webkit-box-shadow: 0 1px 12px 4px hsla(240, 7%, 85%, .6);
            box-shadow: 0 1px 12px 4px hsla(240, 7%, 85%, .6);
        }
        .new-form-container .tab-content form .btn:hover {
            box-shadow: 0 0 15px #FF9F43;
            transition: all 0.2s;
            color: #fff;
        }

        .ui_jk {
            table-layout: auto;
            width: 100%;
        }

        .ui_jk thead {
            background: #f1f2f7;
        }

        .ui_jk thead th {
            vertical-align: middle;
            font-weight: 600;
            color: #212529;
            border: 1px solid #e7e7e7;
        }

        .ui_jk tbody tr {
            vertical-align: middle;
        }

        .ui_jk tbody tr td {
            color: inherit;
            border: 1px solid #e7e7e7;
        }

        .inp-shadow {
            -webkit-box-shadow: 0 5px 5px 0 #ccc;
            box-shadow: 0 5px 5px 0 #ccc;
        }

        #history table.pincreate-history .btn {
            background-color: #FF9F43;
            border: 1px solid #FF9F43;
            color: #fff;
        }

        @media (max-width: 576px) {
            .amount-heading {
                background-image: url(assets/images/layer.png);
                background-repeat: repeat-x;
                background-position: 0 0;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .purchase-pin-title {
                padding: 1em 1.3em 0 1.3em;
                color: #fff;
                font-size: 1.2rem;
                text-align: center;
            }

            .purchase-pin-ammount {
                color: #fff;
                text-align: center;
                font-size: 2rem;
                float: right;
                padding: 0;
            }
        }
    </style>
    <style type="text/css">
        .modal-header .close {
            font-weight: 700;
            font-size: 2rem;
            padding: 12px 12px 6px
        }

        .share-popup .modal-header {
            border-bottom: none
        }

        .share-popup .modal-body {
            padding-top: 0;
            text-align: center;
            padding-bottom: 0
        }

        .share-popup .popup-section-user-name {
            font-size: 2rem;
            font-weight: 500;
            color: #7367F0
        }

        .share-popup .popup-section-user-number {
            font-size: 1.3rem;
            color: inherit;
            padding-bottom: 26px;
            position: relative
        }

        .share-popup .popup-section-user-number:after {
            position: absolute;
            display: block;
            content: "";
            background: #dbdbdb;
            height: 5px;
            width: 80px;
            left: 0;
            right: 0;
            margin: 0 auto;
            bottom: 0
        }

        .popup-section-user-sharing {
            padding-top: 25px;
            font-size: 1.2rem;
            color: #00408f
        }

        .share-popup .modal-footer {
            border-top: none;
            text-align: center
        }

        .share-popup .modal-footer .btn {
            font-size: 18px;
        }

        .share-popup .modal-footer .btn.btn-success {
            margin: 0 5px 0 auto;
            background: #6bc334;
            border: 1px solid #6bc334
        }

        .share-popup .modal-footer .btn.btn-danger {
            margin: 0 auto 0 5px;
            background: #de0404;
            border: 1px solid #de0404
        }

        .share-popup .modal-footer {
            padding-bottom: 25px
        }

        .share-popup .modal-dialog {
            max-width: 350px !important
        }
    </style>
@endsection
@section ('content')
<div class="scrollbar-container">
</div>
<div class="row">
    <div class="col-md-12">
        <div class="new-form-container">
            <div class="amount-heading">
                <h2 class="purchase-pin-title">Send Able Total Balance: </h2>
                <h2 class="purchase-pin-ammount"> 14.48 </h2>
            </div>
            <ul role="tablist" class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#eran" role="tab" data-toggle="tab" class="nav-link active" aria-selected="true">
                        <i class="fal fa-share-square mr-2"></i>Send Balance</a>
                </li>
                <li class="nav-item">
                    <a href="#history" role="tab" data-toggle="tab" class="nav-link" aria-selected="false">
                        <i class="fal fa-history mr-2"></i>History</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" id="eran" class="tab-pane fade in active show">
                    <form autocomplete="off" method="post">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="number" min="1" id="amount" class="form-control inp-shadow">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="next_account">Next Person (Account Number) or
                                        (Username):</label>
                                    <input type="text" min="1" id="next_account" class="form-control inp-shadow">
                                </div>
                            </div>
                            <div class="col-xl-12 col-sm-12">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default">Send Balance</button>
                            </div>
                        </div>
                    </form>
                    <!---->
                </div>
                <div role="tabpanel" id="history" class="tab-pane fade">
                    <div role="tabpanel" id="history" class="tab-pane fade active show">
                        <div class="table-responsive">
                            <table class="table ui_jk">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>356285</td>
                                        <td>ayesha0000</td>
                                        <td>$5</td>
                                        <td>2019-11-21 16:14:33</td>
                                    </tr>
                                    <tr>
                                        <td>1021145</td>
                                        <td>Abid786</td>
                                        <td>$122</td>
                                        <td>2020-05-15 12:14:56</td>
                                    </tr>
                                    <tr>
                                        <td>1046209</td>
                                        <td>Ashfaqahmad</td>
                                        <td>$98</td>
                                        <td>2020-05-21 09:10:27</td>
                                    </tr>
                                    <tr>
                                        <td>1055297</td>
                                        <td>Ashfaqahmad</td>
                                        <td>$23</td>
                                        <td>2020-05-22 13:16:37</td>
                                    </tr>
                                    <tr>
                                        <td>1108839</td>
                                        <td>Ashfaqahmad</td>
                                        <td>$123</td>
                                        <td>2020-05-29 13:01:18</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section ('page-script')
@endsection