<body class="">
    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark navbar-static">

        <!-- Header with logos -->
        <div class="navbar-brand">
            <a href="../" class="d-inline-block">
                <img src="{{ asset('frontend1/images/logo.png') }}">
            </a>
        </div>
        <!-- /header with logos -->


        <!-- Mobile controls -->
        <div class="d-md-none">
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>
        <!-- /mobile controls -->


        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-lan3"></i>
                    </a>
                </li>
            </ul>
            <span class="navbar-text ml-md-3 mr-md-auto">
                <span class="badge badge-mark border-orange-300 mr-2"></span>
                Welcome back, {{ $admin->name }}
            </span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="" class="rounded-circle" alt="">
                        <span>{{ $admin->name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="security/0" class="dropdown-item"><i class="icon-lock"></i> Account information</a>
                        <a href="{{ route('admin.logout') }}" class="dropdown-item"><i class="icon-switch2"></i>
                            Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /navbar content -->

    </div>
    <!-- /main navbar -->
