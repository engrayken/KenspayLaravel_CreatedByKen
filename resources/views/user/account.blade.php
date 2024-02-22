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



                                        <form method="POST" action="{{ route('updateAccount') }}" id="updateForm">

                                            <h2 class="page-ath-heading mt-0 mb-0"
                                                style="font-weight:400;font-size:
                                                30px;color:#2c80ff;">
                                                Update
                                                Profile </h2>


                                            <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:18px;color:#2c80ff;">
                                                    <i class="fas fa-wifi ml-1"></i>
                                                    @if ($user->pinEnable == 'on')
                                                        <i id="off"><input type="checkbox" name="pinOff"
                                                                id="pinOff" value="off" checked> Disable Pin</i>
                                                    @else
                                                        <i id="on"><input type="checkbox" name="pinOn"
                                                                id="pinOn" value="on"> Enable Pin</i>
                                                    @endif
                                                    <img id="verify_loading2" width="20" height="20"
                                                        src="{{ asset('frontend1/images/loader.gif') }}"
                                                        alt="Airtime Recharge Online">
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
                                                    Pin:</b> {{ number_format($user->pinBalance) }} <a
                                                    href="{{ route('wallet') }}">(<small class="text-danger"
                                                        style="font-size:12px"> Add Fund</small>)</a></p>
                                            <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:18px;color:#2c80ff;">
                                                    <i class="fas fa-wallet ml-1"></i>
                                                    Data:</b> {{ number_format($user->dataBalance) }} <a class=""
                                                    href="{{ route('wallet') }}">(<small class="text-danger"
                                                        style="font-size:12px"> Add Fund</small>)</a></p>

                                            @csrf

                                            <div class="alert btn-success mt-4" id="success" style="display: none"></div>
                                            @if (Session::has('success'))
                                                <div class="alert btn-success" id="success"> {!! Session::get('success') !!}</div>
                                            @endif

                                            @if (Session::has('failed'))
                                                <div class="alert btn-danger"> {{ Session::get('failed') }}</div>
                                            @endif
                                            @error('new_password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            @error('old_password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <div class="alert text-danger mt-4" id="emptyError" style="display: none"></div>





                                            <div class="input-group mb-3" style="width:unset;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="far fa-user-circle ml-1"></i>
                                                    </span>
                                                </div>
                                                <input type="text" placeholder="Enter Full Name"
                                                    value=" {{ $user->name }}" name="name" class="form-control"
                                                    required>
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
                                                <input type="text" value=" {{ $user->bName }}"
                                                    placeholder="Enter Business Name" name="bName" class="form-control"
                                                    required>
                                            </div>
                                            @error('bName')
                                                <p class="text-danger mt-0 mb-2">{{ $message }}</p>
                                            @enderror

                                            @if (!$user->bvn && !$user->nin)
                                                <select name="type" id="type"
                                                    class="select select-block select-bordered selectpicker">
                                                    <option value="">Please Select Type</option>
                                                    <option value="bvn">Insert Bvn</option>
                                                    <option value="nin">Insert Nin</option>
                                                </select>
                                            @endif

                                            @error('type')
                                                <p class="text-danger mt-0 mb-2">{{ $message }}</p>
                                            @enderror
                                            <div class="gaps-1x"></div>

                                            <div class="input-group mb-3" style="width:unset; display:none"
                                                id="nin">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="fas fa-info ml-1"></i>
                                                    </span>
                                                </div>

                                                @if ($user->nin)
                                                    <input type="text" value=" {{ $user->nin }}"
                                                        placeholder="Enter 11 digit Nin Number" name="nin"
                                                        class="form-control" disabled>
                                            </div>
                                        @else
                                            <input type="text" value="" placeholder="Enter 11 digit Nin Number"
                                                name="nin" class="form-control">
                                    </div>
                                    @endif
                                    @error('nin')
                                        <p class="text-danger mt-0 mb-2">{{ $message }}</p>
                                    @enderror

                                    <div class="input-group mb-3" style="width:unset; display:none" id="bvn">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fas fa-info ml-1"></i>
                                            </span>
                                        </div>

                                        @if ($user->bvn)
                                            <input type="text" value=" {{ $user->bvn }}"
                                                placeholder="Enter 11 digit Bvn Number" name="bvn"
                                                class="form-control" disabled>
                                    </div>
                                @else
                                    <input type="text" value="" placeholder="Enter 11 digit Bvn Number"
                                        name="bvn" class="form-control">
                                </div>
                                @endif

                                @error('bvn')
                                    <p class="text-danger mt-0 mb-2">{{ $message }}</p>
                                @enderror

                                <button style="border-radius:100px;" class="btn btn-primary btn-block">Update</button>

                                <button style="border-radius:100px;" id="cpass"
                                    class="btn btn-danger btn-block">Change Password</button>

                                </form>
                                <form method="POST" action="{{ route('updatePass') }}" id="passForm"
                                    style="display: none">
                                    @csrf
                                    <h2 class="page-ath-heading mt-0 mb-0"
                                        style="font-weight:400;font-size:
                                                30px;color:#2c80ff;">
                                        Change
                                        Password </h2>


                                    <div class="input-group mb-3" style="width:unset;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fas fa-key-circle ml-1"></i>
                                            </span>
                                        </div>
                                        <input type="password" placeholder="Enter Old Password" name="old_password"
                                            class="form-control" required>
                                    </div>


                                    <div class="input-group mb-3" style="width:unset;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fas fa-key-circle ml-1"></i>
                                            </span>
                                        </div>
                                        <input type="password" placeholder="Enter New Password" name="new_password"
                                            class="form-control" required>
                                    </div>

                                    <button style="border-radius:100px;" id="pcpass"
                                        class="btn btn-secondary btn-block">Change Now</button>

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

            $('#bvn').hide();
            $('#nin').hide();

            $('#type').on('change', function(e) {
                // e.preventDefault();
                var type = $('#type').val();
                if (type == 'bvn') {
                    $('#bvn').show();
                    $('#nin').hide();
                }
                if (type == 'nin') {
                    $('#bvn').hide();
                    $('#nin').show();
                }


            });



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
                    method: "PUT",
                    dataType: 'json',

                    beforeSend: function() {
                        $('#verify_loading').show();
                        $('#verify_loading2').show();

                    },
                    // data: $('rate-form').serialize(),
                    data: {
                        'setPin': setPin,
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    },


                    // actionCode = parsedData.actionCode;
                    success: function(data) {
                        $('#verify_loading').hide();
                        $('#verify_loading2').hide();
                        //  alert(data.code);
                        if (data.code == 's0c') {

                            $('#success').show();
                            $('#success').html('Pin Enabled successfull');
                            $('#off').show();
                            $('#on').hide();

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

                    beforeSend: function() {
                        $('#verify_loading').show();
                        $('#verify_loading2').show();

                    },
                    // data: $('rate-form').serialize(),
                    data: {
                        'setPin': setPin,
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    },


                    // actionCode = parsedData.actionCode;
                    success: function(data) {
                        $('#verify_loading').hide();
                        $('#verify_loading2').hide();
                        //  alert(data.code);
                        if (data.code == 's0c') {

                            $('#success').show();
                            $('#success').html('Pin Disabled successfull');
                            $('#off').hide();
                            $('#on').show();


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
                    }

                });




            });



            $('#cpass').show();
            $('#pcpass').hide();
            $('#passForm').hide();

            $('#cpass').on('click', function(e) {
                e.preventDefault();
                var cpass = $('#cpass').val();
                var pcpass = $('#pcpass').val();
                var updateForm = $('#updateForm').val();
                var passForm = $('#passForm').val();
                $('#cpass').hide();
                $('#pcpass').show();
                $('#updateForm').hide();
                $('#passForm').show();

            });



        });
    </script>
@endsection
