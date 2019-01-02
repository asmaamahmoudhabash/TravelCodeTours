@extends('front/main')




    @inject('main','App\Main')

    <?php

    $mains = $main->find(1);
    $lang = Config::get('app.locale');
    $name = 'name_' . $lang;


    ?>


@section('meta')


    <meta name="description" content="{{$mains->meta_description_en}}">
    <meta name="keywords" content="{{$mains-> meta_keyword_en}}">
    <meta name="title" content="{{$mains->meta_title_en }}">

@stop

@section('content')
<div class="inner-banner style-6">


        <img class="center-image"
             src="@if($mains->gallerybg !=null){{url('admin-assets/images/photo/'.$mains->gallerybg)}}@else{{url('siteassets/frontend/img/gallery/bg_2.jpg')}}@endif"
             alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-blue-2" href="{{url('/')}}">home</a> /</li>
                            <li><span>gallery #1</span></li>
                        </ul>
                        <h2 class="color-white">gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wraper padd-70-70">
        <div class="container">
            <div class="filter style-2">
                <ul class="filter-nav">
                    <li class="selected"><a href="#all" data-filter="*">all</a></li>
                    @foreach($tabs as $tab)
                        <li><a href="#{{$tab->name_en}}" data-filter=".{{$tab->name_en}}">{{$tab->$name}}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="filter-content row">
                <div class="grid-sizer col-mob-12 col-xs-6 col-sm-4"></div>


                @foreach($galleries as $key=>$val)


                    <?php

                    switch ($key) {
                        case 0:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 1:
                            $class = "col-mob-12 col-xs-6 col-sm-8";
                            break;
                        case 2:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 3:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;

                        case 4:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 5:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 6:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 7:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 8:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 9:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 10:
                            $class = "col-mob-12 col-xs-6 col-sm-8";
                            break;
                        case 11:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        case 12:
                            $class = "col-mob-12 col-xs-6 col-sm-8";
                            break;
                        case 13:
                            $class = "col-mob-12 col-xs-6 col-sm-4";
                            break;
                        default:
                            $class = "col-mob-12 col-xs-6 col-sm-4";


                    }
                    ?>
                    <div class="item {{$val->tab->name_en}}  gal-item {{$class}}">
                        <a class="black-hover" href="{{url('gallery/'.$val->slug)}}">
                            <img class="img-full img-responsive"
                                 src="{{url('admin-assets/images/gallery/'.$val->mainphoto)}}" alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <h3 class="color-white"><b>{{$val->tab->$name}}</b></h3>
                                <h5 class="color-white">sea tours</h5>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@stop
