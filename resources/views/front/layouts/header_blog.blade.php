<!DOCTYPE html>


@inject('main','App\Main')
@inject('category',App\Category)
@inject('service',App\Service)



<?php
$mains = $main->find(1);
$services = $service->take(5)->get();
$categories = $category->take(8)->get();
$lang=Config::get('app.locale');

?>



<?php $title='title_'.$lang ?>
<title>{{$mains->$title }}</title>

<html>
<head>



    <meta charset="utf-8">


    <meta property="og:url"           content="{{url('blog/'.$blogs->id)}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$blogs->title}}" />
    <meta property="og:description"   content="{{strip_tags($blogs->body)}}" />
    <meta property="og:image"         content="{!! url('/admin-assets/images/news/'.$blogs->image) !!}" />




    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
    {{--<meta name="description" content="{{$main->meta_description}}">--}}
    {{--<meta name="keywords" content="{{$main-> meta_keyword}}">--}}
    {{--<meta name="title" content="{{$main-> meta_title}}">--}}
    @yield('meta')

    <link rel="shortcut icon" href="favicon.ico"/>
    <link href="{{asset('siteassets/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('siteassets/frontend/css/jquery-ui.structure.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('siteassets/frontend/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{asset('siteassets/frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('siteassets/frontend/css/mystyle/style.css')}}" rel="stylesheet" type="text/css"/>

    <?php $title='title_'.$lang?>
    <title>{{$mains->$title }}</title>
    {{--= title_ar  or title_en  or title_fr--}}
{{--comment plugin--}}
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    {{--share button--}}
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5985aceb1445ad0012b9d227&product=inline-share-buttons"></script>
  </head>
<?php
//print_r(Config::get('app.locale'));die();
//        $lang=Config::get('app.locale');
//        print_r($lang);die();
?>
<body data-color="theme-1">


<header class="bg-white color-4 header-style-2">
    <div class="top-header-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-bar">
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{url('admin-assets/images/photo/'.$mains->headerlogo)}}" alt="lets travel">
                        </a>
                        <div class="drop-wrap-wrap">
                            <div class="drop-wrap">
                                <div class="drop drop-lg">
                                    <b><img src="{{asset('siteassets/frontend/img/en.png')}}" alt="">{{trans('main.English')}}</b>
                                    <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                    <span class="lg">
							<a href="{{url('change-language/en')}}"><img src="{{asset('siteassets/frontend/img/en.png')}}" alt="">{{trans('main.English')}}</a>

                                                        <a href="{{url('change-language/ar')}}"><img
                                                                    src="{{asset('siteassets/frontend/img/ar.png')}}"
                                                                    alt="">{{trans('main.Arabic')}}</a>
							<a href="{{url('change-language/fr')}}"><img src="{{asset('siteassets/frontend/img/fr.png')}}" alt="">{{trans('main.Français')}}</a>
							<a href="{{url('change-language/it')}}"><img src="{{asset('siteassets/frontend/img/fr.png')}}" alt="">{{trans('main.Italiano')}}</a>

						</span>
                                </div>
                            </div>


                        </div>
                        {!! Form::open(array(
                                                   'url'=>'search',
                                                   'class'=>'form-block',
                                                   'role'=>'form',
                                                   'method'=>'GET',
                                                   'files'=>true
                                                   ))!!}

                        {{--<form action="#" class="form-block">--}}
                            <div class="input-style-1 b-50 color-3">
                                <img src="{{asset('siteassets/frontend/img/search_icon_small.png')}}" alt="">
                                <input name="keyword" placeholder="{{trans('main.Search')}}" type="text">
                            </div>
                        {!! Form::close()!!}
                        {{--</form>--}}





                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nav">
                    <div class="nav-menu-icon">
                        <a href="#"><i></i></a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li class="type-1 active">
                                <a href="{{url('/')}}">{{trans('main.Home')}}<span class="fa"></span></a>

                            </li>
                            <li class="type-1">
                                <a href="{{url('about_us')}}">{{trans('main.About_us')}}<span class="fa"></span></a>

                            </li>
                            {{--link tour which lead to categories--}}

                            <li class="type-1"><a href="">{{trans('main.Tour')}}<span class="fa fa-angle-down"></span></a>

                                <ul class="dropmenu">
                                    @foreach($categories as $category)
                                        <li><a href="{{url('category/'.$category->slug)}}">
                                                <?php $name='name_'.$lang ?>
                                                {{$category->$name}}

                                            </a></li>
                                    @endforeach
                                </ul>


                            </li>
                            {{--end--}}

                            <li class="type-1"><a href="">{{trans('main.Services')}}<span
                                            class="fa fa-angle-down"></span></a>
                                <ul class="dropmenu">
                                    @foreach($services as $service)
                                        <li><a href="{{url('service/'.$service->slug)}}">

                                                <?php $name='name_'.$lang ?>
                                                {{$service->$name}}



                                            </a></li>


                                    @endforeach
                                </ul>
                            </li>

                            <li class="type-1">
                                <a href="{{url('booking')}}">{{trans('main.Booking_Now')}}<span class="fa"></span></a>

                            </li>
                            <li class="type-1">
                                <a href="{{url('gallery')}}">{{trans('main.Gallery')}}<span class="fa"></span></a>

                            </li>

                            <li class="type-1">
                                <a href="{{url('blog')}}">{{trans('main.Blog')}}<span class="fa"></span></a>

                            </li>
                            <li class="type-1">
                                <a href="{{url('contact_us')}}">{{trans('main.Contact_Us')}}<span class="fa"></span></a>


                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>