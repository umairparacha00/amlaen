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
        color: #626262;
        font-size: 1.2rem;
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

    .btn-primary {
        border-color: #FF9F43 !important;
        background-color: #FF9F43 !important;
        color: #FFF;
    }

    .btn-primary:hover {
        box-shadow: 0 0 15px #FF9F43;
        border-width: 0;
        transition: all 0.2s;
        color: #fff;
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
        background-image: url({{ asset('assets/images/layer.png') }});
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

    .pin-his-tab {
        table-layout: auto;
        width: 100%;
    }

    .pin-his-tab thead {
        background: #f1f2f7;
    }

    .pin-his-tab thead th {
        vertical-align: middle;
        font-weight: 500;
        color: #5f5f60;
        border: 1px solid #e7e7e7;
    }

    .pin-his-tab tbody tr {
        vertical-align: middle;
    }

    .pin-his-tab tbody tr td {
        color: inherit;
        border: 1px solid #e7e7e7;
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
@endsection
@section ('content')
<div class="scrollbar-container">
</div>
<div class="row">
    <div class="col-md-12">
        <div class="new-form-container">
            <div class="amount-heading">
                <h2 class="purchase-pin-title">Create able Pin Balance: </h2>
                <h2 class="purchase-pin-ammount"> {{ current_user()->balance->main_balance }} </h2>
            </div>
            <ul role="tablist" class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#eran" role="tab" data-toggle="tab" class="nav-link active" aria-selected="true"><i
                                class="fal fa-pen-alt mr-2"></i> Create Pin</a>
                </li>
                <li class="nav-item">
                    <a href="#history" role="tab" data-toggle="tab" class="nav-link" aria-selected="false"><i
                                class="fal fa-history mr-2"></i> Pin History</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" id="eran" class="tab-pane fade in active show">
                    <form id="purchase-pin-form" action="{{ '/create-pin/'.current_user()->id }}" method="POST">
                        @csrf
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-4-xl">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="number" name="amount" min="5" max="1000000" id="amount"
                                           class="form-control inp-shadow">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            </div>
                            <div class="col-xl-12 col-sm-12">
                                <button type="button" id="modal-btn" class="btn btn-default">
                                    Purchase Pin
                                </button>
                            </div>
                        </div>
                    </form>
                    <!---->
                </div>
                <div role="tabpanel" id="history" class="tab-pane fade">
                    <div class="table-responsive">
                        <table class="table pincreate-history pin-his-tab">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pin</th>
                                <th scope="col">Original Was</th>
                                <th scope="col">Remaining Amount</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Refund</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($userPinsData as $pinData)
                                    <tr>
                                        <td scope="row">{{ $pinData->id }}</td>
                                        <td>{{ $pinData->pin }}</td>
                                        <td>{{ $pinData->pin_value }}</td>
                                        <td>{{ $pinData->pin_remaining_value }}</td>
                                        <td> {{ $pinData->created_at }}</td>
                                        <td>
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#myModalRefund">Refund</a>
                                        </td>
                                    </tr>
                                @endforeach
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
    <script>
        $("#modal-btn").on('click', function (){
            // const token = document.head.querySelector('meta[name="csrf-token"]');
            // window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
            axios.post('/getpinfee', {
                "amount": $("#amount").val(),
            })
            .then(function (response) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Are you sure you want to proceed to create pin of $' + response.data.amount +' and fee ' + response.data.fee + '!' ,
                    position: "top",
                    showCancelButton: true,
                    confirmButtonColor: '#218838',
                    cancelButtonColor: '#c82333',
                    confirmButtonText: 'Proceed!'
                }).then((result) => {
                    if (result.value) {
                        $("#purchase-pin-form").submit()
                        console.log('submitted')
                    }
                })
            })
            .catch((error) => {
                const errors = error.response.data.errors
                const firstItem = Object.keys(errors)[0];
                const firstErrorMessage = errors[firstItem][0]
    
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: true,
                    timer: 3000,
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
@section('modals')
{{--    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title"></h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    Are you sure you want to proceed to create pin @{{ array.amount }} of  and fee ?--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-success" onclick="$('#create-pin').submit();">Proceed</button>--}}
{{--                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection