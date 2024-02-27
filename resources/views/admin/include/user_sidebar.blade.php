 <div class="page-content">

     <!-- Main sidebar -->
     <div class="sidebar sidebar-dark sidebar-main bg-indigo sidebar-expand-md">

         <!-- Sidebar mobile toggler -->
         <div class="sidebar-mobile-toggler text-center">
             <a href="#" class="sidebar-mobile-main-toggle">
                 <i class="icon-arrow-left8"></i>
             </a>
             Navigation
             <a href="#" class="sidebar-mobile-expand">
                 <i class="icon-screen-full"></i>
                 <i class="icon-screen-normal"></i>
             </a>
         </div>
         <!-- /sidebar mobile toggler -->


         <!-- Sidebar content -->
         <div class="sidebar-content">

             <!-- User menu -->
             <div class="sidebar-user-material">
                 <div class="sidebar-user-material-body">
                     <div class="card-body text-center">
                         <a href="#">
                             <img src="" class="img-fluid rounded-circle shadow-1 mb-3" width="80"
                                 height="80" alt="">
                         </a>
                         <h6 class="mb-0 text-white text-shadow-dark">{{ $setting->siteName }}</h6>
                         <span class="font-size-sm text-white text-shadow-dark">{{ $setting->siteName }}</span>
                     </div>

                     <div class="sidebar-user-material-footer">
                         <a href="#user-nav"
                             class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle"
                             data-toggle="collapse"><span>My account</span></a>
                     </div>
                 </div>

                 <div class="collapse" id="user-nav">
                     <ul class="nav nav-sidebar">
                         <li class="nav-item">
                             <a href="security/0" class="nav-link">
                                 <i class="icon-lock"></i>
                                 <span>Account information</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.logout') }}" class="nav-link">
                                 <i class="icon-switch2"></i>
                                 <span>Logout</span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- /user menu -->


             <!-- Main navigation -->
             <div class="card card-sidebar-mobile">
                 <ul class="nav nav-sidebar" data-nav-type="accordion">

                     <!-- Main -->
                     <li class="nav-item">
                         <a href="{{ route('admin.dashboard') }}" class="nav-link">
                             <i class="icon-home4"></i>
                             <span>
                                 Dashboard
                             </span>
                         </a>
                     </li>
                     <li class="nav-item nav-item-submenu">
                         <a href="#" class="nav-link"><i class="icon-user-plus"></i> <span>User
                                 Manangement</span></a>

                         <ul class="nav nav-group-sub" data-submenu-title="User Manangement">
                             <li class="nav-item"><a href="{{ route('admin.user') }}" class="nav-link"><i
                                         class="icon-user"></i> Client
                                     accounts</a></li>
                             <li class="nav-item"><a href="{{ route('admin.transfer') }}" class="nav-link"><i
                                         class="icon-paperplane"></i>Internal Transfer</a></li>
                             <li class="nav-item"><a href="{{ route('admin.ticket') }}" class="nav-link"><i
                                         class="icon-bubbles5"></i>Customer service</a></li>
                             <li class="nav-item"><a href="{{ route('admin.promotion_emails') }}" class="nav-link"><i
                                         class="icon-envelope"></i>Promotional Emails</a></li>

                             <li class="nav-item"><a href="{{ route('admin.notification') }}"class="nav-link"><i
                                         class="icon-clipboard6"></i>Site Notification Msg</a></li>
                             {{-- <li class="nav-item"><a href="{{ route('admin.messages') }}" class="nav-link"><i
                                         class="icon-bubbles5"></i>Messages</a></li> --}}
                             {{-- <li class="nav-item"><a href="{{ route('admin.reviews') }}"class="nav-link"><i
                                         class="icon-clipboard6"></i>Platform Review</a></li> --}}

                         </ul>
                     </li>
                     <li class="nav-item nav-item-submenu">
                         <a href="#" class="nav-link"><i class="icon-cogs"></i> <span>System
                                 configuration</span></a>

                         <ul class="nav nav-group-sub" data-submenu-title="System configuration">
                             <li class="nav-item"><a href="{{ route('admin.settings') }}" class="nav-link"><i
                                         class="icon-hammer-wrench"></i>General Settings</a></li>
                             <li class="nav-item"><a href="{{ route('admin.faq') }}" class="nav-link"><i
                                         class="icon-question4"></i>FAQs</a></li>
                             <li class="nav-item"><a href="{{ route('admin.page') }}" class="nav-link"><i
                                         class="icon-file-check"></i>Condition Pages</a></li>

                             <li class="nav-item"><a href="{{ route('admin.auth') }}" class="nav-link"><i
                                         class="icon-share"></i>Create
                                     Authorizaion Code</a></li>
                             <li class="nav-item"><a href="{{ route('admin.product') }}" class="nav-link"><i
                                         class="icon-share2"></i>Set
                                     Product & Pricing</a></li>
                             <li class="nav-item"><a href="{{ route('admin.add_pins') }}" class="nav-link"><i
                                         class="icon-share"></i>Add
                                     Pins</a></li>
                         </ul>
                     </li>
                     <li class="nav-item nav-item-submenu">
                         <a href="#" class="nav-link"><i class="icon-credit-card"></i><span>
                                 History</span></a>
                         <ul class="nav nav-group-sub" data-submenu-title="Deposit & withdraw">

                             <li class="nav-item"><a href="{{ route('admin.transaction') }}"class="nav-link"><i
                                         class="icon-coins"></i>Transaction History</a></li>
                         </ul>
                     </li>
                 </ul>
                 </li>
                 </ul>
             </div>
             <!-- /main navigation -->

         </div>
         <!-- /sidebar content -->

     </div>
