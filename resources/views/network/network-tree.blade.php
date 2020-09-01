@extends ('layouts.app')
@section('style')
<style type="text/css">
    .new-form-container {
        background-color: #ffffff;
        -webkit-box-shadow: 8px 5px 17px -7px #ccc;
        box-shadow: 8px 5px 17px -7px #ccc;
    }

    .new-form-container .tab-content {
        padding: 36px 30px;
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
    #umaie {
        padding: 0;
        color: #1d2023;
    }

    .img-db {
        border-radius: 50%;
        width: 20px;
        height: 20px;
        overflow: hidden;
        float: left;
        text-align: center;
        border: 1px solid green;
        margin-right: 5px
    }

    .item {
        cursor: pointer
    }

    .bold {
        line-height: 22px
    }

    ul {
        line-height: 1.5em;
        list-style: none
    }

    ul#umaie li ul.adjust {
        padding-left: 20px
    }

    ul#umaie>li {
        background-image: none !important
    }

    ul#umaie ul li {
        background-position: 14px;
        background-repeat: repeat-y;
        background-image: url(assets/images/only-borderli.png);
        overflow: hidden
    }

    ul#umaie ul.undefined-ulclass,
    ul#umaie ul li:last-child {
        background-image: none
    }

    ul#umaie li {
        min-height: 22px;
        min-width: 600px
    }

    ul#umaie li ul.adjust li.lihaschildren ul.adjust .lihasnotchildren {
        position: relative;
        clear: both;
        padding-left: 20px
    }

    ul#umaie li ul.adjust li.lihaschildren ul.adjust .lihasnotchildren .leg {
        position: absolute;
        left: 0;
        top: 0
    }

    ul#umaie li ul.adjust li.lihaschildren ul.adjust .lihasnotchildren>div {
        float: left;
        clear: both;
        padding-left: 6px;
        padding-top: 0
    }

    .umaoie {
        background-size: 320px 96px;
        background-image: url(assets/images/tree-32px.png);
        float: left;
        min-width: 25px
    }

    .umaoie.leg {
        background-position: -65px -5px;
        width: 22px;
        height: 22px
    }

    .umaoie.flower {
        width: 0;
        height: 0;
        background-image: none
    }

    .tree .haschildren {
        background-position: -101px -5px;
        width: 22px;
        height: 22px;
        padding-left: 25px
    }

    .haschildren.open {
        background-position: -129px -5px;
        float: left
    }

    .haschildren.close {
        background-position: -97px -5px
    }

    .tooltip {
        z-index: 1000000
    }
</style>
@endsection
@section ('content')
<div class="scrollbar-container">
</div>
<div class="row">
    <div class="col-md-12">
        <div class="new-form-container">
            <h1>Network Tree</h1>
            <div class="tab-content">
                <div role="tabpanel" id="tree" class="tab-pane fade in active show">
                    <p>(You can view your network tree by clicking on the node.)</p>
                    <ul id="umaie" class="tree adjust">
                        <li id="item" class="item lihaschildren">
                            <i class="umaoie haschildren close" id="umaoie"></i>
                            <div class="bold">
                                <div class="img-db"><img src="images/users/vzwzUNhKs7.png" width="18"></div>
                                <div class="item-name">(You) ameeraliparacha7544 [545394280939915] (
                                    5 Referrals )</div>
                            </div>
                            <ul class="adjust undefined-ulclass d-none">
                                <li class="item lihasnotchildren direct-leg"><i class="umaoie leg"></i>
                                    <div class="">
                                        <div class="img-db"><img src="/images/app-img/logo-small.png" width="18">
                                        </div>
                                        <div class="item-name has-tooltip" data-original-title="null">hellopapaji
                                            [570036284459193-15428] ( 0 Referrals ) ( Level@1 )
                                        </div>
                                    </div>
                                    <!---->
                                </li>
                                <li class="item lihasnotchildren direct-leg"><i class="umaoie leg"></i>
                                    <div class="">
                                        <div class="img-db"><img src="/images/app-img/logo-small.png" width="18">
                                        </div>
                                        <div class="item-name has-tooltip" data-original-title="null">saeedali
                                            [451657218392618-42456] ( 0 Referrals ) ( Level@1 )
                                        </div>
                                    </div>
                                    <!---->
                                </li>
                                <li class="item lihasnotchildren direct-leg"><i class="umaoie leg"></i>
                                    <div class="">
                                        <div class="img-db"><img src="/images/app-img/logo-small.png" width="18">
                                        </div>
                                        <div class="item-name has-tooltip" data-original-title="null">bashir1951
                                            [744948225214537-45032] ( 0 Referrals ) ( Level@1 )
                                        </div>
                                    </div>
                                    <!---->
                                </li>
                                <li id="item" class="item lihaschildren direct-leg"><i class="umaoie haschildren close" id="umaoie"></i>
                                    <div class="bold">
                                        <div class="img-db"><img src="/images/app-img/logo-small.png" width="18">
                                        </div>
                                        <div class="item-name has-tooltip" data-original-title="null">rokiya34
                                            [149554138443301-51428] ( 5 Referrals ) ( Level@1 )
                                        </div>
                                    </div>
                                    <ul class="adjust 1-ulclass d-none">
                                        <li class="item lihasnotchildren direct-leg"><i class="umaoie leg"></i>
                                            <div class="">
                                                <div class="img-db"><img src="/images/app-img/logo-small.png" width="18"></div>
                                                <div class="item-name has-tooltip" data-original-title="null">awaisali00
                                                    [411486683165356-58011] ( 0 Referrals ) (
                                                    Level@1 )</div>
                                            </div>
                                            <!---->
                                        </li>
                                        <li class="item lihasnotchildren direct-leg"><i class="umaoie leg"></i>
                                            <div class="">
                                                <div class="img-db"><img src="/images/app-img/logo-small.png" width="18"></div>
                                                <div class="item-name has-tooltip" data-original-title="null">malik0300
                                                    [316797683782336-58087] ( 0 Referrals ) (
                                                    Level@1 )</div>
                                            </div>
                                            <!---->
                                        </li>
                                        <li class="item lihasnotchildren direct-leg"><i class="umaoie leg"></i>
                                            <div class="">
                                                <div class="img-db"><img src="/images/app-img/logo-small.png" width="18"></div>
                                                <div class="item-name has-tooltip" data-original-title="null">malik0301
                                                    [243170420542068-58134] ( 0 Referrals ) (
                                                    Level@1 )</div>
                                            </div>
                                            <!---->
                                        </li>
                                        <li class="item lihaschildren direct-leg"><i class="umaoie haschildren close"></i>
                                            <div class="bold">
                                                <div class="img-db"><img src="/images/app-img/logo-small.png" width="18"></div>
                                                <div class="item-name has-tooltip" data-original-title="null">farooqluna
                                                    [505756432316855-58218] ( 1 Referrals ) (
                                                    Level@1 )</div>
                                            </div>
                                            <ul class="adjust 1-ulclass" style="display: none;">
                                                <li class="item lihaschildren direct-leg"><i class="umaoie haschildren close"></i>
                                                    <div class="bold">
                                                        <div class="img-db"><img src="/images/app-img/logo-small.png" width="18"></div>
                                                        <div class="item-name has-tooltip" data-original-title="null">
                                                            rehanakouser
                                                            [285958041866446-60994] ( 1
                                                            Referrals )
                                                            ( Level@1 )</div>
                                                    </div>
                                                    <ul class="adjust 1-ulclass" style="display: none;">
                                                        <li class="item lihasnotchildren direct-leg">
                                                            <i class="umaoie leg"></i>
                                                            <div class="">
                                                                <div class="img-db"><img src="/images/app-img/logo-small.png" width="18"></div>
                                                                <div class="item-name has-tooltip" data-original-title="null">
                                                                    salmananwar
                                                                    [522473961637673-84649] ( 0
                                                                    Referrals ) ( Level@1 )
                                                                </div>
                                                            </div>
                                                            <!---->
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item lihasnotchildren direct-leg"><i class="umaoie leg"></i>
                                            <div class="">
                                                <div class="img-db"><img src="/images/app-img/logo-small.png" width="18"></div>
                                                <div class="item-name has-tooltip" data-original-title="null">musharaf00
                                                    [319124936688536-60120] ( 0 Referrals ) (
                                                    Level@1 )</div>
                                            </div>
                                            <!---->
                                        </li>
                                    </ul>
                                </li>
                                <li class="item lihasnotchildren direct-leg"><i class="umaoie leg"></i>
                                    <div class="">
                                        <div class="img-db"><img src="/images/app-img/logo-small.png" width="18">
                                        </div>
                                        <div class="item-name has-tooltip" data-original-title="null">mawais50086
                                            [515141294178206-55433] ( 0 Referrals ) ( Level@1 )
                                        </div>
                                    </div>
                                    <!---->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section ('page-script')
<script>
    var c = document.getElementById("item").lastElementChild;
    var icon = document.querySelector("#umaoie");
    icon.onclick = function() {
        if (icon.classList.contains("open")) {
            icon.classList.remove("open");
            icon.classList.add("close");
        } else {
            icon.classList.remove("close");
            icon.classList.add("open");
        };
        if (c.classList.contains("d-block")) {
            c.classList.remove("d-block");
            c.classList.add("d-none");
        } else {
            c.classList.remove("d-none");
            c.classList.add("d-block");
        }
    };
</script>
@endsection