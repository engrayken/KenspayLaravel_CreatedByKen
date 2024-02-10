@extends('user.app')

@section('content')
    <div class="page-content">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="container" style="max-width: 100% !important;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-area card pl-lg-5 pr-lg-5">
                                <div class="card-innr">

                                    <div class="row" style="margin-top:20px;">





                                        <div class="d-flex justify-content-start align-items-center w-100">
                                            <img style="padding-right: 8px;" id="product-image"
                                                src="{{ asset('frontend1/images/Airtime.jpg') }}" alt="Airtime Recharge Pin"
                                                width="100px" height="100px" class="product-image">
                                            <div>
                                                <h3 style="color:#174159;"><strong>Recharge Card Pin</strong></h3>
                                                <p style="">Airtime Pin - Generate instant pin</p>
                                            </div>
                                        </div>
                                        <div class="gaps-1x"></div>

                                        <div class="gaps-3x"></div>
                                        <div class="row">
                                            <form method="POST" action="" accept-charset="UTF-8" autocomplete="off"
                                                enctype="multipart/form-data"><input name="_token" type="hidden"
                                                    value="t82ZLvqCuNFdGkfb05L13xNaL0egIRI4Ymw7gSP6">
                                                <div class="col-xl-12">
                                                    <div id="product-details">
                                                        <div class="row">

                                                            <div class="col-md-12 d-flex justify-content-start align-items-start"
                                                                id="verify_tab" style="">
                                                                <div id="verify_loading" style="padding:10px 0px 20px 0px;"
                                                                    style="display: none">
                                                                    <img width="30" height="30"
                                                                        src="{{ asset('frontend1/images/loader.gif') }}"
                                                                        alt="Airtime Recharge Online">
                                                                    <span style="color:#758698;margin-left:10px;">Please
                                                                        Wait</span>
                                                                </div>

                                                                @if (Session::has('failed'))
                                                                    <div class="text-danger mt-4" id="emptyError">
                                                                        {{ Session::get('failed') }}
                                                                    </div>
                                                                @endif

                                                                <div class="alert text-danger mt-4" id="emptyError"
                                                                    style="display: none"></div>

                                                                @if (Session::has('success'))
                                                                    <div class="text-success mt-4" id="success">
                                                                        {{ Session::get('success') }}
                                                                    </div>
                                                                @endif

                                                                <div class="alert btn-success mt-4" id="success"
                                                                    style="display: none"></div>

                                                            </div>



                                                            <div class="col-md-6">
                                                                <div class="input-item input-with-label">
                                                                    <label class="input-item-label">Select Network</label>
                                                                    {{-- <input class="input-bordered" placeholder="Your Email" id="ex_form" name="email" type="text" value="kennethayogu@gmail.com"> --}}
                                                                    <select name="network" id="network"
                                                                        data-shb-product-option="data-shb-product-option"
                                                                        class="select select-block select-bordered selectpicker"
                                                                        required="required" data-live-search="true"
                                                                        name="type">
                                                                        <option value="">Click To Select Network
                                                                        </option>

                                                                        @foreach ($network as $item)
                                                                            <option value="{{ $item->prodName }}">
                                                                                {{ $item->prodTitle }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div><!-- .input-item -->
                                                            </div>

                                                            <div class="text-white"> ,</div>

                                                            <div class="col-md-6">
                                                                <div class="input-item input-with-label">
                                                                    <label class="input-item-label">Select Quantity</label>
                                                                    {{-- <input class="input-bordered" placeholder="Your Email" id="ex_form" name="email" type="text" value="kennethayogu@gmail.com"> --}}
                                                                    <select name="quantity" id="quantity"
                                                                        data-shb-product-option="data-shb-product-option"
                                                                        class="select select-block select-bordered selectpicker"
                                                                        required="required" data-live-search="true"
                                                                        name="type">

                                                                        <option value="">Waiting For Network</option>

                                                                        {{-- <option value="1">1 PCS (Check Price)</option>
                                    <option value="10">10 PCS (Buy)</option>
                                    <option value="20">20 PCS (Buy)</option>
                                    <option value="30">30 PCS (Buy)</option>
                                    <option value="40">40 PCS (Buy)</option>
                                    <option value="60">60 PCS (Buy)</option>
                                    <option value="80">80 PCS (Buy)</option>
                                    <option value="100">100 PCS (Buy)</option> --}}

                                                                    </select>
                                                                </div><!-- .input-item -->
                                                            </div>

                                                            <div class="text-white"> ,</div>
                                                            <div class="col-md-6" id="aamount">
                                                                <div class="input-item input-with-label">
                                                                    <label class="input-item-label">Select
                                                                        Denomination</label>
                                                                    <select name="amount" id="amount"
                                                                        data-shb-product-option="data-shb-product-option"
                                                                        class="select select-block select-bordered selectpicker"
                                                                        required="required" data-live-search="true"
                                                                        name="type">

                                                                        <option value="">Waiting For Quantity</option>

                                                                        {{-- <option value="100">100 NGN</option>
                                    <option value="200">200 NGN</option>
                                    <option value="500">500 NGN</option>
                                    <option value="1000">1000 NGN</option> --}}

                                                                    </select>
                                                                </div><!-- .input-item -->
                                                            </div>

                                                            <input type="hidden" id="phone" name="phone"
                                                                type="text" value="{{ $user->phone }}">

                                                            <div class="col-md-12">
                                                                <div class="gaps-1x"></div>
                                                                {{-- <input type="reset" value="Cancel" class="btn btn-warning"> --}}
                                                                <input type="submit" value="Pay" id="pay"
                                                                    class="btn btn-success" style="display: none">
                                                                <input type="submit" value="Pay" id="payd"
                                                                    class="btn btn-secondary" disabled>
                                                                <img id="verify_loading2" width="20" height="20"
                                                                    src="{{ asset('frontend1/images/loader.gif') }}"
                                                                    alt="Airtime Recharge Online">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p style=""></p>
                                                </div>
                                            </form>
                                        </div>





                                    </div>

                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                //  $('#quantity').hide();
                $('#pay').hide();

                $('#network').on('change', function(e) {
                    e.preventDefault();
                    // $('#quantity').show();
                    // alert('dfgh');

                    $('#quantity').html(
                        '<option value="">Click To Select Network</option><option value="1">1 PCS (Check Price)</option><option value="10">10 PCS (Buy)</option><option value="30">30 PCS (Buy)</option><option value="40">40 PCS (Buy)</option><option value="60">60 PCS (Buy)</option><option value="80">80 PCS (Buy)</option><option value="100">100 PCS (Buy)</option>'
                    );

                    // $('#pay').val('Pay...');
                    $('#pay').hide();
                    $('#payd').show();
                    $('#amount').html("<option value=''>Waiting For Quantity</option>");
                });


                $('#quantity').on('change', function(e) {
                    e.preventDefault();
                    var network = $('#network').val();
                    $('#pay').hide();
                    $('#payd').show();
                    var per = 100;
                    $.ajax({
                        url: "{{ route('amount') }}",
                        method: "POST",
                        //   dataType: 'json',

                        // data: $('rate-form').serialize(),
                        data: {
                            'network': network,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },

                        beforeSend: function() {
                            $('#amount').html("<option value=''>Loading Denomination...</option>");


                        },

                        // actionCode = parsedData.actionCode;
                        success: function(data) {
                            //   $('#amount').html(data);
                            var fetchData = JSON.parse(data);

                            var output = "";
                            for (var i in fetchData) {
                                output += "<option value='" + fetchData[i].id + "'>" + fetchData[i]
                                    .name + "</option>";
                            }
                            output += "";
                            $('#amount').html("<option value=''>Select Denomination</option>" +
                                output);


                        }
                    });

                });

                $('#amount').on('change', function(e) {
                    e.preventDefault();
                    var amountid = $('#amount').val();
                    var quantity = $('#quantity').val();

                    // var total = amount*quantity;
                    $('#pay').val('Pay...');
                    $('#payd').val('Pay...');

                    // $('#pay').val('Pay N'+total);



                    $.ajax({
                        url: "{{ route('variation') }}",
                        method: "POST",
                        dataType: 'json',


                        // data: $('rate-form').serialize(),
                        data: {
                            'amountid': amountid,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },

                        beforeSend: function() {


                        },
                        // actionCode = parsedData.actionCode;
                        success: function(data) {
                            $('#verify_loading').hide();
                            $('#verify_loading2').hide();



                            var total1 = data.amount - data.per / 100 * data.amount;
                            var total = total1 * quantity;
                            $('#pay').show();
                            $('#payd').hide();
                            $('#pay').val('Pay N' + total);

                        }

                    });

                });



                $('#verify_loading').hide();
                $('#verify_loading2').hide();
                //$('#success').hide();

                $('#pay').on('click', function(e) {
                    e.preventDefault();

                    $('#emptyError').hide();
                    $('#verify_loading').hide();
                    $('#verify_loading2').hide();

                    var network = $('#network').val();
                    var phone = $('#phone').val();
                    var amount = $('#amount').val();
                    var quantity = $('#quantity').val();
                    var transid = '{{ time() }}';

                    if (network == '' || phone == '' || amount == '' || quantity == '') {
                        $('#emptyError').show();
                        $('#emptyError').html('Error: Your input can not be empty');

                    } else if (quantity < 10) {
                        $('#emptyError').show();
                        $('#emptyError').html('Error: You can not purchase below 10 Quantity');

                    } else {

                        $.ajax({
                            url: "{{ route('pay') }}",
                            method: "POST",
                            dataType: 'json',

                            beforeSend: function() {
                                $('#verify_loading').show();
                                $('#verify_loading2').show();
                                $('#success').hide();

                            },
                            // data: $('rate-form').serialize(),
                            data: {
                                'network': network,
                                'phone': phone,
                                'amount': amount,
                                'quantity': quantity,
                                'transid': transid,
                                '_token': $('meta[name="csrf-token"]').attr('content')
                            },


                            // actionCode = parsedData.actionCode;
                            success: function(data) {
                                $('#verify_loading').hide();
                                $('#verify_loading2').hide();
                                if (data.code == 's0c') {

                                    $('#success').show();
                                    $('#success').html(network + ' Pin generated successfull');

                                } else {

                                    $('#emptyError').show();
                                    $('#emptyError').html(data.message);

                                }
                                // $('#verify_loading').hide();
                                //  $('#verify_loading2').hide();
                                //  $('#emptyError').show();
                                //  $('#emptyError').html(data.message);
                                // alert(data);


                            },

                            error: function(jqXHR, textStatus, errorThrown) {
                                $('#verify_loading').hide();
                                $('#verify_loading2').hide();
                                $('#emptyError').show();
                                $('#emptyError').html(
                                    'Error: This error may occure due to your bad input, Make sure this doesnt repeat again else <br>Reload the page if continue kindly contact the admin if this error is not from your end'
                                );
                                // alert(textStatus);
                                // console.error("Ajax status:", textStatus, errorThrown);
                            }

                        });

                    }




                });



            });
        </script>
    @endsection
