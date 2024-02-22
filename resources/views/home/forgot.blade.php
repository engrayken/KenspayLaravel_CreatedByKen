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

                                    <h2 class="page-ath-heading" style="font-weight:400;font-size:50px;color:#2c80ff;">Forgot
                                        Pass
                                        <small style="font-weight:300;font-size:18px;">You Forgot your password no
                                            issues</small>
                                    </h2>
                                    <form method="POST" action="" accept-charset="UTF-8">
                                        @csrf
                                        {{-- <input name="_token" type="hidden" value="t82ZLvqCuNFdGkfb05L13xNaL0egIRI4Ymw7gSP6"> --}}
                                        @if (Session::has('success'))
                                            <div class="alert btn-success"> {{ session::get('success') }}</div>
                                        @elseif (Session::has('failed'))
                                            <div class="alert btn-danger"> {{ session::get('failed') }}</div>
                                        @endif

                                        <div class="input-group mb-3" style="width:unset;">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="far fa-envelope ml-1"></i>
                                                </span>
                                            </div>
                                            <input type="text" placeholder="Enter Email" name="email"
                                                value="{{ old('email') }}" class="form-control">
                                            @error('email')
                                                <p class="text-danger text-center" style="align:center">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>

                                        <button style="border-radius:100px;" class="btn btn-primary btn-block">Retrieve
                                            Password</button>
                                    </form>
                                    <div class="gaps-1x"></div>

                                    <div class="form-note" style="font-size:12px">
                                        Already have an account? <a href="login"> <strong>Login</strong></a>
                                    </div>
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
