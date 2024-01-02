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



                                        <form method="POST" action="">

                                            <h2 class="page-ath-heading mt-0 mb-0"
                                                style="font-weight:400;font-size:
            30px;color:#2c80ff;">Fund
                                                Wallet </h2>

                                            <p class="mt-0 mb-0"> Please note that the below account number have a <b>stamp
                                                    duty charge which is <strike>N</strike>90 per deposite</b>. </p>
                                            <p class="mt-0 mb-0">So avoid Multiple deposit by depositing in a strategic way.
                                            </p>

                                            @if (Session::has('success'))
                                                <div class="alert btn-success">{!! Session::get('success') !!}</div>
                                            @endif

                                            @if (Session::has('failed'))
                                                <div class="alert btn-danger"> {{ Session::get('failed') }}</div>
                                            @endif

                                            <div style="border:1px solid rgb(82, 230, 82); padding:2px" class="mt-2 mb-2">
                                                <h2 class="mt-0 mb-0"
                                                    style="font-weight:400;font-size:
    20px;color:#2c80ff;"><i
                                                        class="fas fa-wallet ml-1"></i> Manual Funding (<span
                                                        class="text-success">Specify Account</span>) <span
                                                        style="font-size: 12px">Stamp <strike>N</strike>90</span></h2>
                                                <p class="mt-0 mb-0"> Bank Name: Gt bank</p>
                                                <p class="mt-0 mb-0"> Acc Name: Kenme </p>
                                                <p class="mt-0 mb-0"> Acc Numb: 0610561789955</p>

                                            </div>

                                            <div style="border:1px solid rgb(82, 230, 82); padding:2px">
                                                <h2 class="mt-0 mb-0"
                                                    style="font-weight:400;font-size:
20px;color:#2c80ff;"><i
                                                        class="fas fa-wallet ml-1"></i> Fund Data Balance (<span
                                                        class="text-success"><strike>N</strike>{{ number_format($user->dataBalance) }}</span>)
                                                    <span style="font-size: 12px">Stamp <strike>N</strike>90</span></h2>
                                                <p class="mt-0 mb-0"> <b style="font-weight:400;font-size:15px;">

                                                        @if (empty($user->customerNumber))
                                                            <div class="text-danger">Click <a
                                                                    href="{{ route('instant') }}">here to generate</a>
                                                                instant account number</div>
                                                        @else
                                                            <h2 class="mt-0 mb-0"
                                                                style="font-weight:400;font-size:20px;color:#2c80ff;">
                                                                Instant Wallet Funding </h2>
                                                            <p class="mt-0 mb-0"> Bank: {{ $user->bankName }} </p>
                                                            <p class="mt-0 mb-0"> Account Name: {{ $user->customerName }}
                                                            </p>
                                                            <p class="mt-0 mb-0"> Account No: {{ $user->customerNumber }}
                                                            </p>
                                                        @endif
                                                    </b></p>
                                            </div>


                                            <div style="border:1px solid rgb(82, 230, 82); padding:2px" class="mt-2">
                                                <h2 class="mt-0 mb-0"
                                                    style="font-weight:400;font-size:
            20px;color:#2c80ff;"><i
                                                        class="fas fa-wallet ml-1"></i> Fund Pin Balance (<span
                                                        class="text-success"><strike>N</strike>{{ number_format($user->pinBalance) }}</span>)
                                                    <span style="font-size: 12px">Charge 1.5% </span></h2>




                                                <div class="col-md-6" id="aamount">
                                                    <div class="input-item input-with-label">
                                                        <label class="input-item-label">Amount</label>
                                                        <input class="input-bordered" placeholder="Enter Amount"
                                                            id="amount" name="amount" type="number"
                                                            required="required">
                                                    </div><!-- .input-item -->
                                                </div>


                                                <div class="col-md-12">

                                                    {{-- <input type="reset" value="Cancel" class="btn btn-warning"> --}}
                                                    <input type="submit" value="Pay Now" id="pay"
                                                        class="btn btn-success">
                                                </div>
                                            </div>


                                        </form>



                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div>
                </div>
            </div>
            <script src="https://js.paystack.co/v1/inline.js"></script>
            <script>
                $(document).ready(function() {


                    $('#pay').on('click', function(e) {

                        e.preventDefault();

                        var amount = $('#amount').val();
                        var email = '{{ $user->email }}';
                        var txnid = '{{ time() }}';
                        var name = '{{ $user->name }}';
             if(!parseInt(amount))
                 {
              return alert('Amount must be a numeric');
                 }
                        $.ajax({
                            url: "{{ route('paysinit') }}",
                            method: "POST",
                            data: {
                                'insert': 'new',
                                'txnid': txnid,
                                'amount': amount,
                                '_token': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: "json",
                        });

                        var  charge = 1.5;
                        var aamount= charge/100*amount;
                        var chargeAmount=parseFloat(aamount) + parseFloat(amount);

                        // var aamount += parseInt(amount);
                        var handler = PaystackPop.setup({
                            key: '{{ $settings->payStackPublic }}',
                            email: email,
                            amount: chargeAmount * 100,
                            bearer: 'subaccount',

                            ref: txnid, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                            metadata: {
                                custom_fields: [{
                                    display_name: name,
                                    value: txnid
                                }]
                            },
                            callback: function(response) {

                                // let message = 'Payment complete! Reference: ' + response.reference;
                                // alert(message);
                                var check =
                                    '{{ isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http' . str_replace(['/', '.', ':'], ['f', 'o', 'z'], "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . time() . 'kencheck') }}';
                                window.location = "user/fundv/" + response.reference + "/" + check;
                            },

                            onClose: function() {
                                alert('window closed');

                                $.ajax({
                                    url: "{{ route('paysinit') }}",
                                    method: "POST",
                                    data: {
                                        'insert': 'close',
                                        'txnid': txnid,
                                        '_token': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    dataType: "json",
                                });
                            }
                        });
                        handler.openIframe();

                    });

                });
            </script>
        @endsection
