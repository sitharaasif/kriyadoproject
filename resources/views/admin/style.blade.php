<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/assets/images/favicon.ico') }}" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/bootstrap.min.css') }}" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/vendors/css/daterangepicker.min.css') }}" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/theme.min.css') }}" />
    <!--! END: Custom CSS-->
    <title>@yield('title', 'Kriyado')</title>
    <style>
        .avatar-image img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Menu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{ url('/admin/dashboard') }}"  class="b-brand">
                    <!-- ========   change your logo here   ============ -->
                    <img src="{{ asset('build/assets/images/logo-full.png') }}" alt="Full Logo" class="logo logo-lg">
                    <img src="{{ asset('build/assets/images/logo-abbr.png') }}" alt="Abbreviated Logo" class="logo logo-sm">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item">
                        <a href="{{ url('/admin/dashboard') }}" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Dashboard</span><span class="nxl-arrow"></span>
                        </a>
                    </li>  
                    <li class="nxl-item nxl-hasmenu">
                        <a href="{{ url('/admin/packageaddition') }}" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-shopping-cart"></i></span>
                            <span class="nxl-mtext"> Package addition</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="{{ url('/admin/categories') }}" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext"> Categories</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                    </li>
                    <li class="nxl-item">
                        <a href="{{ url('/admin/partnerslist') }}"class="nxl-link">
                            <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                            <span class="nxl-mtext"> Partner list</span><span class="nxl-arrow"></span>
                        </a>
                    </li>  
                    <li class="nxl-item nxl-hasmenu">
                        <a href="{{ url('/admin/ads') }}" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-settings"></i></span>
                            <span class="nxl-mtext"> Ads</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                    </li>
                    <li class="nxl-item">
                        <a href="{{ url('/admin/discountaddition') }}"class="nxl-link">
                            <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                            <span class="nxl-mtext">  Discount Type addition</span><span class="nxl-arrow"></span>
                        </a>
                    </li>                    
                </ul>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End] Navigation Menu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    
    <header class="nxl-header">
        
        <div class="header-wrapper">
            <!--! [Start] Header Left !-->
            <div class="header-left d-flex align-items-center gap-4">
                <!--! [Start] nxl-head-mobile-toggler !-->
                <a href="#" class="nxl-head-mobile-toggler" id="mobile-collapse">
                    <div class="hamburger hamburger--arrowturn">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <!--! [End] nxl-head-mobile-toggler !-->
                <!--! [Start] nxl-navigation-toggle !-->
                <div class="nxl-navigation-toggle">
                    <a href="javascript:void(0);" id="menu-mini-button">
                        <i class="feather-align-left"></i>
                    </a>
                    <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
                <!--! [End] nxl-navigation-toggle !-->
            </div>
            <!--! [End] Header Left !-->
            <!--! [Start] Header Right !-->
            <div class="header-right ms-auto">
                <div class="d-flex align-items-center">
                    <div class="dropdown nxl-h-item nxl-header-search">
                        <a href="javascript:void(0);" class="nxl-head-link me-0" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="feather-search"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-search-dropdown">
                            <div class="input-group search-form">
                                <span class="input-group-text">
                                    <i class="feather-search fs-6 text-muted"></i>
                                </span>
                                <input type="text" class="form-control search-input-field" placeholder="Search...." />
                                
                                </span>
                            </div>
                            <div class="dropdown-divider mt-0"></div>
                            <div class="search-items-wrapper">
                                <div class="searching-for px-4 py-2">
                                    <p class="fs-11 fw-medium text-muted">I'm searching for...</p>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
   
                    <div>
                        <div class="dropdown">
                            <div class="avatar-image rounded-circle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('build/assets/images/avatar/im.avif') }}" alt="Avatar image" class="img-fluid rounded-circle">
                            </div>
                            <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-header d-flex align-items-center justify-content-center flex-column py-4">
                                    
                                    <h5 class="fw-bold mb-0 text-dark">{{ Auth::user()->name }}</h5>
                                    <p class="fs-11 text-muted mb-0">{{ Auth::user()->role }}</p>
                                </div>
                                <div class="dropdown-divider mt-0"></div>
                                <ul class="nxl-h-user-nav list-unstyled">
                                    <li class="px-3 py-2">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-3">
                                            <i class="feather-user"></i> <span>Profile</span>
                                        </a>
                                    </li>
                                    
                                    <li class="px-3 py-2">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        
                                            <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
                        <script src="https://unpkg.com/feather-icons"></script>
                        
                        <script>
                            feather.replace();
                        </script>
                        <script src="{{ asset('build/assets/js/scripts.js') }}"></script>
                
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->

    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <div class="nxl-main-container">
        <div class="nxl-main-content">
            @yield('content')
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->

    <!--! ================================================================ !-->
    <!--! [Start] Footer !-->
    <!--! ================================================================ !-->
    {{-- <footer class="nxl-footer">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-md-6 order-last order-md-first">
                    <p class="text-muted mb-0">© Kriyado. All rights reserved</p>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-divider justify-content-center justify-content-md-end">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">Terms of use</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">Privacy policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">Cookie policy</a>
                        </li>
                        <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> --}}
    <!--! ================================================================ !-->
    <!--! [End] Footer !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Modals !-->
    <!--! ================================================================ !-->
    <div class="modal fade" id="default-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Basic modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Modals !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Script JS !-->
    <!--! ================================================================ !-->
    <script src="{{ asset('build/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('build/assets/js/main.min.js') }}"></script>
    <!--! ================================================================ !-->
    <!--! [End] Script JS !-->
    <!--! ================================================================ !-->
</body>
</html>
