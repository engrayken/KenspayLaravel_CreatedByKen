@extends('home.app')

@section('content')

<div class="page-content">
    <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-12">
<div class="container" style="max-width: 100% !important;">
    <div class="page-ath">
        <div class="page-ath-wrap">
            <div class="page-ath-content">
                <div class="page-ath-form pl-5">

    <h2 class="page-ath-heading" style="font-weight:400;font-size:50px;color:#2c80ff;">Welcome <small style="font-weight:300;font-size:18px;">Sign in to your Kenspay Account</small></h2>
    <form method="POST" action="{{ route('Login') }}" accept-charset="UTF-8">
        @csrf
        {{-- <input name="_token" type="hidden" value="t82ZLvqCuNFdGkfb05L13xNaL0egIRI4Ymw7gSP6"> --}}
        @if (Session::has('success'))
        <div class="alert btn-success"> {!! Session::get('success') !!}</div>
         @endif

        @if (Session::has('failed'))
       <div class="alert btn-danger"> {{ Session::get('failed') }}</div>
        @endif
        
            <div class="input-group mb-3" style="width:unset;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="far fa-envelope ml-1"></i>
                </span>
            </div>
            <input type="text" placeholder="Enter Email" name="email" class="form-control">
        </div>
        <div class="input-group mb-3" style="width:unset;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-lock ml-1"></i>
                </span>
            </div>
            <input type="password" name="password" placeholder="Enter Password" class="form-control">
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a style="font-size:12px;" href="forget-password">Forgot password?</a>
                <div class="gaps-1x"></div>
            </div>
        </div>
        <button style="border-radius:100px;" class="btn btn-primary btn-block">Sign In</button>
    </form>
    <div class="gaps-1x"></div>
    <div class="form-note" style="font-size:12px">
        Don’t have an account? <a href="register"> <strong>Sign up</strong></a>
    </div>
</div>
</div>
{{-- <div class="page-ath-gfx" style="background-image:url('{{ asset('frontend1/images/lagos.jpg') }}');background-position: center;background-repeat: no-repeat;background-size: cover;">
</div> --}}
</div>
</div>

</div> <!-- .container -->
</div>
</div>
</div>

@endsection
