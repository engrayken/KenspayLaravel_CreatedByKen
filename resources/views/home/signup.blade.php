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

    <h2 class="page-ath-heading" style="font-weight:400;font-size:50px;color:#2c80ff;">SignUp <small style="font-weight:300;font-size:18px;">Create New Kenspay Account</small></h2>
    <form method="POST" action="{{ route('Signup') }}" accept-charset="UTF-8">
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
                    <i class="fas fa-user-circle ml-1"></i>
                </span>
            </div>
            <input type="text" placeholder="Enter Full Name" name="name" value="{{ old('name') }}" class="form-control" required>
        </div>
        @error('name')
        <p class="text-danger text-center" style="align:center">
        {{ $message }}
        </p>
        @enderror

        <div class="input-group mb-3" style="width:unset;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="far fa-envelope ml-1"></i>
                </span>
            </div>
            <input type="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" class="form-control" required>
        </div>
        @error('email')
        <p class="text-danger text-center" style="align:center">
        {{ $message }}
        </p>
        @enderror

        <div class="input-group mb-3" style="width:unset;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-mobile ml-1"></i>
                </span>
            </div>
            <input type="text" placeholder="Enter Phone Number" maxlength="11" name="phone" value="{{ old('phone') }}" class="form-control" required>
        </div>
        @error('phone')
        <p class="text-danger text-center" style="align:center">
        {{ $message }}
        </p>
        @enderror

        <div class="input-group mb-3" style="width:unset;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-lock ml-1"></i>
                </span>
            </div>
            <input type="password" name="password" placeholder="Enter Password" value="{{ old('password') }}" class="form-control" required>
        </div>
        @error('password')
        <p class="text-danger text-center" style="align:center">
        {{ $message }}
        </p>
        @enderror

        <div class="d-flex justify-content-between align-items-center">

        </div>
        <div class="form-note" style="font-size:12px">
          <b>  By clicking Sign Up you agreed to our <a href="{{ route('terms') }}"> <strong>Terms & Conditions</strong> </a>Services</b>
        </div>
        <button style="border-radius:100px;" class="btn btn-primary btn-block">Sign Up</button>
    </form>
    <div class="gaps-1x"></div>
    <div class="form-note" style="font-size:12px">
        Already have an account? <a href="login"> <strong>Signin</strong></a>
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
