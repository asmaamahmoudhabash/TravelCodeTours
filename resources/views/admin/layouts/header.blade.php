<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Travel Code Tours |  Admin Dashboard </title>
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

    <link href="{{asset('admin-assets/assets/plugins/sweetalert/')}}/sweetalert.css" rel="stylesheet" type="text/css" />




    {{--<link rel="stylesheet" href="{{asset('admin-assets/plugins/jQueryUI/jquery-ui.css')}}">--}}
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
    </style>



    {{--<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5985aceb1445ad0012b9d227&product=inline-share-buttons"></script>--}}
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
                  <a href="{{url('/')}}"> <span class="chapter-title">Travel Code Tours  </span></a>
                </div>
<!--                -->
                <?php $unseen = App\Contact::where('seen', 0)->orderBy('created_at', 'desc')->get(); ?>
                <ul class="right col s3 m3 nav-right-menu">
                    <li><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">email</i><span class="badge">{{ count($unseen) }}</span></a></li>
                </ul>
                <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                    <li class="notificatoins-dropdown-container">
                        <ul>
                            @foreach($unseen as $mes)
                                <li>
                                    <a href="{{ url('controll/message/'.$mes->id)}}">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">email</i></div>
                                            <div class="notification-text"><p><b>{{ $mes->first_name }} {{ $mes->last_name }} </b></p><span>{{ date('d M,Y',strtotime($mes->created_at))}}</span></div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                </ul>

            </div>
        </nav>


    </header>