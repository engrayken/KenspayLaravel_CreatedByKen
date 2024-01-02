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



        <form method="POST" action="{{ route('updateAccount') }}">

            <h2 class="page-ath-heading mt-0 mb-0" style="font-weight:400;font-size:
            30px;color:#2c80ff;">Update Profile </h2>


           <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:18px;color:#2c80ff;">
            <i class="fas fa-wifi ml-1"></i>
            @if ($user->pinEnable=='on')
<i id="off"><input type="checkbox" name="pinOff" id="pinOff" value="off" checked> Disable Pin</i>
            @else
<i id="on"><input type="checkbox" name="pinOn" id="pinOn" value="on"> Enable Pin</i>
            @endif
    <img id="verify_loading2" width="20" height="20" src="{{ asset('frontend1/images/loader.gif') }}" alt="Airtime Recharge Online">
           </b></p>

           <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:18px;color:#2c80ff;">
            <i class="far fa-user-circle ml-1"></i>
        </b> {{ $user->name }}</p>
           <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:18px;color:#2c80ff;">
            <i class="far fa-envelope ml-1"></i></b> {{ $user->email }}</p>
           <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:18px;color:#2c80ff;">
            <i class="fas fa-mobile ml-1"></i>
        </b> {{ $user->phone }}</p>
           <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:18px;color:#2c80ff;">
            <i class="fas fa-wallet ml-1"></i>
            Pin:</b> {{ number_format($user->pinBalance) }} <a href="{{ route('wallet') }}">(<small class="text-danger" style="font-size:12px"> Add Fund</small>)</a></p>
           <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:18px;color:#2c80ff;">
            <i class="fas fa-wallet ml-1"></i>
            Data:</b> {{ number_format($user->dataBalance) }} <a class="" href="{{ route('wallet') }}">(<small class="text-danger" style="font-size:12px"> Add Fund</small>)</a></p>
            {{-- <h2 style="font-weight:400;font-size:20px;color:#2c80ff;">Instant Wallet Funding </h2>
           <p class="mt-0 mb-0"> Bank: {{ $user->bankName }} </p>
            <p class="mt-0 mb-0"> Account Name: {{ $user->customerName }}</p>
            <p class="mt-0 mb-0"> Account No: {{ $user->customerNumber }} </p>

           <p class="mt-0 mb-0" style="font-weight:400;font-size:18px;color:#2c80ff;">Manuel Wallet Funding</p>

            <p class="mt-0 mb-0"> Bank Name:	Gt bank</p>
          <p class="mt-0 mb-0">  Acc Name:	Kenspay Technology </p>
          <p class="mt-0 mb-0">  Acc Numb:	0610567899</p> --}}
                       @csrf
        {{-- <input name="_token" type="hidden" value="t82ZLvqCuNFdGkfb05L13xNaL0egIRI4Ymw7gSP6"> --}}

        <div class="alert btn-success mt-4" id="success" style="display: none"></div>
           @if (Session::has('success'))
        <div class="alert btn-success" id="success"> {!! Session::get('success') !!}</div>
         @endif

        @if (Session::has('failed'))
       <div class="alert btn-danger"> {{ Session::get('failed') }}</div>
        @endif

                        <div class="alert text-danger mt-4" id="emptyError" style="display: none"></div>





        <div class="input-group mb-3" style="width:unset;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="far fa-user-circle ml-1"></i>
                </span>
            </div>
            <input type="text" placeholder="Enter Full Name" value=" {{ $user->name }}" name="name" class="form-control" required>
        </div>
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
            <div class="input-group mb-3" style="width:unset;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-info ml-1"></i>
                </span>
            </div>
            <input type="text" value=" {{ $user->bName }}"  placeholder="Enter Business Name" name="bName" class="form-control" required>
        </div>
        @error('bName')
        <p class="text-danger mt-0 mb-2">{{ $message }}</p>
        @enderror
        <button style="border-radius:100px;" class="btn btn-primary btn-block">Update</button>
    </form>




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

    $('#verify_loading').hide();
    $('#verify_loading2').hide();
    $('#success').hide();

    $('#pinOn').on('click', function(e) {
        // e.preventDefault();

        $('#emptyError').hide();
        $('#verify_loading').hide();
        $('#verify_loading2').hide();
        $('#success').hide();



        var setPin = $('#pinOn').val();

            $.ajax({
        url: "{{ route('setPin') }}",
        method: "POST",
          dataType: 'json',

        beforeSend:function(){
            $('#verify_loading').show();
    $('#verify_loading2').show();

        },
        // data: $('rate-form').serialize(),
        data:{'setPin':setPin,
    	'_token': $('meta[name="csrf-token"]').attr('content')},


                            // actionCode = parsedData.actionCode;
        success: function(data) {
            $('#verify_loading').hide();
             $('#verify_loading2').hide();
            //  alert(data.code);
            if(data.code=='s0c')
             {

            $('#success').show();
            $('#success').html('Pin Enabled successfull');
    $('#off').show();
    $('#on').hide();

            } else{

    $('#emptyError').show();
    $('#emptyError').html(data.message);

}


    },

    error:function(status)
    {
                $('#verify_loading').hide();
             $('#verify_loading2').hide();
             $('#emptyError').show();
             $('#emptyError').html('Error: This error may occure due to your bad input, Make sure this doesnt repeat again else <br> kindly contact the admin if this error is not from your end');
    }

    });




    });

 $('#pinOff').on('click', function(e) {

        // e.preventDefault();

        $('#emptyError').hide();
        $('#verify_loading').hide();
        $('#verify_loading2').hide();
        $('#success').hide();


        var setPin = $('#pinOff').val();


        // alert(setPin);

            $.ajax({
        url: "{{ route('setPin') }}",
        method: "POST",
          dataType: 'json',

        beforeSend:function(){
            $('#verify_loading').show();
    $('#verify_loading2').show();

        },
        // data: $('rate-form').serialize(),
        data:{'setPin':setPin,
    	'_token': $('meta[name="csrf-token"]').attr('content')},


                            // actionCode = parsedData.actionCode;
        success: function(data) {
            $('#verify_loading').hide();
             $('#verify_loading2').hide();
            //  alert(data.code);
            if(data.code=='s0c')
             {

            $('#success').show();
            $('#success').html('Pin Disabled successfull');
    $('#off').hide();
    $('#on').show();


            } else{

    $('#emptyError').show();
    $('#emptyError').html(data.message);

}


    },

    error:function(status)
    {
                $('#verify_loading').hide();
             $('#verify_loading2').hide();
             $('#emptyError').show();
             $('#emptyError').html('Error: This error may occure due to your bad input, Make sure this doesnt repeat again else <br> kindly contact the admin if this error is not from your end');
    }

    });




    });


});

</script>


@endsection
