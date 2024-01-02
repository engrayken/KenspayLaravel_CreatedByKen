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
            <img style="padding-right: 8px;" id="product-image" src="{{ asset('frontend1/images/Airtime.jpg') }}" alt="Data Subscription" width="100px" height="100px" class="product-image">
            <div>
                <h3 style="color:#174159;"><strong>Data Subscription</strong></h3>
                <p style="">Data - Top Up Instant Data</p>
            </div>
        </div>
        <div class="gaps-1x"></div>

                                <div class="gaps-3x"></div>
        <div class="row">
            <form method="POST" action="" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data"><input name="_token" type="hidden" value="t82ZLvqCuNFdGkfb05L13xNaL0egIRI4Ymw7gSP6">
            @csrf
                <div class="col-xl-12">
                                                <div id="product-details">
                                            <div class="row">

                                                <div class="col-md-12 d-flex justify-content-start align-items-start"  id="verify_tab" style="">
                                                    <div id="verify_loading" style="padding:10px 0px 20px 0px;" style="display: none">
                                                        <img width="30" height="30" src="{{ asset('frontend1/images/loader.gif') }}" alt="Airtime Recharge Online">
                                                        <span style="color:#758698;margin-left:10px;">Please Wait...</span>
                                                    </div>
                        @if(Session::has('failed'))
                    <div class="text-danger mt-4" id="emptyError">
                    {{ Session::get('failed') }}
                        </div>
                        @endif
                        
                        <div class="alert text-danger mt-4" id="emptyError" style="display: none"></div>
                    
                         @if(Session::has('success'))
                    <div class="text-success mt-4" id="success">
                    {{ Session::get('success') }}
                        </div>
                        @endif

                        <div class="alert btn-success mt-4" id="success" style="display: none"></div>
                
                                                </div>


                        <div class="col-md-6">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">Select Network</label>
                                {{-- <input class="input-bordered" placeholder="Your Email" id="ex_form" name="email" type="text" value="kennethayogu@gmail.com"> --}}
                                <select name="network" id="network" data-shb-product-option="data-shb-product-option" class="select select-block select-bordered selectpicker" id="s_option_1" required="required" data-live-search="true" name="type">
                                    <option value="">Click To Select Network</option>
                                    @foreach ($network as $item)
                                        <option value="{{ $item->prodName }}">{{ $item->prodTitle }}</option>
                                    @endforeach

                                </select>
                            </div><!-- .input-item -->
                        </div>

                      <div class="text-white"> ,</div>

                     <div class="col-md-6">
                                <div class="input-item input-with-label">
                                <label class="input-item-label">
                                    Phone Number
                                <span class="pdtsubarr" data-product-id="1" id="customer" style="font-family: Roboto;font-style: normal;font-weight: 500;font-size: 11px;line-height: 9px;letter-spacing: 0.05em;color: #D50000;cursor:pointer;">
                                Select from saved Cantact
                                <img class="pdtsubarr" src="{{ asset('frontend1/images/decoder.png') }}"/>
                                </span>
                                </label>
                                <div style="display: none" id="customerlistDiv" class="mb-2">
                                <select  name="customerlist" id="customerlist" style="position:absolute; :none" class="select select-block select-bordered selectpicker">
                                </select>
                                </div>
                            <input class="input-bordered pdtsubarr" placeholder="Enter Phone Number" data-product-id="1" autocomplete="off" data-customer-id="4360" id="phone" name="phone" type="text" required="required">
<span class="pdtsubarr" data-product-id="1" id="contactSave" style="font-family: Roboto;font-style: normal;font-weight: 500;font-size: 11px;line-height: 9px;letter-spacing: 0.05em;color: #D50000;cursor:pointer;">
                               Didn't Save it before, Click to Save the above Number</span>
                        </div><!-- .input-item -->
                        </div>

                        <div class="text-white"> ,</div>
                        <div id="contactDisplay" class="alert btn-alert alert-primary w-50" style="position:absolute; z-index: 1000; display:none">
                        <div class="input-item input-with-label">
                                <label class="input-item-label">Contact Name</label>
                                <input class="input-bordered" placeholder="Enter Contact Name" id="cname" name="cname" type="text">
                            </div>
                            <span id="okContact" class="btn btn-success">Ok</span>
                            <span id="noContact" class="btn btn-danger">Cancel</span>

                        </div>

                        <div class="text-white"> ,</div>
                        <div class="col-md-6" id="aamount">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">Select Amount</label>
                                <select name="amount" id="amount" data-shb-product-option="data-shb-product-option" class="select select-block select-bordered selectpicker" id="s_option_1" required="required" data-live-search="true" name="type">

                                    <option value="">Waiting for network</option>

                            </select>          </div><!-- .input-item -->
                        </div>


                        <div class="col-md-12">
                            <div class="gaps-3x"></div>
                            {{-- <input type="reset" value="Cancel" class="btn btn-warning"> --}}
                            <input type="submit" value="Pay Now" id="pay" class="btn btn-success">
                            <img id="verify_loading2" width="20" height="20" src="{{ asset('frontend1/images/loader.gif') }}" alt="Airtime Recharge Online">
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

    $('#customerlist').hide();
    $('#customerlistDiv').hide();
    $('#contactDisplay').hide();

$('#contactSave').on('click', function(e) {
       $('#contactDisplay').show();

});
$('#okContact').on('click', function(e) {
       $('#contactDisplay').hide();

});
$('#noContact').on('click', function(e) {
    $('#cname').val('');
       $('#contactDisplay').hide();

});

$('#customer').on('click', function(e) {
        e.preventDefault();

         $.ajax({
        url: "{{ route('phonebook') }}",
        method: "POST",
        //   dataType: 'json',

        // data: $('rate-form').serialize(),
        data:{'network':'network',
    	'_token': $('meta[name="csrf-token"]').attr('content')},

                            // actionCode = parsedData.actionCode;
        success: function(data) {
        //   $('#amount').html(data);
        var fetchData=JSON.parse(data);

                      var output="";
                for (var i in fetchData)
                {
                    output+="<option value='"+ fetchData[i].phone +"'>" + fetchData[i].cname +"</option>";
                }
                output+="";
          $('#customerlist').html('<option value="">click to select contact</option>'+output);


        }
        });

    $('#customerlist').show();
    $('#customerlistDiv').show();



});


$('#customerlist').on('change', function(e) {
        e.preventDefault();
        var customerlist = $('#customerlist').val();

    $('#customerlist').hide();
    $('#customerlistDiv').hide();

    $('#phone').val(customerlist);
// alert(customerlist);

});


$('#network').on('change', function(e) {
    e.preventDefault();

    $('#amount').html('<option value="0">Waiting For Network</option>');
    var network = $('#network').val();

    $.ajax({
        url: "{{ route('amount') }}",
        method: "POST",
        //   dataType: 'json',

        // data: $('rate-form').serialize(),
        data:{'network':network,
    	'_token': $('meta[name="csrf-token"]').attr('content')},

                            // actionCode = parsedData.actionCode;
        success: function(data) {
        //   $('#amount').html(data);
        var fetchData=JSON.parse(data);

                      var output="";
                for (var i in fetchData)
                {
                    output+="<option value='"+ fetchData[i].variation +"'>" + fetchData[i].name +" N"+ fetchData[i].amount +"</option>";
                }
                output+="";
          $('#amount').html('<option value="">Click To Select Amount</option>'+output);


        }
        });


});



// $('#amount').on('change', function(e) {
//         e.preventDefault();
// var amount = $('#amount').val();

//         $('#pay').val('Pay N'+amount);

//     });









$('#verify_loading').hide();
    $('#verify_loading2').hide();
    // $('#success').hide();

    $('#pay').on('click', function(e) {
        e.preventDefault();

        $('#emptyError').hide();
        $('#verify_loading').hide();
        $('#verify_loading2').hide();

        var network = $('#network').val();
        var phone = $('#phone').val();
        var amount = $('#amount').val();
        var quantity = '10';
        var transid = 'kpweb{{ time() }}';

        if (network=='' || phone=='' || amount=='') {
            $('#emptyError').show();
            $('#emptyError').html('Error: Your input can not be empty');

        } else {

            $.ajax({
        url: "{{ route('pay') }}",
        method: "POST",
          dataType: 'json',

        beforeSend:function(){
            $('#verify_loading').show();
    $('#verify_loading2').show();
    $('#success').hide();

        },
        // data: $('rate-form').serialize(),
        data:{'network':network,'phone':phone,'amount':amount,'quantity':quantity,'transid':transid,'cname':cname,
    	'_token': $('meta[name="csrf-token"]').attr('content')},


                            // actionCode = parsedData.actionCode;
        success: function(data) {
            $('#verify_loading').hide();
             $('#verify_loading2').hide();
             if(data.code=='s0c')
             {

             $('#success').show();
             $('#success').html('Data purchased successfull');

             } else{

             $('#emptyError').show();
             $('#emptyError').html(data.message);

             }
            // alert(data.message);


    },

    error:function(status)
    {
                $('#verify_loading').hide();
             $('#verify_loading2').hide();
             $('#emptyError').show();
             $('#emptyError').html('Error: This error may occure due to your bad input, Make sure this doesnt repeat again else <br> kindly contact the admin if this error is not from your end');
            // alert(data.message);
    }

    });

        }




    });




});
</script>

@endsection


