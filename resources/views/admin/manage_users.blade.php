@extends('admin.app')

@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-user-plus mr-2"></i> <span class="font-weight-semibold">{{ $user->name }}
                            Profile</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.user') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Users</a>
                        <a href="{{ route('admin.manage_users', $user->id) }}" class="breadcrumb-item">Profile</a>
                    </div>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            @if (Session::has('failed'))
                <div class="alert bg-danger alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">User Status</h6>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert bg-success alert-styled-left alert-arrow-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <h6 class="alert-heading font-weight-semibold mb-1">User Status</h6>
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title font-weight-semibold">Kyc verification</h6>
                            <div class="header-elements">
                                <div class="list-icons text-orange-600">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title font-weight-semibold">Update account information</h6>
                            <div class="header-elements">
                                <div class="list-icons text-orange-600">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.profile', $user->id) }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Name:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Email:</label>
                                    <div class="col-lg-10">
                                        <input type="email" name="email" class="form-control" readonly
                                            value="{{ $user->email }}">
                                    </div>
                                    @error('email')
                                        <i class="text-danger">{{ $message }}</i>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Mobile:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ $user->phone }}">
                                    </div>
                                    @error('phone')
                                        <i class="text-danger">{{ $message }}</i>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Data Balance:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">

                                            <input type="number" name="dep_bal" max-length="10"
                                                value="{{ $user->dataBalance }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Pin Balance:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="number" name="bit_bal" max-length="10"
                                                value="{{ $user->pinBalance }}" class="form-control" disabled>
                                            <span class="input-group-append">
                                                <span class="input-group-text">NGN</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">BVN</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="number" name="bvn" max-length="10"
                                                value="{{ $user->bvn }}" class="form-control" placeholder="bvn">
                                            <input type="number" name="nin" max-length="10"
                                                value="{{ $user->nin }}" class="form-control" placeholder="nin">
                                            <span class="input-group-append">
                                            </span>

                                        </div>
                                        @error('bvn')
                                            <i class="text-danger">{{ $message }}</i>
                                        @enderror
                                        @error('nin')
                                            <i class="text-danger">{{ $message }}</i>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Business Name:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="bName" class="form-control"
                                            value="{{ $user->bName }}">
                                    </div>
                                    @error('bName')
                                        <i class="text-danger">{{ $message }}</i>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">BankName:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" name="bankName" max-length="10"
                                                value="{{ $user->bankName }}" class="form-control">
                                            <span class="input-group-append">
                                            </span>
                                        </div>
                                        @error('bankName')
                                            <i class="text-danger">{{ $message }}</i>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Account Name:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" name="customerName" max-length="10"
                                                value="{{ $user->customerName }}" class="form-control">
                                            <span class="input-group-append">
                                            </span>
                                        </div>
                                        @error('customerName')
                                            <i class="text-danger">{{ $message }}</i>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Account Number:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" name="customerNumber" max-length="10"
                                                value="{{ $user->customerNumber }}" class="form-control">
                                            <span class="input-group-append">
                                            </span>
                                        </div>
                                        @error('customerNumber')
                                            <i class="text-danger">{{ $message }}</i>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Reference:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" name="reference" max-length="10"
                                                value="{{ $user->reference }}" class="form-control">
                                            <span class="input-group-append">
                                            </span>
                                        </div>
                                        @error('reference')
                                            <i class="text-danger">{{ $message }}</i>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Website:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" name="website" max-length="10"
                                                value="{{ $user->website }}" class="form-control"
                                                placeholder="eg kenspay/carddispenser" required>
                                            <span class="input-group-append">
                                            </span>
                                        </div>
                                        @error('website')
                                            <i class="text-danger">{{ $message }}</i>
                                        @enderror
                                    </div>
                                </div>



                                <div class="text-right">
                                    <button type="submit" class="btn bg-orange">Update profile<i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="card-img-actions d-inline-block mb-3">
                                <img class="img-fluid rounded-circle" src="" width="120" height="120"
                                    alt="">
                            </div>

                            <h6 class="font-weight-semibold mb-0">{{ $user->name }}</h6>
                            <span class="d-block text-white">User</span>
                        </div>
                    </div>
                    <div class="card border-left-3 border-left-default rounded-left-0">
                        <div class="card-body">
                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                <div>
                                    <ul class="list list-unstyled mb-0">
                                        {{-- <li>Merchant ID: <span class="font-weight-semibold">[#{{ $user->token }}]</span> --}}
                                        </li>
                                        <li>Country: <span class="font-weight-semibold">{{ $user->country }}</span></li>
                                        <li>Joined: <span class="font-weight-semibold">
                                                {{ date('Y/m/d h:i:A', strtotime($user->created_at)) }}</span></li>
                                        <li>Last Login: <span
                                                class="font-weight-semibold">{{ date('Y/m/d h:i:A', strtotime($user->last_login)) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                    <ul class="list list-unstyled mb-0">
                                        @if ($user->status == 0)
                                            <li>Account Status: <span class="badge bg-danger-800 font-weight-semibold">Not
                                                    verified</span></li>
                                        @else
                                            <li>Account Status: <span
                                                    class="badge bg-success-800 font-weight-semibold">Verified</span></li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                            <span>
                                <span class="badge badge-mark border-success mr-2"></span>
                                IP Address:
                                <span class="font-weight-semibold">{{ $user->ip_address }}</span>
                            </span>
                        </div> --}}
                    </div>
                    <div class="card card-body">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-enter6 icon-3x text-indigo-400"></i>
                            </div>

                            <div class="media-body text-right">
                                <span class="text-uppercase font-size-sm text-muted">Deposit Balance</span>
                            </div>
                        </div>
                    </div>
                    <div class="card border-left-3 border-left-orange rounded-left-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <h3 class="font-weight-semibold mb-0">
                                    {{ $user->pinBalance }} NGN
                                </h3>
                            </div>
                            Pin balance
                        </div>

                        <div class="card-body">
                            <div class="d-flex">
                                <h3 class="font-weight-semibold mb-0">
                                    {{ $user->dataBalance }} NGN
                                </h3>
                            </div>
                            Data balance
                        </div>
                    </div>
                </div>
            @endsection
