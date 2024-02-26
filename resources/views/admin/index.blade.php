<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend1/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon.ico') }}">
    <title>Admin</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('admin/asset/global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/asset/global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/asset/user/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/asset/user/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('admin/asset/user/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/asset/user/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/asset/user/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('admin/asset/global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('admin/asset/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('admin/asset/global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>

    <script src="{{ asset('admin/asset/user/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/demo_pages/dashboard.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/demo_pages/login.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/demo_pages/datatables_advanced.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/demo_pages/datatables_basic.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/demo_pages/form_layouts.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/demo_pages/form_select2.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/demo_pages/form_checkboxes_radios.js') }}"></script>
    <script src="{{ asset('admin/asset/global_assets/js/plugins/ui/prism.min.js') }}"></script>
    <!-- /theme JS files -->

</head>
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper bg-indigo">
        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">
            <!-- Login form -->
            <form class="login-form" action="{{ route('admin.login') }}" method="post">
                @csrf
                @if (Session::has('failed'))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert bg-danger text-white alert-styled-left alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                {{ Session::get('failed') }}
                            </div>
                        </div>
                    </div>
                @endif
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <a href="../"><img src="{{ asset('frontend1/images/logo.png') }}"
                                    style="max-width:20%; height:auto;" class=""></a>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Your credentials</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                value="{{ old('email') }}" required>
                            <div class="form-control-feedback">
                                <i class="icon-user-plus text-muted"></i>
                            </div>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                placeholder="Password" required>
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-block">Sign in <i
                                    class="icon-circle-right2 ml-2"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /login form -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
