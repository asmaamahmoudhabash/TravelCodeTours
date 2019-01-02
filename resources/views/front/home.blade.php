@extends('front/main')


@section('content')

<?php



    $lang=Config::get('app.locale');



    ?>
    <div class="top-baner">
        <div class="swiper-container main-slider-3" data-autoplay="0" data-loop="1" data-speed="900" data-center="0"
             data-slides-per-view="1">
            <div class="swiper-wrapper">

                @foreach($sliders as $key=>$slider)
                    <div class="swiper-slide @if($key==0) active @endif" data-val="{{$key}}">
                        <div class="clip">
                            {{--<div class="bg bg-bg-chrome act" style="background-image:url(siteassets/frontend/img/slide1.jpg)"></div>--}}
                            <div class="bg bg-bg-chrome act"
                                 style="background-image:url({{url('admin-assets/images/slider/'.$slider->image)}})"></div>
                        </div>
                        <div class="vertical-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="main-title style-2 left">
                                            {{--<h3>Pray <span class="color-blue-2 f-32">On</span>Haram</h3>--}}



                                            <?php $title='title_'.$lang?>
{{--                                            <title>{{$slider->$title }}</title>--}}
                                            <h3>{{$slider->$title}}</h3>

                                            <?php $sub_title='sub_title_'.$lang?>
                                            <h1>{{$slider->$sub_title}}</h1>

                                            <p class="color-white-light">
                                                <?php $body='body_'.$lang?>
                                                {{$slider->$body}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="pagination pagination-left-2 poin-style-1"></div>
        </div>
    </div>




    {{--end slider here--}}

    {{--start the latest tours here--}}
    <div class="main-wraper">
        <div class="container">


            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>{{trans('main.latest')}}</h2>
                        <p class="color-grey">{{trans('main.enjoy_summer')}}</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($tours as $tour)
                    <?php
                    //                        print_r($tour->images()->first()->image);die()
                    //                        print_r(count($tour->images()));die();
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="radius-mask tour-block hover-aqua">
                            <div class="clip">
                                <div class="bg bg-bg-chrome act"
                                     style="background-image:url(@if($tour->image!=null){{url('admin-assets/images/image/'.$tour->image)}}@else {{url('siteassets/frontend/img/01.jpg')}}@endif)">
                                </div>
                            </div>
                            <div class="tour-layer delay-1"></div>
                            <div class="tour-caption">
                                <div class="vertical-align">
                                    <?php $place='place_'.$lang ?>
                                    <h4>{{$tour->$place}}</h4>

                                </div>
                                <div class="vertical-bottom">
                                    <div class="fl">
                                        <div class="tour-info">
                                            <img src="{{asset('siteassets/frontend/img/people_icon.png')}}" alt="">
                                            <span class="font-style-2 color-grey-4"><strong
                                                        class="color-white">{{$tour->adults}}</strong> {{trans('main.adults')}} <strong
                                                        class="color-white">{{$tour->Kids}}</strong> {{trans('main.kids')}}</span>
                                        </div>
                                        <div class="tour-info">
                                            <img src="{{asset('siteassets/frontend/img/calendar_icon.png')}}" alt="">
                                            <span class="font-style-2 color-grey-4">{{date("F jS",strtotime($tour->start_date))}}
                                                {{trans('main.to')}} {{date("F jS",strtotime($tour->final_date))}}</span>
                                        </div>
                                    </div>
                                    <a href="{{url('tour/'.$tour->slug)}}" class="c-button b-50 bg-aqua hv-transparent fr"><img
                                                src="{{asset('siteassets/frontend/img/flag_icon.png')}}'"
                                                alt=""><span>{{trans('main.view_more')}}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>



                @endforeach

            </div>
        </div>
    </div>
    {{--end the latest tours here--}}

    {{--offer starts here--}}

    <div class="main-wraper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>{{trans('main.offer')}}</h2>
                        <p class="color-grey">{{trans('main.enjoy_offer')}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-baner arrows">
                    <div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500"
                         data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                         data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                        <div class="swiper-wrapper">

                            @foreach($offers as $key2=>$offer)
                                <?php
//                                       echo $offer->image;die();
                                        ?>
                                <div class="swiper-slide" data-val="{{$key2}}">
                                    <div class="offers-block radius-mask">
                                        <div class="clip">
                                            <div class="bg bg-bg-chrome act"
                                                 style="background-image:url(@if($offer->image!=null){{url('admin-assets/images/image/'.$offer->image)}}@else {{url('siteassets/frontend/img/01.jpg')}}@endif)">
                                            </div>
                                        </div>
                                        <div class="tour-layer delay-1"></div>
                                        <div class="vertical-top">
                                            <?php $place='place_'.$lang ?>
                                            <h3>{{$offer->$place}}</h3>
                                        </div>
                                        <div class="vertical-bottom">

                                            <h4>from <b>{{$offer->price}}</b></h4>
                                            <p>{{$offer->describtion}}</p>
                                            <a href="{{url('tour/'.$offer->slug)}}"
                                               class="c-button bg-aqua hv-aqua-o b-40"><span>{{trans('main.view_more')}}</span></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <div class="pagination  poin-style-1 pagination-hidden"></div>
                    </div>
                    <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
                </div>
            </div>
        </div>
    </div>


    {{--continents starts here--}}

    <div class="main-wraper padd-110">
        <div class="container clearfix contry-wrapp">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="second-title style-3">
                        <h4 class="subtitle color-dark-2-light">{{trans('main.our_tours')}}</h4>
                        <h2 class="color-dark-2">{{trans('main.to_any_place')}}</h2>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="row">

                        @foreach($continents as $continent)

                            <div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">

                                    <img class="img-responsive"
                                         src="{{url('admin-assets/images/continent/'.$continent->image)}}" alt="">
                                    <h5>{{$continent->name_en}}</h5>

                            </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>




    {{--continents starts here--}}

@stop
