@extends ('layouts.app')
@section('style')
    <style type="text/css">
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

        @media (max-width: 575.98px) {
            .new-form-container h1 {
                font-size: 28px;
            }
        }
    </style>
    <style type="text/css">
        .inner-con {
            padding: 2.5em 1.5em;
        }

        .r-f-b {
            background-color: #fff;
            -webkit-box-shadow: 0 2px 17px 0 rgba(160, 160, 192, .5);
            box-shadow: 0 2px 17px 0 rgba(160, 160, 192, .5);
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 30px;
            min-height: 240px;
            font-size: 14px;
        }

        .hu-097vbf {
            padding-left: 20px;
            padding-bottom: 13px;
            min-height: 164px;
        }

        .r-f-b .hu-67487 {
            font-size: 22px;
            padding-top: .5em;
            padding-bottom: .5em;
            color: #7367F0;
        }

        .r-f-b .hu-o397 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-bottom: 7px;
        }

        .c-m {
            color: #FF9F43;
        }

        .r-f-b .referrals-box-user-detail {
            overflow: hidden;
        }

        .referrals-box-user-detail .referrals-user-label {
            float: left;
            padding-right: 4px;
            color: #999;
        }

        .referrals-box-bottom-section {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border-top: 1px solid #dcdcdc;
            text-align: center;
        }

        .referrals-bottom-total {
            width: 100%;
            padding-top: 10px;
        }
    </style>
@endsection
@section ('content')
    <div class="scrollbar-container">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="new-form-container">
                <h1>Direct Referrals</h1>
                <div class="row inner-con">
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="r-f-b">
                            <div class="hu-097vbf">
                                <div class="hu-67487">
                                    Papajani
                                </div>
                                <div class="hu-o397">
                                    <i class="fal fa-map-marker-alt mr-1 c-m"></i> Faisalabad,
                                    Pakistan
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">User Name:</div>
                                    <div class="referrals-user-info">hellopapaji</div>
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">Membership:</div>
                                    <div class="referrals-user-info">Starter</div>
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label"> Registered On:</div>
                                    <div class="referrals-user-info">17 Jan, 2019</div>
                                </div>
                                <!---->
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">Gender:</div>
                                    <div class="referrals-user-info"> Male</div>
                                </div>
                            </div>
                            <div class="referrals-box-bottom-section">
                                <div class="referrals-bottom-total">
                                    <div class="referrals-total-label">
                                        Referral
                                        Total
                                    </div>
                                    <div class="referrals-total-counter">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="r-f-b">
                            <div class="hu-097vbf">
                                <div class="hu-67487">
                                    Papajani
                                </div>
                                <div class="hu-o397">
                                    <i class="fal fa-map-marker-alt mr-1 c-m"></i> Faisalabad,
                                    Pakistan
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">User Name:</div>
                                    <div class="referrals-user-info">hellopapaji</div>
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">Membership:</div>
                                    <div class="referrals-user-info">Starter</div>
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label"> Registered On:</div>
                                    <div class="referrals-user-info">17 Jan, 2019</div>
                                </div>
                                <!---->
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">Gender:</div>
                                    <div class="referrals-user-info"> Male</div>
                                </div>
                            </div>
                            <div class="referrals-box-bottom-section">
                                <div class="referrals-bottom-total">
                                    <div class="referrals-total-label">
                                        Referral
                                        Total
                                    </div>
                                    <div class="referrals-total-counter">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="r-f-b">
                            <div class="hu-097vbf">
                                <div class="hu-67487">
                                    Papajani
                                </div>
                                <div class="hu-o397">
                                    <i class="fal fa-map-marker-alt mr-1 c-m"></i> Faisalabad,
                                    Pakistan
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">User Name:</div>
                                    <div class="referrals-user-info">hellopapaji</div>
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">Membership:</div>
                                    <div class="referrals-user-info">Starter</div>
                                </div>
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label"> Registered On:</div>
                                    <div class="referrals-user-info">17 Jan, 2019</div>
                                </div>
                                <!---->
                                <div class="referrals-box-user-detail">
                                    <div class="referrals-user-label">Gender:</div>
                                    <div class="referrals-user-info"> Male</div>
                                </div>
                            </div>
                            <div class="referrals-box-bottom-section">
                                <div class="referrals-bottom-total">
                                    <div class="referrals-total-label">
                                        Referral
                                        Total
                                    </div>
                                    <div class="referrals-total-counter">
                                        0
                                    </div>
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