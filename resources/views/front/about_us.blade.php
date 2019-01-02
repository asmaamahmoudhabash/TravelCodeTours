@extends('front/main')





@section('meta')


    <meta name="description" content="{{$settings->meta_description_en}}">
    <meta name="keywords" content="{{$settings-> meta_keyword_en}}">
    <meta name="title" content="{{$settings->meta_title_en }}">



@stop

@section('content')

    @inject('category','App\Category')




    <?php

    $categories = $category->all();
    $lang=Config::get('app.locale');

    ?>





    <div class="inner-banner style-5">
        <img class="center-image"
             src="@if($settings->aboutusbg !=null){{url('admin-assets/images/aboutgallery/'.$settings->aboutusbg)}}@else{{asset('siteassets/frontend/img/inner/bg_1.jpg')}}@endif"
             alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-blue-2" href="{{url('/')}}">{{trans('main.Home')}}</a> /</li>
                            {{--<li><a class="link-blue-2" href="">{{trans('main.Tour')}}</a> /</li>--}}
                            <li><span>{{trans('main.lsit_tours')}}</span></li>
                        </ul>
                        <h2 class="color-white">

                        <?php $aboutuswelcome='aboutuswelcome_'.$lang ?>
                            {!! $settings->$aboutuswelcome !!}

                            </h2>

                        <p class="color-white-light">

                            <?php $aboutusdesc='aboutus_desc_'.$lang ?>

                                {!! $settings->$aboutusdesc!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SIMPLE-TEXT -->
    <div class="main-wraper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2 underline">{{trans('main.About_us')}}</h4>
                        <h2>{{trans('main.Rockstar_Team')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="simple-text">
                        <h3>{{trans('main.what_we_do')}}</h3>
                        <p class="color-grey">
                            <?php $aboutuswho='aboutuswho_'.$lang ?>
                            {!! $settings->$aboutuswho !!}</p>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="simple-text">
                        <h3>{{trans('main.Who_We_Are')}}</h3>
                        <div class="row">
                            {{--<div class="col-mob-12 col-xs-6">--}}
                            {{--<ul class="color-grey dot-blue-2">--}}
                            {{--<li>First Class Flights</li>--}}
                            {{--<li>5 Star Accommodations</li>--}}
                            {{--<li>Inclusive Packages</li>--}}
                            {{--<li>Latest Model Vehicles</li>--}}
                            {{--<li>Best Price Guarantee</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-mob-12 col-xs-6">--}}
                                {{--<ul class="color-grey dot-blue-2">--}}
                                    {{--<li>World Class Service</li>--}}
                                    {{--<li>Handpicked Hotels</li>--}}
                                    {{--<li>Accesibility managment</li>--}}
                                    {{--<li>10 Languages available</li>--}}
                                    {{--<li>+120 Premium city tours</li>--}}

                                 {{----}}
                                {{--</ul>--}}
                            <?php $aboutuswhat='aboutuswhat_'.$lang ?>
                            {!! $settings->$aboutuswhat !!}



                        </div>
                    </div>
                </div>
                <div class="col-mob-12 col-xs-6 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0">
                    <img class="img-responsive img-full"
                         src="@if($settings->aboutusimage!=null){{url('admin-assets/images/aboutgallery/'.$settings->aboutusimage)}}@else{{url('siteassets/frontend/img/home_8/team_2.jpg')}}@endif"
                         alt="" style="height: 200px;width:262px;"  >
                </div>
            </div>
        </div>
    </div>

    <!-- TEAM -->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2 underline">{{trans('main.our_team')}}</h4>
                        <h2>{{trans('main.meet_team')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-xs-12 col-sm-4">
                        <div class="team-entry">
                            <div class="image">
                                <img class="team-img img-responsive"
                                     src="@if($team->image !=null){{url('admin-assets/images/team/'.$team->image)}}@else{{url('siteassets/frontend/img/home_8/team_1.jpg')}}@endif"
                                     alt="" style="height:270px;width:360px;">
                                <div class="team-layer bg-dark-blue">
                                    <div class="team-share vertical-align">
                                        @if($team->fb !='')<a href="{{$team->fb}}" class="fa fa-facebook"></a>@endif
                                            @if($team->tw !='') <a href="{{$team->tw}}" class="fa fa-twitter"></a>@endif
                                            @if($team->skype !='') <a href="{{$team->skype}}" class="fa fa-skype"></a>@endif
                                            @if($team->google_plus !='') <a href="{{$team->google_plus}}" class="fa fa-google-plus"></a>@endif
                                    </div>
                                </div>


                            </div>
                            <h3 class="team-name color-dark-2">
                                <?php $name='name_'.$lang ?>
                                {{$team->$name}}
                            </h3>
                            <h5 class="team-position color-dark-2-light">
                                <?php $job='job_title_'.$lang ?>
                                {{$team->$job}}
                            </h5>
                            <p class="color-dark-2-light">
                                <?php $desc='description_'.$lang ?>
                                {{$team->$desc}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="main-wraper bg-grey-2 padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2 underline">{{trans('main.contact')}}</h4>
                        <h2>{{trans('main.get_in_touch')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8">

                    {!! Form::open(array(
                                         'url'=>'contactus',
                                         'role'=>'form',
                                         'method'=>'POST',
                                         'class'=>'contact-form',
                                         'files'=>true
                                         ))!!}

                    {{--<form class="contact-form" action="#">--}}
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 type-2 color-2">
                                <input name="first_name" type="text" required="" placeholder="{{trans('main.first_name')}}">
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 type-2 color-2">
                                <input name="last_name" type="text" required="" placeholder="{{trans('main.last_name')}} ">
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 type-2 color-2">
                                <input name="email" type="text" required="" placeholder="{{trans('main.your_email')}}">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="drop-wrap drop-wrap-s-3 color-2">
                                <div class="drop">

                                   <select  name="cat_id" id="">
                                       <option value="">{{trans('main.department')}}</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            <?php $name='name_'.$lang ?>
                                            {{$category->$name}}

                                        </option>
                                        @endforeach

                                    </select>


                                    {{--=============================--}}

                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12">
                                <textarea class="area-style-1 color-1" required="" name="comment"
                                          placeholder="{{trans('main.your_comment')}}"></textarea>
                            <button type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o">
                                <span>{{trans('main.submit')}}</span></button>
                        </div>
                    </div>
                    {{--</form>--}}

                    {!! Form::close()!!}

                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="contact-about">
                        <h4 class="color-dark-2"><strong>{{trans('main.About_us')}}</strong></h4>
                        <p class="color-grey-3">
                            <?php $about='aboutus_'.$lang ?>
                            {!! $settings->$about!!}
                        </p>
                    </div>
                    <div class="contact-info">
                        <h4 class="color-dark-2"><strong>{{trans('main.Contact_Info')}}</strong></h4>
                        <div class="contact-line color-grey-3"><img
                                    src="{{asset('siteassets/frontend/img/phone_icon_2_dark.png')}}" alt="">{{trans('main.phone')}}: <a
                                    class="color-dark-2" href="tel:93123456789">{{$settings->phone}}</a></div>
                        <div class="contact-line color-grey-3"><img
                                    src="{{asset('siteassets/frontend/img/mail_icon_b_dark.png')}}" alt="">{{trans('main.email')}}: <a
                                    class="color-dark-2 tt" href="#">{{$settings->email}}</a></div>
                        <div class="contact-line color-grey-3"><img
                                    src="{{asset('siteassets/frontend/img/loc_icon_dark.png')}}" alt="">{{trans('main.address')}}: <span
                                    class="color-dark-2 tt">
                                 <?php $address='address_'.$lang ?>
                                {{$settings->$address}}
                            </span></div>
                    </div>
                    <div class="contact-socail">
                        <a class="color-grey-3 link-dr-blue-2" href="{{$settings->fb}}"><i
                                    class="fa fa-facebook"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="{{$settings->tw}}"><i
                                    class="fa fa-twitter"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="{{$settings->skype}}"><i
                                    class="fa fa-skype"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="{{$settings->gp}}"><i
                                    class="fa fa-google-plus"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="{{$settings->pin}}"><i
                                    class="fa fa-pinterest-p"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="{{$settings->ins}}"><i class="fa fa-instagram"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="{{$settings->be}}"><i
                                    class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAP BLOCK -->
    <div class="map-block">

        <div id="map-canvas" class="style-2" data-lat="{{$settings->lat}}" data-lng="{{$settings->lon}}" data-zoom="10"
             data-style="2"></div>

        <div class="addresses-block">
            <a data-lat="{{$settings->lat}}" data-lng="{{$settings->lon}}" data-string="Santa Monica Hotel"></a>
        </div>

    </div>

@stop



