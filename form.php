<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">Maxine Kennedy</a> </h5>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="index.html">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">7</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-calendar.html">Calendar</a></li>
                                    <li><a href="apps-tickets.html">Tickets</a></li>
                                    <li><a href="apps-taskboard.html">Task Board</a></li>
                                    <li><a href="apps-task-detail.html">Task Detail</a></li>
                                    <li><a href="apps-contacts.html">Contacts</a></li>
                                    <li><a href="apps-projects.html">Projects</a></li>
                                    <li><a href="apps-companies.html">Companies</a></li>
                                    <li><a href="apps-file-manager.html">File Manager</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                    <li><a href="email-compose.html">Compose Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layout"></i><span> Layouts </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="layouts-menucollapsed.html">Menu Collapsed</a></li>
                                    <li><a href="layouts-small-menu.html">Small Menu</a></li>
                                    <li><a href="layouts-dark-lefbar.html">Dark Leftbar</a></li>
                                    <li><a href="layouts-center-logo.html">Center Logo</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> UI Elements </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-spinners.html">Spinners</a></li>
                                    <li><a href="ui-ribbons.html">Ribbons</a></li>
                                    <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-notifications.html">Notification</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-range-slider.html">Range Slider</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="widgets.html">
                                    <i class="fi-command"></i> <span> Widgets </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-google.html">Google Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Chart</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-info pull-right">10</span> <span> Forms </span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-x-editable.html">X Editable</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-feather.html">Feather Icons</a></li>
                                    <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                    <li><a href="tables-foo.html">Foo Tables</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">More</li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                    <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-logout.html">Logout</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span class="badge badge-success pull-right">Hot</span> <span> Extra Pages </span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-email-template.html">Email Templates</a></li>
                                    <li><a href="extras-ratings.html">Ratings</a></li>
                                    <li><a href="extras-search-results.html">Search Results</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-share"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="hide-phone app-search">
                                <form>
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Sam Garret</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Sherry Marshall</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Shawn Millard</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Form Elements </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Input Types</h4>
                                    <p class="text-muted m-b-30 font-14">
                                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Text</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" value="Some text value...">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="example-email">Email</label>
                                                        <div class="col-10">
                                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Password</label>
                                                        <div class="col-10">
                                                            <input type="password" class="form-control" value="password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Placeholder</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" placeholder="placeholder">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Text area</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" rows="5"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Readonly</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" readonly="" value="Readonly value">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Disabled</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" disabled="" value="Disabled value">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Static control</label>
                                                        <div class="col-10">
                                                            <p class="form-control-static">email@example.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Helping text</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" placeholder="Helping text">
                                                            <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Select</label>
                                                        <div class="col-10">
                                                            <select class="form-control">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                            <h6>Multiple select</h6>
                                                            <select multiple class="form-control">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Default file input</label>
                                                        <div class="col-10">
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Date</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="date" name="date">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Month</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="month" name="month">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Time</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="time" name="time">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Week</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="week" name="week">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Number</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="number" name="number">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">URL</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="url" name="url">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Search</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="search" name="search">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Tel</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="tel" name="tel">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Color</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="color" name="color">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Range</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="range" name="range" min="0" max="10">
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="m-t-0 header-title">Select menu</h4>
                                            <p class="text-muted m-b-30 font-14">
                                                Custom <code class="highlighter-rouge">&lt;select&gt;</code> menus need only a custom class, <code class="highlighter-rouge">.custom-select</code> to trigger the custom styles.
                                            </p>

                                            <select class="custom-select mt-3">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <h4 class="header-title">Checkboxes and radios</h4>
                                            <div class="mt-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Input Sizes & Group</h4>
                                    <p class="text-muted m-b-30 font-14">
                                        Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                                    </p>

                                    <div class="p-20">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="example-input-small">Small</label>
                                                <div class="col-10">
                                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="example-input-normal">Normal</label>
                                                <div class="col-10">
                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="example-input-large">Large</label>
                                                <div class="col-10">
                                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Grid Sizes</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" placeholder=".col-sm-4">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Static</label>
                                                <div class="col-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Dropdowns</label>
                                                <div class="col-10">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-custom waves-effect waves-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Buttons</label>
                                                <div class="col-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-dark waves-effect waves-light" type="button">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Basic Example</h4>

                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <input id="checkbox0" type="checkbox">
                                                <label for="checkbox0">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Horizontal form</h4>

                                    <form class="form-horizontal" role="form">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                            <div class="col-9">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                            <div class="col-9">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                            <div class="col-9">
                                                <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-end">
                                            <div class=" col-9">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2">
                                                        Check me out !
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 justify-content-end row">
                                            <div class="col-9">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Inline Form</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>)
                                        for left-aligned and inline-block controls. <strong>This only applies to forms within viewports
                                        that are at least 768px wide.</strong>
                                    </p>
                                    <div class="row m-b-30">
                                        <div class="col-sm-12">
                                            <form class="form-inline">
                                                <div class="form-group">
                                                    <label for="staticEmail2" class="sr-only">Email</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                                </div>
                                                <div class="form-group mx-sm-3">
                                                    <label for="inputPassword2" class="sr-only">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Confirm identity</button>
                                            </form>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-12">
                                            <h6 class="font-13 mt-4">Auto-sizing</h6>

                                            <form>
                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <label class="sr-only" for="inlineFormInput">Name</label>
                                                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                                    </div>
                                                    <div class="col-auto">
                                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                            </div>
                                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                                            <label class="form-check-label" for="autoSizingCheck">
                                                                Remember me
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <!-- Form row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Form row</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                    </p>

                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2" class="col-form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="col-form-label">State</label>
                                                <select id="inputState" class="form-control">Choose</select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip" class="col-form-label">Zip</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"> Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>