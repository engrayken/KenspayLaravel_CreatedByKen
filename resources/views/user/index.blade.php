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





                <div class="col-lg-4">
                    <div class="card height-auto" style="background-image: linear-gradient(to right, #173D52, #195B7e);border-radius: 20px;">
                    <div class="card-innr">
                        <div class="text-white d-flex align-items-end justify-content-end">Automatic    ({{ $user->bankName }})</div>

                        <div class="token-balance token-balance-with-icon">
                            <i class="fas fa-wifi text-white p-2"></i>
                            <div class="token-balance-text">
                                <h6 class="card-sub-title" style="color:#65caff;">Data <span style="color:#ffffff;">{{ number_format($user->dataBalance,2) }} <span>NGN</span></span></h6>

                            </div>

                        </div>
                        <div class="token-balance token-balance-s2">
                           @if ($user->customerNumber!=0)

                            <h6 class="card-sub-title" style="color:#ffffff;">{{ $user->customerNumber }}</h6>
                            <h6 class="card-sub-title" style="color:#65caff;">{{ $user->customerName }}</h6>

                            @else
                            <h6 class="card-sub-title" style="color:#ffffff;"><a class="text-danger" href="instant">Click  Here to Generate</a> Instant Wallet Account Number</h6>
                            @endif
                            <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                <img width="20px" height="20px" src="{{ asset('frontend1/images/mastercard.png') }}" alt="logo">
                              </div>
                        </div>
                    </div>
                </div>
              </div>



              <div class="col-lg-4">
                <div class="card height-auto" style="background-image: linear-gradient(to right, #173D52, #195B7e);border-radius: 20px;">
                <div class="card-innr">
                    <div class="text-white d-flex align-items-end justify-content-end">Manual    (GTBank)</div>

                    <div class="token-balance token-balance-with-icon">
                        <i class="fas fa-wifi text-white p-2"></i>
                        <div class="token-balance-text">
                            <h6 class="card-sub-title" style="color:#65caff;">Pin <span style="color:#ffffff;">{{ number_format($user->pinBalance,2) }} <span>NGN</span></span></h6>

                        </div>

                    </div>
                    <div class="token-balance token-balance-s2">
                        <h6 class="card-sub-title" style="color:#ffffff;">0610 567 899</h6>
                        <h6 class="card-sub-title" style="color:#65caff;">Kenspay Technology</h6>

                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                            <img width="20px" height="20px" src="{{ asset('frontend1/images/mastercard.png') }}" alt="logo">
                          </div>
                    </div>
                </div>
            </div>
          </div>



</div>

</div>
</div><!-- .col -->
</div><!-- .row -->
</div><!-- .container -->
</div>
</div>
</div>

@endsection
