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

    .m-h-0897>thead {
        background: #f1f2f7
    }

    .m-h-0897>tbody {
        background: #fff
    }

    .m-h-0897>tbody>tr>td,
    .m-h-0897>thead>tr>th {
        color: #555;
        border: 1px solid #e7e7e7;
        vertical-align: middle
    }

    .p-m-label {
        font-size: 1.2rem;
        padding-bottom: 5px;
        font-weight: 700
    }

    .m-info {
        font-weight: 400
    }

    .m-p-748 {
        background: #fff;
        table-layout: auto;
        width: 100%
    }

    .m-p-748>thead {
        color: #fff
    }

    .m-p-748>tbody>tr>td:nth-child(2n) {
        background: #f5f6f9
    }

    .m-p-748>thead>tr>th:nth-child(odd) {
        background: #7367f0;
        position: relative;
        vertical-align: middle;
        text-align: center;
        font-weight: 400;
        padding: 5px;
        font-size: 1.2rem;
    }

    .m-p-748>thead>tr>th:nth-child(2n) {
        background: #FF9F43;
        position: relative;
        vertical-align: middle;
        text-align: center;
        font-weight: 400;
        padding: 0 5px;
        font-size: 1.2rem;
    }

    .m-p-748>thead>tr>th {
        padding: 0
    }

    .m-p-748>tbody>tr>th {
        color: #7367f0;
        text-align: center;
        vertical-align: middle
    }

    .m-p-748>tbody>tr>td {
        color: #555;
        text-align: center;
        vertical-align: middle
    }

    .m-p-748 {
        border: 1px solid #dcdcdc;
        -webkit-box-shadow: 0 7px 5px 0 #ccc;
        box-shadow: 0 7px 5px 0 #ccc
    }

    @media only screen and (max-width:600px) {

        .m-h-0897,
        .m-p-748 {
            table-layout: auto;
            width: 100%
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
            <h1>Membership</h1>
            <ul role="tablist" class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#membership" role="tab" data-toggle="tab" class="nav-link active">
                        <i class="fal fa-handshake mr-2"></i> Membership
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#history" role="tab" data-toggle="tab" class="nav-link">
                        <i class="fal fa-history mr-2"></i> History
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#help" role="tab" data-toggle="tab" class="nav-link">
                        <i class="fal fa-info-circle mr-2"></i> Help
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" id="membership" class="tab-pane fade in show active">
                    <div class="p-m-label">
                        Current membership:
                        <span class="m-info">Gold</span></div>
                    <!---->
                    <form autocomplete="off" method="post">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label for="memberships">
                                        Memberships
                                    </label>
                                    <select class="custom-select ">
                                        <option selected disabled>-- Select Option --</option>
                                        <option>Starter (0)</option>
                                        <option>Basic (10)</option>
                                        <option>Silver (25)</option>
                                        <option>Gold (50)</option>
                                        <option>Emerald (100)</option>
                                        <option>Sapphire (250)</option>
                                        <option>Platinum (500)</option>
                                        <option>Diamond (1000)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <label for="pin">Enter
                                    Pin
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default">
                            Upgrade Membership
                        </button>
                    </form>
                </div>
                <div role="tabpanel" id="history" class="tab-pane fade">
                    <div class="table-responsive">
                        <table class="table m-h-0897">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>50483</td>
                                    <td>Starter</td>
                                    <td>25</td>
                                    <td>2019-11-15 04:32:04</td>
                                    <td>2019-11-15 04:32:04</td>
                                </tr>
                                <tr>
                                    <td>50482</td>
                                    <td>Gold</td>
                                    <td>25</td>
                                    <td>2019-11-15 04:31:53</td>
                                    <td>2019-11-15 04:31:53</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div role="tabpanel" id="help" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table m-p-748">
                                    <thead>
                                        <tr>
                                            <th>Membership</th>
                                            <th>Referral Level</th>
                                            <th>Max Purchase</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Starter</th>
                                            <td>1</td>

                                            <td>250
                                            </td>
                                            <td>0
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Basic</th>
                                            <td>5</td>

                                            <td>1000
                                            </td>
                                            <td>10
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Silver</th>
                                            <td>10</td>
                                            <td>2500
                                            </td>
                                            <td>25
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Gold</th>
                                            <td>15</td>
                                            <td>5000
                                            </td>
                                            <td>50
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Emerald</th>
                                            <td>20</td>
                                            <td>10000
                                            </td>
                                            <td>100
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sapphire</th>
                                            <td>25</td>
                                            <td>25000</td>
                                            <td>250</td>
                                        </tr>
                                        <tr>
                                            <th>Platinum</th>
                                            <td>30</td>
                                            <td>50000</td>
                                            <td>500</td>
                                        </tr>
                                        <tr>
                                            <th>Diamond</th>
                                            <td>40</td>
                                            <td>100000</td>
                                            <td>1000</td>
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
</div>
@endsection
@section ('page-script')
@endsection