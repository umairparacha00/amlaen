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
        font-size: .95rem;
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
        color: inherit;
        border: 1px solid #e7e7e7;
        font-size: 1rem;
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
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item">
                <a href="#transactions_area" role="tab" data-toggle="tab" class="nav-link active" aria-selected="false"><i class="fal fa-usd-circle mr-2"></i>Transactions</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" id="transactions_area" class="tab-pane fade show active">
                <!---->
                <div class="row">
                    <div class="col-12 mb-5">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label>By Types</label>
                                        <select class="custom-select">
                                            <option selected disabled>-- Select Option --</option>
                                            <option>Received</option>
                                            <option>Transferred</option>
                                            <option>Main Balance</option>
                                            <option>Share Balance</option>
                                            <option>Investment Balance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label>By Days</label>
                                        <select class="custom-select">
                                            <option selected disabled>-- Select Option --</option>
                                            <option>Today</option>
                                            <option>This Week</option>
                                            <option>This Month</option>
                                            <option>Last Three Months</option>
                                            <option>Last Six Months</option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <label for="transaction_id">By Transaction
                                        ID</label>
                                    <input type="number" placeholder="e.g. 9150" id="transaction_id" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <label for="from_date">From</label>
                                    <input type="date" id="from_date" class="form-control ranges">
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <label for="to_date">To</label>
                                    <input type="date" id="to_date" class="form-control ranges">
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 select-top-spacing">
                                    <input type="submit" value="Go" class="btn btn-default btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered t_t1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>CR/DR</th>
                                <th>Amount</th>
                                <th>Old Balance</th>
                                <th>New Balance</th>
                                <th style="width: 200px;">Detail</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>1157182505</td>
                            <td>main_balance</td>
                            <td>Credit</td>
                            <td>$1.3072</td>
                            <td>$15.7918</td>
                            <td>$17.099</td>
                            <td style="width: 100px;">Click bonus (0.01) and reward pool bonus
                                (1.2972222222222) given. By (42456)
                            </td>
                            <td>2020-06-02 23:59:59</td>
                        </tr>
                        <tr>
                            <td>1157182506</td>
                            <td>main_balance</td>
                            <td>Credit</td>
                            <td>$1.0428</td>
                            <td>$17.099</td>
                            <td>$18.1418</td>
                            <td style="width: 100px;">Musharika profit (0.78333333333333) and reward
                                pool bonus (0.25944444444444) given. By (42456)
                            </td>
                            <td>2020-06-02 23:59:59</td>
                        </tr>
                        <tr>
                            <td>1157182507</td>
                            <td>main_balance</td>
                            <td>Credit</td>
                            <td>$2.7000</td>
                            <td>$18.1418</td>
                            <td>$20.8418</td>
                            <td style="width: 100px;">Original Amount return from AD Power Balance
                                to
                                Main Balance. By (42456)
                            </td>
                            <td>2020-06-02 23:59:59</td>
                        </tr>
                        <tr>
                            <td>1157182508</td>
                            <td>investment_balance</td>
                            <td>Debit</td>
                            <td>$2.7000</td>
                            <td>$2852.455</td>
                            <td>$2849.755</td>
                            <td style="width: 100px;">Original Amount return from AD Power Balance
                                to
                                Main Balance. By (42456)
                            </td>
                            <td>2020-06-02 23:59:59</td>
                        </tr>
                    </table>
                    <nav aria-label="Page navigation example" class="pagination justify-content-center">
                        <ul class="pagination">
                            <!---->
                            <li class="page-item custom-page-digits active"><a href="javascript:void(0)" class="page-link shadow">1</a></li>
                            <li class="page-item custom-page-digits"><a href="javascript:void(0)" class="page-link shadow">2</a></li>
                            <li class="page-item custom-page-digits"><a href="javascript:void(0)" class="page-link shadow">3</a></li>
                            <li class="page-item custom-page-digits"><a href="javascript:void(0)" class="page-link shadow">4</a></li>
                            <li class="page-item custom-page-item"><a href="javascript:void(0)" aria-label="Next" class="page-link shadow"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section ('page-script')
@endsection