





@extends('front/main')


@section('content')

    @inject('main','App\Main')
    @inject('gallery','App\Gallery')
    <?php

    $mains=$main->find(1);
    $galleries=$gallery->take(4)->get();
    $lang=Config::get('app.locale');

            ?>

    <div class="inner-banner style-6">
        <img class="center-image" src="@if($mains->gallerybg !=null){{url('admin-assets/images/photo/'.$mains->gallerybg)}}@else{{url('siteassets/frontend/img/gallery/bg_2.jpg')}}@endif" alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-dr-blue-2" href="{{url('/')}}">home</a> /</li>
                            <li><a class="link-dr-blue-2" href="{{url('gallery')}}">gallery</a> /</li>
                            <li><span>gallery detail</span></li>
                        </ul>
                        <h2 class="color-white">
                            <?php $gallery_title='gallery_title_'.$lang ?>
                            {{$mains->$gallery_title}}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GALLERY-DETAIL -->
    <div class="main-wraper padd-70-70">
        <div class="container">

            <div class="gallery-detail">



                <div class="top-baner arrows">




                    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="tour-slide-2">
                        <div class="swiper-wrapper">
                            @foreach($sliders as $slider)
                            <div class="swiper-slide">
                                <img class="img-responsive"    src="{{url('admin-assets/images/gallery/'.$slider->image)}}" alt=""  style="height: 416.5px;width:1200px;"  >
                            </div>
                               @endforeach
                        </div>
                        <div class="pagination pagination-hidden poin-style-1"></div>
                    </div>



                    <div class="arrow-wrapp arr-s-1">
                        <div class="cont-1170">
                            <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                            <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                        </div>
                    </div>
                </div>

                {{--<div class="top-baner arrows">--}}


                    {{--<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="tour-slide-2">--}}
                        {{--<div class="swiper-wrapper">--}}


                            {{--@foreach($sliders as $slider)--}}

                            {{--<div class="swiper-slide">--}}
                                {{--<img class="img-responsive" src="{{url('admin-assets/images/image/'.$slider->image)}}" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="swiper-slide">--}}
                                {{--<img class="img-responsive" src="{{asset('siteassets/frontend/img/gallery/slide_1.jpg')}}" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="swiper-slide">--}}
                                {{--<img class="img-responsive" src="img/gallery/slide_1.jpg" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="swiper-slide">--}}
                                {{--<img class="img-responsive" src="img/gallery/slide_1.jpg" alt="">--}}
                            {{--</div>--}}


                        {{--</div>--}}
                        {{--@endforeach--}}
                        {{--<div class="pagination pagination-hidden poin-style-1"></div>--}}
                    {{--</div>--}}




                    {{--<div class="arrow-wrapp arr-s-1">--}}
                        {{--<div class="cont-1170">--}}
                            {{--<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>--}}
                            {{--<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="gd-content">
                    <div class="gd-category color-grey">honeymoon tours</div>
                    <h2 class="gd-title">monte carlo</h2>

                    <?php $content='content_'.$lang ?>
                    <p>{!!$photoes->$content!!}</p>

                    <h4>my listing deactivated</h4>
                    <?php $description='description_'.$lang ?>
                    <p>{!! $photoes->$description !!}</p>
                </div>
                {{--<div class="photo-arrows clearfix">--}}
                    {{--<a href="#" class="c-button b-50 photo-ar-left bg-dr-blue-2">--}}
                        {{--prev image--}}
                        {{--<img class="arrow-img" src="{{asset('siteassets/frontend/img/gallery/arrow-left.jpg')}}" alt="">--}}
                        {{--<div class="photo-prev">--}}
                            {{--<div class="photo-prev-title color-dark-2">andora</div>--}}
                            {{--<div class="photo-prev-desc color-grey">mountain tours</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="c-button b-50 photo-ar-right bg-dr-blue-2">--}}
                        {{--next image--}}
                        {{--<img class="arrow-img" src="{{asset('siteassets/frontend/img/gallery/arrow-left.jpg')}}" alt="">--}}
                        {{--<div class="photo-next">--}}
                            {{--<div class="photo-next-title color-dark-2">andora</div>--}}
                            {{--<div class="photo-next-desc color-grey">mountain tours</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}

            </div>
            {{--==================================--}}
            <div class="related-block">
                <h3 class="related-title">Related Photos</h3>
                <div class="row">



                    @foreach($tours as $tour)
                    <div class="item hotels gal-item style-3 col-sm-12 col-sm-4">
                        <a class="black-hover" href="{{url('tour/'.$tour->slug)}}">
                            <div class="gal-item-icon">
                                <img class="img-full img-responsive" src="{{url('admin-assets/images/image/'.$tour->image)}}" alt=""  style="height: 270px;width:360px;">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <span class="c-button small bg-white delay-2"><span>view more</span></span>
                                </div>
                            </div>
                            <div class="gal-item-desc delay-1">
                                <?php $place='place_'.$lang ?>
                                <h4><b>{{$tour->$place}}</b></h4>
                                <h5>sea tours</h5>
                            </div>
                        </a>
                    </div>


                    @endforeach


                </div>
            </div>
        </div>
    </div>
@stop
