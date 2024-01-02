
@extends('user.app')

@section('content')

<div class="page-content">

    <div class="row d-flex justify-content-center align-items-center">
                                                <div class="col-lg-12">
                    <div class="container" style="max-width: 100% !important;">
        <div class="card content-area" id="ctn-hdl">
            <div class="card-innr">
                <div class="card-head d-flex justify-content-between align-items-center flex-wrap">
                    <h4 class="card-title">User Transactions</h4>
                    <div>
                        <button style="background-color:#e0e8f3;color:#333;border:0;" class="btn pull-right btn-sm" type="button" id="filter-button">
                            <i class="fas fa-filter"></i>Filtered by Transactions
                        </button>
                        <div id="filter-holder">
                            <form action="" method="get">
                                {{-- <input type="hidden" name="_token" value="IwTAOrsZMWX3WU3eXFlXefwaTc1crIi0IXvmKKDc"/> --}}
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label ucap text-exlight">Service Name</label>
                                            <input id="serviceName" class="input-bordered" type="text" name="serviceName" placeholder="e.g MTN, MTN VTU, DSTV, WAEC" />
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label ucap text-exlight">Transaction ID</label>
                                            <input class="input-bordered" type="text" id="transId" name="transId">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label ucap text-exlight">Status</label>
                                            <select class="select select-block select-bordered" id="status" name="status">
                                                <option value="">Select Status</option>
                                                <option value="1">Completed</option>
                                                <option value="0">Failed</option>
                                                <option value="2">Reversed</option>
                                                {{-- <option value="3">Initiated</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                                                        <div class="col-xl-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label ucap text-exlight">Select Period</label>
                                            {{-- <select id="search-table" name="year" class="select select-block select-bordered">
                                                <option value="">Select</option>
                                                                                                    <option value="live">November 01st, 2023 to November 18th, 2023</option>
                                                                                                    <option value="2016">Year 2016 Transactions</option>
                                                                                                    <option value="2017">Year 2017 Transactions</option>
                                                                                                    <option value="2018">Year 2018 Transactions</option>
                                                                                                    <option value="2019">Year 2019 Transactions</option>
                                                                                                    <option value="2020">Year 2020 Transactions</option>
                                                                                                    <option value="2021">Year 2021 Transactions</option>
                                                                                                    <option value="2022">Year 2022 Transactions</option>
                                                                                                    <option value="latest">January 01st, 2023 to October 31st, 2023</option>
                                                                                            </select> --}}

                                             <input class="input-bordered" type="date" id="year" name="year">

                                        </div>
                                    </div>
                                    <div class="col-xl-7 d-none" id="trans-date">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label ucap text-exlight">Date (From --> To)</label>
                                            <div class="row">
                                                <div class="col-xl-5">
                                                    <input type="date" class="input-bordered" name="from" id="search-fromDate">
                                                </div>
                                                <div class="col-xl-2 text-center">
                                                    <span>to</span>
                                                </div>
                                                <div class="col-xl-5">
                                                    <input type="date" class="input-bordered" name="to" id="search-toDate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-success btn-sm">Search</button> --}}
                            </form>
                        </div>
                    </div>
                </div>

                                <div class="gaps-3x"></div>
                <div class="table-responsive d-lg-block d-none">

                    <div class="d-flex justify-content-center align-items-center">
                        <div id="verify_loading" style="padding:10px 0px 20px 0px; display: none">
                            <img width="30" height="30" src="{{ asset('frontend1/images/loader.gif') }}" alt="Loading">
                            <span style="color:#758698;margin-left:10px;">Please Wait, while the information is loading</span>
                        </div></div>

                    <table class="data-table user-tnx">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-token">Services</th>
                                <th class="data-col dt-amount">Quantity</th>
                                <th class="data-col dt-usd-amount">Total Amount</th>
                                <th class="data-col dt-account">Status</th>
                                {{-- <th class="data-col dt-type"><div class="dt-type-text">Type</div></th> --}}
                                <th class="data-col dt-tnxno">Trans Id</th>
                                <th class="data-col"></th>
                            </tr>
                        </thead>
                {{-- below is desktop view --}}

                        <tbody id="desktop-transactions-body">

                            <tr class="data-item">
                          </tbody>
                    </table>


                </div>

                <div class="row d-lg-none d-block">
                    <div class="col-md-12" id="mobile-transactions-body">
                        <div class="w-100 d-flex flex-column align-items-center justify-content-center mb-3" style="border-bottom: 1px solid #e6effb;">
                            <div class="d-flex justify-content-start align-items-center w-100">
                                <div style="padding: 5px 0px 10px 0px" class="flex-fill">
                                    <span style="margin-top: 0;display:block;font-size: 12px;color:#495463;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">&nbsp;</span>
                                </div>
                                <div style="padding: 5px 0px 10px 0px" class="flex-fill">
                                    <span style="margin-top: 0;display:block;font-size: 12px;color:#2c80ff;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">
                                       <strong>SERVICES</strong>
                                    </span>
                                </div>
                                <div style="padding: 5px 0px 10px 0px" class="flex-fill">
                                    <span style="margin-top: 0;display:block;font-size: 12px;color:#2c80ff;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">STATUS</span>
                                </div>
                                <div style="padding: 5px 0px 10px 0px" class="flex-fill">
                                    <span style="margin-top: 0;display:block;font-size: 12px;color:#2c80ff;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">AMOUNT</span>
                                </div>
                                <div style="padding: 5px 0px 10px 0px" class="flex-fill">
                                    <span style="margin-top: 0;display:block;font-size: 12px;color:#495463;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">&nbsp;</span>
                                </div>
                            </div>
                        </div>

                    <div class="d-flex justify-content-center align-items-center">
                    <div id="verify_loading" style="padding:10px 0px 20px 0px; display: none">
                        <img width="30" height="30" src="{{ asset('frontend1/images/loader.gif') }}" alt="Loading">
                        <span style="color:#758698;margin-left:10px;">Please Wait, while the information is loading</span>
                    </div></div>
                        {{-- mobile view below --}}
                                <div id="mobile">



                                    {{-- <div class="d-flex justify-content-start align-items-center w-100">
                                                                            <div class="data-state data-state-approved" style="margin-right: unset;">
                                            <span class="d-none">Completed</span>
                                        </div>
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <div style="padding: 5px 10px 10px 7px; max-width:50%;" >
                                            <span style="margin-top: 0;display:block;font-size: 12px;color:#495463;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">

                                                    Airtel Airtime VTU
                                                                                            </span>
                                            <span style="display:block;font-size:10px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">
                                                08126216200
                                            </span>
                                        </div>

                                        <div style="padding: 5px 10px 10px 7px; max-width:50%;" >
                                            <span style="margin-top: 0;display:block;font-size: 12px;color:#495463;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">570.00</span>
                                            <span style="display:block;font-size:10px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">NGN <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="NGN 570.00"></em></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center align-items-start flex-column  w-100">
                                    <div style="padding: 5px 10px 10px 35px">
                                        <span style="margin-top: 0;display:block;font-size: 12px;color:#495463;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">Trans ID: 16747591264390513867390861</span>

                                                                                    <span style="border-radius:3px;background-color:#28a745;margin-top: 5px;font-size: 12px;color:#fff;letter-spacing: 0.01em;line-height: 1;padding: 3px 6px;font-weight: 600;">completed</span>

                                        <span style="display:block;font-size:10px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">26th January, 2023, 07:52PM</span>
                                    </div>
                                    <div style="padding: 5px 0px 10px 35px;" class="">
                                                                                                                                                                                                                <a href="transaction_view" style="margin-right:5px;" class="btn btn-light-alt btn-xs btn-icon "><em class="ti ti-eye"></em></a>
                                        <a href="create-ticket" style="margin-right:5px;" class="btn btn-light-alt btn-xs btn-icon"><em class="ti ti-ticket"></em></a>
                                    </div>
                                </div> --}}


                            </div>
                        {{-- end mobile view --}}


                            </div>

                            {{-- <div id="verify_loading" style="padding:10px 0px 20px 0px;" style="display: none">
                                <img width="30" height="30" src="{{ asset('frontend1/images/loader.gif') }}" alt="Airtime Recharge Online">
                                <span style="color:#758698;margin-left:10px;">Wait, while the information is loading</span>
                            </div> --}}
                </div>

                            </div><!-- .card-innr -->
        </div><!-- .card -->
    </div><!-- .container -->

            </div>
                                </div>
                                {{-- end here --}}


<script>
$(document).ready(function() {

    $('#serviceName').on('keyup', function (e) {
             make();
            e.preventDefault();

        });

        $('#transId').on('keyup', function (e) {
            make();

            e.preventDefault();

        });
        $('#year').on('change', function (e) {
            make();

            e.preventDefault();

        });
        $('#status').on('change', function (e) {
            make();
            e.preventDefault();
        });

$(function () {
    make();
})
   function make(){

    // e.preventDefault();
    var transId = $('#transId').val();
    var serviceName = $('#serviceName').val();
    var year = $('#year').val();
    var status = $('#status').val();
    // alert(year);
    $('#verify_loading').hide();

    $.ajax({
        url: "{{ route('transactionv') }}",
        method: "POST",
        //   dataType: 'json',

        // data: $('rate-form').serialize(),
        data:{'serviceName':serviceName,'transId':transId,'year':year,'status':status,
    	'_token': $('meta[name="csrf-token"]').attr('content')},

        beforeSend:function(){
            $('#verify_loading').show();
        },
        // actionCode = parsedData.actionCode;
        success: function(data) {
        //   $('#amount').html(data);
        var fetchData=JSON.parse(data);
        var fetchDatam=JSON.parse(data);

                      var output="";
                for (var i in fetchData)
                {
                    output+='<tr class="data-item"><td class="data-col dt-tnxno"><div class="d-flex align-items-center">'
                        +fetchData[i].div+'<span class="d-none">Completed</span></div>'
                        +'<div class="fake-class"><span class="lead token-amount text-uppercase">'+fetchData[i].service+'</span><span class="sub sub-symbol">'+fetchData[i].phone+'</span></div></div></td>'

                        +'<td class="data-col dt-amount"><span class="lead amount-pay">'+fetchData[i].quantity+'</span></td>'

                        +'<td class="data-col dt-usd-amount"><span class="lead amount-pay">'+fetchData[i].amount+'</span><span class="sub sub-symbol"><strike>NGN</strike><em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="'+fetchData[i].amount+'"></em></span></td>'

                        +'<td class="data-col dt-account"><span class="lead user-info"> '+fetchData[i].status+'<em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="'+fetchData[i].status+'"></em></span><span class="sub sub-date">'+fetchData[i].date+'</span></td>'

                        +'<td class="data-col dt-type"><span class="lead tnx-id">'+fetchData[i].transid+'</span><span class="sub sub-date">'+fetchData[i].date+'</span></td>'

                        +'  <td class="data-col text-right"><div class="relative d-inline-block d-md-none"><a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>'
                         +'<div class="toggle-class dropdown-content dropdown-content-center-left pd-2x"></div></div><ul class="data-action-list d-none d-md-inline-flex"><a href="user/transaction_view/'+fetchData[i].transid+'" id="transaction" class="btn btn-light-alt btn-xs btn-icon mr-2"><em class="ti ti-eye"></em></a>'
                            +'<a href="create-ticket/'+fetchData[i].transid+'" class="btn btn-light-alt btn-xs btn-icon"><em class="ti ti-ticket"></em></a>'
                            +'</ul></td></tr>';
                }
                output+="";

                $('#desktop-transactions-body').html(output);
                $('#verify_loading').hide();

                // alert(fetchDatam);

                var outputm="";
                for (var i in fetchDatam)
                {
                    outputm+='<div class="w-100 d-flex flex-column align-items-center justify-content-center mb-3" style="border-bottom: 1px solid #e6effb;"><div class="d-flex justify-content-start align-items-center w-100">'
                        +fetchDatam[i].div+'<span class="d-none">Completed</span></div>'

                        +'<div class="d-flex justify-content-between align-items-center w-100 text-uppercase"><div style="padding: 5px 10px 10px 7px; max-width:50%;" ><span style="margin-top: 0;display:block;font-size: 12px;color:#495463;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">'
                        +fetchDatam[i].service+'</span><span style="display:block;font-size:10px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">'+fetchData[i].phone+'</span></div>'

                        // +'<td class="data-col dt-amount"><span class="lead amount-pay">'+fetchData[i].quantity+'</span></td>'

                        +'<div style="padding: 5px 10px 10px 7px; max-width:50%;" ><span style="margin-top: 0;display:block;font-size: 12px;color:#495463;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">'+fetchDatam[i].amount
                            +'</span><span style="display:block;font-size:10px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">NGN <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="'+fetchDatam[i].amount+'"></em></span></div></div></div>'

                        // +'<td class="data-col dt-account"><span class="lead user-info"> '+fetchDatam[i].status+'<em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="'+fetchDatam[i].status+'"></em></span><span class="sub sub-date">'+fetchDatam[i].date+'</span></td>'

                        +'<div class="d-flex justify-content-center align-items-start flex-column  w-100"><div style="padding: 5px 10px 10px 35px"><span style="margin-top: 0;display:block;font-size: 12px;color:#495463;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 600;">Trans ID: '+fetchDatam[i].transid

                            +'</span><span style="border-radius:3px;background-color:#fffccc;margin-top: 5px;font-size: 12px;color:#fff;letter-spacing: 0.01em;line-height: 1;padding: 3px 6px;font-weight: 600;">'+fetchDatam[i].status+'</span><span style="display:block;font-size:10px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">'+fetchData[i].date

                                +'</span></div><div style="padding: 5px 0px 10px 35px;" class=""><a href="user/transaction_view/'+fetchDatam[i].transid+'" style="margin-right:5px;" class="btn btn-light-alt btn-xs btn-icon "><em class="ti ti-eye"></em></a><a href="create-ticket/'+fetchDatam[i].transid+'" style="margin-right:5px;" class="btn btn-light-alt btn-xs btn-icon"><em class="ti ti-ticket"></em></a></div></div></div>';
                }
                outputm+="";

                $('#mobile').html(outputm);
                $('#verify_loading').hide();


        },

        error:function(status)
    {
        $('#verify_loading').hide();
    }

        });


};

});

</script>


@endsection
