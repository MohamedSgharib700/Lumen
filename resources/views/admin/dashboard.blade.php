<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Alpha | Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('admin-assets/assets/plugins/materialize/css/materialize.min.css')}}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
        <link href="{{ asset('admin-assets/assets/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet">
        <link href="{{ asset('admin-assets/assets/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet">
        <!-- Theme Styles -->
        <link href="{{ asset('admin-assets/assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin-assets/assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet"href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{ url('admin-assets/ckeditor/ckeditor.js')}}"></script>
        <script src="{{url('admin-assets/js/modernizr.js')}}"></script> <!-- Modernizr -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


        <link href="{{asset('admin-assets/assets/plugins/sweetalert/')}}/sweetalert.css" rel="stylesheet" type="text/css" />








        <![endif]-->
        <style>
            .error
            {
                color: red;
            }
            .alert-success {
                background-color: #dff0d8;
                border-color: #d0e9c6;
                color: #3c763d;
            }
            .alert {
                padding: 1rem;
                margin-bottom: 1rem;
                border: 1px solid transparent;
                border-radius: .25rem;
            }
            .pagination li.active {
                background-color: #fff; 
                color: #00acc1;
            }

      .ui-autocomplete { max-height: 200px; overflow-y: scroll; overflow-x: hidden;}

        </style>



    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">      
                            <span class="chapter-title">Hello, {{Auth::user()->role->title}}, {{Auth::user()->name}}</span>
                        </div>
                        <!--                        <form class="left search col s6 hide-on-small-and-down">
                                                    <div class="input-field">
                                                        <input id="search" type="search" placeholder="Search" autocomplete="off">
                                                        <label for="search"><i class="material-icons search-icon">search</i></label>
                                                    </div>
                                                    <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                                                </form>-->

                        <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                            <li class="notificatoins-dropdown-container">
                                <ul>
                                    <li class="notification-drop-title">Today</li>
                                    <li>
                                        <a href="#!">
                                            <div class="notification">
                                                <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                                <div class="notification-text"><p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="notification">
                                                <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                                <div class="notification-text"><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="notification">
                                                <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                                <div class="notification-text"><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="notification">
                                                <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                                <div class="notification-text"><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="notification">
                                                <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                                <div class="notification-text"><p>Finished uploading files</p><span>4 hrs ago</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-drop-title">Yestarday</li>
                                    <li>
                                        <a href="#!">
                                            <div class="notification">
                                                <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                                <div class="notification-text"><p>Security issues fixed</p><span>16 hrs ago</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="notification">
                                                <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                                <div class="notification-text"><p>Finished downloading files</p><span>22 hrs ago</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="notification">
                                                <div class="notification-icon circle cyan"><i class="material-icons">code</i></div>
                                                <div class="notification-text"><p>Code changes were saved</p><span>1 day ago</span></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="search-results">
                <div class="container search-container">
                    <div class="row">
                        <div class="col s12 search-head">
                            <div class="row">
                                <div class="col s12">
                                    <div class="left">
                                        <p class="search-results-title">Quick search results</p>
                                        <p class="search-filter left">
                                            <input type="checkbox" class="filled-in" id="filled-in-box" checked/>
                                            <label for="filled-in-box">Google search</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-not-found">No results found</div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="admin-assets/assets/images/profile-image-1.png" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Search <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">Last active 2 days ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="admin-assets/assets/images/profile-image-3.jpg" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            News about <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">23 Blogs</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="admin-assets/assets/images/profile-image.png" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Tom King (Works at <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">Avaible for freelance work</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent ">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Facebook<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Twitter<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle red darken-1">G</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Google+ <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="card-content first">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sunt in culpa qui<span class="search-text search-result-highlight"></span> quis.</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">Yesterday, 4:56 PM</span>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="card-content">
                                    <p>Sunt in culpa qui <span class="search-text search-result-highlight"></span> officia deserunt mollit anim id est laborum. officia deserunt mollit anim id est laborum officia deserunt mollit anim</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">27 January 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside id="chat-sidebar" class="side-nav white">
                <div class="side-nav-wrapper">
                    <div class="col s12">
                        <ul class="tabs tab-demo" style="width: 100%;">
                            <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li>
                            <li class="tab col s3"><a href="#sidebar-more-tab">settings</a></li>
                        </ul>
                    </div>
                    <div id="sidebar-chat-tab" class="col s12 sidebar-messages right-sidebar-panel">
                        <p class="right-sidebar-heading">CHAT LIST</p>
                        <div class="chat-list">
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="admin-assets/assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">John Doe</p>
                                        <span class="chat-message">Hello</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="admin-assets/assets/images/profile-image-1.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Tom Simpson</p>
                                        <span class="chat-message">How are you?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="admin-assets/assets/images/profile-image-3.jpg" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Alan Grey</p>
                                        <span class="chat-message">Call me later</span></div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="admin-assets/assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Michael Fisher</p>
                                        <span class="chat-message">How's it going?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="admin-assets/assets/images/profile-image-1.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Amily Lee</p>
                                        <span class="chat-message">We're good</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="admin-assets/assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Sandra Smith</p>
                                        <span class="chat-message">See you later!</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="admin-assets/assets/images/profile-image-3.jpg" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Sandra Smith</p>
                                        <span class="chat-message">Can we meet?</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="chat-sidebar-options">
                            <a href="#" class="left"><i class="material-icons">edit</i></a>
                            <a href="#" class="right"><i class="material-icons">settings</i></a>
                        </div>
                    </div>
                    <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
                        <p class="right-sidebar-heading">SYSTEM</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Notifications</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Quick Results</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Auto Updates</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="right-sidebar-heading">ACCOUNT</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Offline Mode</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Location</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Show Offline Users</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Save History</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="chat-messages" class="side-nav white">
                <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
                <div class="messages-container">
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="admin-assets/assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Lorem Ipsum</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="admin-assets/assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Integer in faucibus diam?</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="admin-assets/assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="admin-assets/assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="admin-assets/assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="admin-assets/assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                    </div>
                </div>
                <div class="message-compose-box">
                    <div class="input-field">
                        <input placeholder="Write message" id="message_compose" type="text">
                    </div>
                </div>
            </aside>
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src={{URL("admin-assets/assets/images/profile-image.png")}} class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a  >
                                <p>{{Auth::user()->name}}</p>
                                <span>{{@Auth::user()->email}}<i class="material-icons right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred<span class="new badge">18</span></a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">history</i>History<span class="new grey lighten-1 badge">3 new</span></a>
                            </li>
                            <li class="divider"></li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">


                        {{--<li class="no-padding active"><a class="waves-effect waves-grey active" href="{{ url('/admin/myinbox') }}"><i class="material-icons">email </i> Inbox <span style="color:red;">{{count($unseen)}}</span></a></li>--}}


                        <li class="no-padding active"><a class="waves-effect waves-grey active" href="{{ url('/admin/') }}"><i class="material-icons">dashboard</i>Dashboard</a></li>

                            <li class="no-padding">
                                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">web</i>Website<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="{{ url('admin/settings')}}">Main Settings</a></li>
                                        

                                        <li><a href="{{ url('admin/slider')}}">Slider</a></li>



                                    </ul>
                                </div>
                            </li>

                        <li class="no-padding">
                            <a href="{{ url('admin/projects')}}" class="collapsible-header waves-effect waves-grey"><i class="material-icons">web</i>Projects</a>
                            
                        </li>





                        <li><a href="{{ url('admin/users/')}}"> <i class="material-icons">supervisor_account</i>Users</a></li>

                        <li class="no-padding">
                            <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">web</i>Categories<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="{{ url('admin/cats')}}">Main Categories</a></li>
                                    <li><a href="{{ url('admin/subcats')}}">Subcategories</a></li>





                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ url('admin/team')}}"> <i class="material-icons">supervisor_account</i>Team</a></li>
                        <li><a href="{{ url('admin/career')}}"> <i class="material-icons">supervisor_account</i>Careers</a></li>

                        <li><a href="{{ url('admin/clients')}}"> <i class="material-icons">supervisor_account</i>Clients</a></li>

                        <li><a href="{{ url('admin/blogs')}}"> <i class="material-icons">supervisor_account</i>Blogs</a></li>


                        <li class="no-padding active"><a class="waves-effect waves-grey active" href="{{ url('admin/messages') }}"><i class="material-icons">message</i>Contact Us Messages</a></li>





    {{--<li class="no-padding active"><a class="waves-effect waves-grey active"  href="{{ url('admin/adds')}}"> <i class="material-icons">perm_camera_mic</i> Advertisments</a></li>--}}






                    </ul>
                    <div class="footer">
                        <p class="copyright">Steelcoders ©</p>
                        <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                    </div>
                </div>
            </aside>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">

                    @yield('content')
                    
                </div>
            </main>
            <div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">
                    </div>
                    <div class="footer-r white">&nbsp;</div>

                </div>
            </div>
        </div>
        <div class="left-sidebar-hover"></div>
        <div class="left-sidebar-hover"></div>


        <!-- Javascripts -->
        <script src="{{ asset('admin-assets/assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/materialize/js/materialize.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/counter-up-master/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/chart.js/chart.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/curvedlines/curvedLines.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/plugins/peity/jquery.peity.min.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/js/alpha.min.js')}}"></script>
<!--        <script src="{{ asset('admin-assets/assets/js/pages/dashboard.js')}}"></script>-->
        <script src="{{ asset('admin-assets/assets/js/ajax.js')}}"></script>
        <script src="{{ asset('admin-assets/assets/js/pages/form_elements.js')}}"></script>

        <script src="{{asset('admin-assets/assets/plugins/sweetalert/')}}/sweetalert-dev.js"></script>
        <script src="{{asset('admin-assets/assets/plugins/sweetalert/')}}/sweetalert.min.js"></script>




        {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
        {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>--}}

        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>--}}

        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>--}}

        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}




        @yield('js')

    </body>
</html>


