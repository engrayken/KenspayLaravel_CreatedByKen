@extends('admin.app')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-hammer-wrench mr-2"></i> <span class="font-weight-semibold">Basic settings</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                                class="icon-home2 mr-2"></i>Dashboard</a>
                        <a href="" class="breadcrumb-item">settings</a>
                    </div>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->
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
                            <h6 class="card-title font-weight-semibold">Congifure website</h6>
                            <div class="header-elements">
                                <div class="list-icons text-orange-600">
                                    <a class="list-icons-item" data-action="collapse"></a>

                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.upsettings') }}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-4">Company / website name:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="siteName" maxlength="200"
                                            value="{{ $setting->siteName }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Tawk ID:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="tawkId" value="{{ $setting->tawkId }}" maxlength="25"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Company email:</label>
                                    <div class="col-lg-10">
                                        <input type="email" name="email" value="{{ $setting->email }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Mobile:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">+</span>
                                            </span>
                                            <input type="number" name="phone" max-length="14"
                                                value="{{ $setting->phone }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Website Url:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="ehost" max-length="200" value="{{ $setting->ehost }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Monthly Charge:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"></span>
                                            </span>
                                            <input type="number" name="monthlyCharge" max-length="30"
                                                value="{{ $setting->monthlyCharge }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Bank fee:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"></span>
                                            </span>
                                            <input type="number" name="bankFee" max-length="30"
                                                value="{{ $setting->bankFee }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Android App Link:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"></span>
                                            </span>
                                            <input type="text" name="androidApp" max-length="30"
                                                value="{{ $setting->androidApp }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Ios App Link:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" name="iosApp" step="any" max-length="30"
                                                value="{{ $setting->iosApp }}" class="form-control">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Facebook Link:</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"></span>
                                            </span>
                                            <input type="text" name="facebook" max-length="30"
                                                value="{{ $setting->facebook }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Twitter:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="twitter" max-length="32"
                                            value="{{ $setting->twitter }}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">You Tube:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="youtube" max-length="32"
                                            value="{{ $setting->youtube }}" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Instagram:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="instagram" max-length="32"
                                            value="{{ $setting->instagram }}" class="form-control">
                                    </div>
                                </div>


                                {{-- <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Short description:</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" name="site_desc" rows="4" class="form-control">{{ $setting->site_desc }}</textarea>
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Address:</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" name="address" rows="4" class="form-control">{{ $setting->address }}</textarea>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn bg-violet">Submit form <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Change website logo</h5>
                            <div class="header-elements">
                                <div class="list-icons text-orange-600">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Your logo:</label>
                                    <input type="file" name="file" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size
                                        2Mb</span>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn bg-secondary">Upload logo <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
