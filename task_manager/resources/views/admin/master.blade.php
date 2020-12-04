<!DOCTYPE html>
<!--
* CoreUI Pro based Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io/pro/
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* License (https://coreui.io/pro/license)
-->
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Pro Bootstrap Admin Template</title>
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
</head>
<body class="c-app c-no-layout-transition">

@include('admin.core.menu-left')

<div class="c-sidebar c-sidebar-lg c-sidebar-light c-sidebar-right c-sidebar-overlaid" id="aside">
    <button class="c-sidebar-close c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-show" responsive="true">
        <svg class="c-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-x"></use>
        </svg>
    </button>
    <ul class="nav nav-tabs nav-underline nav-underline-primary" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                </svg></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                </svg></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg></a></li>
    </ul>
    <!-- Tab panes-->
    <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">Today</div>
                <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                    <div class="c-avatar float-right"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"></div>
                    <div>Meeting with <strong>Lucas</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                        </svg>&nbsp; Palo Alto, CA</small>
                </div>
                <div class="list-group-item list-group-item-accent-info">
                    <div class="c-avatar float-right"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
                    <div>Skype with <strong>Megan</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 4 - 5pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-skype"></use>
                        </svg>&nbsp; On-line</small>
                </div>
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">Tomorrow</div>
                <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                    <div>New UI Project - <strong>deadline</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 10 - 11pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                        </svg>&nbsp; creativeLabs HQ</small>
                    <div class="c-avatars-stack mt-2">
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
                    </div>
                </div>
                <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                    <div><strong>#10 Startups.Garden</strong> Meetup</div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                        </svg>&nbsp; Palo Alto, CA</small>
                </div>
                <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                    <div><strong>Team meeting</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 4 - 6pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                        </svg>&nbsp; creativeLabs HQ</small>
                    <div class="c-avatars-stack mt-2">
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="c-aside-options">
                <div class="clearfix mt-4"><small><b>Option 1</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 2</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 3</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 4</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">25GB/256GB</small>
        </div>
    </div>
</div>
<div class="c-wrapper">
    @include('admin.core.navbar')
    <div class="c-subheader justify-content-between px-3">
        <!-- Breadcrumb-->
        @yield('breadcrumb')
        <div class="c-subheader-nav d-md-down-none mfe-2"><a class="c-subheader-nav-link" href="#">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                </svg></a><a class="c-subheader-nav-link" href="#">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-graph"></use>
                </svg> &nbsp;Dashboard</a><a class="c-subheader-nav-link" href="#">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg> &nbsp;Settings</a></div>
    </div>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                @yield('content')
                <!-- /.row-->
                </div>
            </div>
        </main>
    </div>
    @include('admin.core.footer')
</div>
<!-- CoreUI and necessary plugins-->
<script src="{{ asset('vendors/@coreui/coreui-pro/js/coreui.bundle.min.js') }}"></script>
<!--[if IE]><!-->
<script src="{{ asset('vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>
<!--<![endif]-->
<!-- Plugins and scripts required by this view-->
<script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('vendors/jquery/js/jquery.slim.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/datatables.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        setTimeout(function() {
            document.body.classList.remove('c-no-layout-transition')
        }, 2000);
    });
</script>
<script>
    toastr.options = {
        "closeButton": true ,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
@if(\Illuminate\Support\Facades\Session::has('error'))
    <script>
        toastr.error("{!! Session::get('error') !!}")
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}")
    </script>
@endif
<script>
</body>
</html>
