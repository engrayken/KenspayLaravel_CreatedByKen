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
                                            {{-- <img style="padding-right: 8px;" id="product-image" src="{{ asset('frontend1/images/Airtime.jpg') }}" alt="{{ $post->network }}" width="100px" height="100px" class="product-image"> --}}
                                            <h3 class="text-uppercase" style="color:#174159;">
                                                <strong>{{ $post->network }}</strong>
                                            </h3>

                                            {{-- <h3 class="text-uppercase" style="color:#174159;"><strong>{{ $post->network }}</strong></h3> --}}
                                        </div>
                                        <p class="text-uppercase" style="font-size:15px">Status:
                                            @if ($post->status == 1)
                                                <span class="text-success">Successful</span>
                                            @else
                                                <span class="text-danger">Failed</span>
                                            @endif
                                        </p>
                                        <div class="gaps-1x"></div>

                                        <div class="row">
                                            <form method="POST" action="{{ route('print') }}" accept-charset="UTF-8" autocomplete="off"
                                                enctype="multipart/form-data">
                                            @csrf
                                                <div class="col-xl-12">
                                                    <div id="product-details">
                                                        <div class="row">



                                                            <div class="col-md-6">
                                                                <i class="fas fa-info ml-1"></i>
                                                                <b>Trans ID: </b> {{ $post->transId }}
                                                            </div>
                                                            <div class="text-white"> ,</div>

                                                            @if ($post->quantity!=0)
                                                            <div class="col-md-6">
                                                                <i class="fas fa-info-circle ml-1"></i>
                                                                <b>Quantity: </b> {{ $post->quantity }}
                                                            </div>

                                                            @endif

                                                               @if ($post->billersCode!=0)
                                                            <div class="col-md-6">
                                                                <i class="fas fa-info-circle ml-1"></i>
                                                                <b>BillersCode: </b> {{ $post->billersCode }}
                                                            </div>
                                                            @endif
                                                            <div class="text-white"> ,</div>
                                                            <div class="col-md-6">
                                                                <i class="fas fa-wallet ml-1"></i>
                                                                <b>Amount:</b>  <strike>N</strike>{{ number_format($post->deno) }}

                                                            </div>

                                                            <div class="text-white"> ,</div>

                                                            <div class="col-md-6">
                                                                <i class="fas fa-wallet ml-1"></i>
                                                                <b>Total Amount Charge: </b> <strike>N</strike>{{ number_format($post->amount) }}

                                                            </div>

                                                            <div class="text-white"> ,</div>
                                                            <div class="col-md-6" id="aamount">

                                                                <i class="fas fa-clock ml-1"></i>
                                                                <b>Date:</b>
                                                                {{ date('d M, Y, i:hA', strtotime($post->created_at)) }}
                                                            </div>

                                                            @if ($epin)


                                                                <div class="gaps-3x"></div>
                                                            <div class="text-white"> ,</div>

                                    <div class="col-md-6">
                            <div class="input-item input-with-label">
                                 <select name="per" id="per" data-shb-product-option="data-shb-product-option" class="select select-block select-bordered selectpicker" id="s_option_1" required="required" data-live-search="true" name="type">
                                    <option value="">Click To Select Per Page</option>
                                    <option value="2">20 Per Page</option>
                                    <option value="3">30 Per Page</option>
                                    <option value="4">40 Per Page</option>
                                    </select>
                            </div></div>

                                <input type="hidden" name="transId" value="{{ $post->transId }}" id="transId">
                                                            <div class="col-md-12">
                                                                {{-- <input type="reset" value="Cancel" class="btn btn-warning"> --}}
                                                                <button class="btn btn-success">
                                                                <i class="fas fa-print ml-1"></i>
                                                                    Print Card</button>
                                                            </div>
                                                             @endif
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

        {{-- <script>
            $(document).ready(function() {

                $('#amount').on('keyup', function(e) {
                    e.preventDefault();
                    var network = $('#network').val();
                    // $('#pay').hide();
                    $('#pay').val('Pay ...');

                    $.ajax({
                        url: "{{ route('amount') }}",
                        method: "POST",
                        //   dataType: 'json',

                        // data: $('rate-form').serialize(),
                        data: {
                            'network': network,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },


                        // actionCode = parsedData.actionCode;
                        success: function(data) {
                            $('#amount').html(data);
                            var fetchData = JSON.parse(data);

                            var output = "";
                            for (var i in fetchData) {
                                output += fetchData[i].variation;
                            }
                            output += "";

                            var amount = $('#amount').val();
                            var per = 100;
                            var buy = output / per * amount;
                            var total = amount - buy;
                            $('#pay').val('Pay N' + total);

                            // $('#pay').show();
                            // $('#payd').hide();
                        }
                    });







                });


                $('#verify_loading').hide();
                $('#verify_loading2').hide();
                $('#success').hide();
                $('#pay').on('click', function(e) {
                    e.preventDefault();

                    $('#emptyError').hide();
                    $('#verify_loading').hide();
                    $('#verify_loading2').hide();
                    $('#success').hide();


                    var network = $('#network').val();
                    var phone = $('#phone').val();
                    var amount = $('#amount').val();
                    var quantity = '10';
                    var transid = 'kpweb{{ time() }}';

                    if (network == '' || phone == '' || amount == '') {
                        $('#emptyError').show();
                        $('#emptyError').html('Error: Your input can not be empty');

                    } else {

                        $.ajax({
                            url: "{{ route('pay') }}",
                            method: "POST",
                            dataType: 'json',

                            beforeSend: function() {
                                $('#verify_loading').show();
                                $('#verify_loading2').show();
                            },
                            // data: $('rate-form').serialize(),
                            data: {
                                'network': network,
                                'phone': phone,
                                'amount': amount,
                                'quantity': quantity,
                                transid,
                                '_token': $('meta[name="csrf-token"]').attr('content')
                            },


                            // actionCode = parsedData.actionCode;
                            success: function(data) {
                                $('#verify_loading').hide();
                                $('#verify_loading2').hide();
                                if (data.code == 's0c') {

                                    $('#success').show();
                                    $('#success').html(network + ' Airtime purchased successfull');

                                } else {

                                    $('#emptyError').show();
                                    $('#emptyError').html(data.message);

                                }


                            },

                            error: function(status) {
                                $('#verify_loading').hide();
                                $('#verify_loading2').hide();
                                $('#emptyError').show();
                                $('#emptyError').html(
                                    'Error: This error may occure due to your bad input, Make sure this doesnt repeat again else <br> kindly contact the admin if this error is not from your end'
                                );
                                // alert(data.message);
                            }

                        });

                    }




                });




            });
        </script> --}}
    @endsection
