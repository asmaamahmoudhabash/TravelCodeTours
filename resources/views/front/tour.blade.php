@extends('front/main')




@section('meta')


    <meta name="description" content="{{$tour->meta_description}}">
    <meta name="keywords" content="{{$tour-> meta_keyword}}">
    <meta name="title" content="{{$tour->meta_title }}">

@stop


@section('content')

    @inject('setting','App\Main')
    @inject('category','App\Category')
    <?php

    $settings = $setting->find(1);
    $categories = $category->take(3)->get();
    $lang=Config::get('app.locale');





    ?>


    <div class="inner-banner style-5">


        <img class="center-image"
             src="@if($tour->background !=null){{url('admin-assets/images/tours/'.$tour->background)}}@else{{asset('siteassets/frontend/img/inner/bg_1.jpg')}}@endif"
             alt="">

        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">

                        <h2 class="color-white">
                            <?php $bg_title='bg_title_'.$lang ?>
                            {{$tour->$bg_title}}
                        </h2>
                        <p class="color-white-light">
                            <?php $bg_desc='bg_desc_'.$lang ?>
                            {{$tour->$bg_desc}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="detail-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="detaile-title">

                        <h2>{{trans('main.Tour_details')}}</h2>


                        <div class="detail-price color-dark-2">{{trans('main.price_from')}}<span
                                    class="color-dr-blue"> {{$tour->price}}</span>
                            {{trans('main.person')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="car-tabs">
                        <div class="drop-tabs">
                            <b>hotels</b>
                            <a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
                            <ul class="nav-tabs tpl-tabs tabs-style-1">
                                <li class="active click-tabs"><a href="#one" data-toggle="tab"
                                                                 aria-expanded="false"><span
                                                class="fa fa-camera"></span> {{trans('main.photoes')}}</a></li>
                                <li class="click-tabs"><a href="#two" data-toggle="tab" aria-expanded="false"><span
                                                class="fa fa-map-marker"></span> {{trans('main.on_map')}}</a></li>
                                <li class="click-tabs"><a href="#three" data-toggle="tab" aria-expanded="false"><span
                                                class="fa fa-video-camera"></span>{{trans('main.Video')}}</a></li>
                                {{--<li class="click-tabs"><a href="#four" data-toggle="tab" aria-expanded="false"><span class="fa fa-comment"></span>Reviews</a></li>--}}
                            </ul>
                        </div>

                        <div class="tab-content tpl-tabs-cont section-text t-con-style-1">

                            <div class="tab-pane active in" id="one">

                                <div class="detail-top slider-wth-thumbs style-1 arrows">
                                    <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1"
                                         data-speed="500" data-center="0" data-slides-per-view="1">
                                        <div class="swiper-wrapper">

                                            @foreach($tour->images as $key=>$image)
                                            <div class="swiper-slide active" data-val="{{$key}}">
                                                <img class="img-responsive img-full" src="{{url('admin-assets/images/image/'.$image->image)}}" alt="" style="height: 416.5px;width:555px;">
                                            </div>

                                       @endforeach
                                        </div>
                                        <div class="pagination pagination-hidden poin-style-1"></div>
                                        <div class="arrow-wrapp arr-s-3">
                                            <div class="swiper-arrow-left sw-arrow"><span
                                                        class="fa fa-angle-left"></span></div>
                                            <div class="swiper-arrow-right sw-arrow"><span
                                                        class="fa fa-angle-right"></span></div>
                                        </div>
                                    </div>
                                    <div class="swiper-container thumbnails" data-autoplay="0" data-loop="0"
                                         data-speed="500" data-slides-per-view="responsive" data-xs-slides="3"
                                         data-sm-slides="5" data-md-slides="5" data-lg-slides="5"
                                         data-add-slides="5">
                                        <div class="swiper-wrapper">

                                            @foreach($tour->images as $key=>$image)
                                                <div class="swiper-slide current active" data-val="{{$key}}">
                                                    <img class="img-responsive img-full"
                                                         src="{{url('admin-assets/images/image/'.$image->image)}}"
                                                         alt=""  style="height: 83px;width:111px;">
                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="pagination hidden"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="two">
                                <div id="map-canvas" class="style-1" data-lat="{{$tour->lat}}" data-lng="{{$tour->lon}}"
                                     data-zoom="15" data-style="6"></div>
                                <div class="addresses-block">
                                    <a data-lat="{{$tour->lat}}" data-lng="{{$tour->lon}}"
                                       data-string="Santa Monica Hotel"></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="three">
                                <iframe src="{{$tour->vedio}}"></iframe>
                            </div>
                            <div class="tab-pane" id="four">
                                <div class="reviews">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="progress-wrapper">
                                                <h4>Traveler rating</h4>
                                                <div class="progress-block">
                                                    <div class="progress-label">Excellent</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-dr-blue-2" role="progressbar"
                                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                             data-to="100" data-speed="3000" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-block">
                                                    <div class="progress-label">Very Good</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-dr-blue-2" role="progressbar"
                                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                             data-to="75" data-speed="3000" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-block">
                                                    <div class="progress-label">Average</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-dr-blue-2" role="progressbar"
                                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                             data-to="50" data-speed="3000" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-block">
                                                    <div class="progress-label">Poor</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-dr-blue-2" role="progressbar"
                                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                             data-to="60" data-speed="3000" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="summary">
                                                <h4>Summary</h4>
                                                <div class="summ-block">
                                                    <h5>Equipment</h5>
                                                    <div class="rate">
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                                <div class="summ-block">
                                                    <h5>Climate </h5>
                                                    <div class="rate">
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                                <div class="summ-block">
                                                    <h5>Facility</h5>
                                                    <div class="rate">
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                                <div class="summ-block">
                                                    <h5>Safely</h5>
                                                    <div class="rate">
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star color-yellow"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">Write a review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="total-summ">
                        <div class="sidebar-rating">




                            <a href="{{url('booking')}}" class="c-button b-40 bg-red-3 hv-red-3-o">{{trans('main.book_now')}}</a>
                            {{--<a class="btn btn-default popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Book Now</a>--}}









                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    {{--<div class="detail-company">--}}
                    {{--<div class="detail-logo bg-grey-2">--}}
                    {{--<div class="detail-logo-name">emirates aerlines</div>--}}
                    {{--<img src="img/detail/detail_logo_2.png" alt="">--}}
                    {{--</div>--}}

                    {{--tour details starts here--}}
                    <div class="detail-block bg-red-3">

                        <h4 class="color-white">{{trans('main.details')}}</h4>
                        <div class="details-desc">




                            <p class="color-pink">{{trans('main.Category:')}} <span class="color-white">
                                        <?php $name='name_'.$lang ?>


                                            @if(isset($tour->category)) {{$tour->category->$name}}@endif
                                </span>
                            </p>

                            {{--=========================--}}
                            <p class="color-pink">{{trans('main.price:')}} <span class="color-white">{{$tour->price}}{{trans('main.person')}}</span></p>

                            <p class="color-pink">{{trans('main.AIRLINE:')}} <span class="color-white">

                                     <?php $air_line='air_line_'.$lang ?>
                                    {{$tour->$air_line}}
                                </span></p>

                            {{--==========================--}}
                            <p class="color-pink"> {{trans('main.date:')}}<span class="color-white">
                                    <?php   $start_date = date_format(date_create($tour->start_date), 'Y-m-d'); ?>



                                    {{trans('main.to')}}

                                        <?php   $final_date = date_format(date_create($tour->final_date), 'Y-m-d'); ?>

                                </span></p>

                            {{--<p class="color-pink">rate: <span class="fa fa-star color-yellow"></span><span class="fa fa-star color-yellow"></span><span class="fa fa-star color-yellow"></span><span class="fa fa-star color-yellow"></span><span class="fa fa-star color-yellow"></span></p>--}}
                            <p class="color-pink">{{trans('main.FLIGHT TYPE:')}} <span class="color-white">
                                     <?php $type='type_'.$lang ?>
                                    {{$tour->$type}}


                                </span></p>



                            {{--==============================--}}
                            <p class="color-pink">{{trans('main.FARE TYPE:')}} <span class="color-white">
                                     <?php $fare='fare_'.$lang ?>
                                    {{$tour->$fare}}
                                </span></p>

                            {{--==========================--}}
                            <p class="color-pink">{{trans('main.CANCELLATION:')}} <span class="color-white">
                                    {{$tour->cancelation_en}} /{{trans('main.person')}} </span>
                            </p>


                            {{--==========================--}}
                            <p class="color-pink">{{trans('main.FLIGHT CHANGE:')}} <span class="color-white">
                                    {{$tour->change_en}}
                                    / {{trans('main.person')}} </span></p>


                            {{--===========================--}}
                            <p class="color-pink">{{trans('main.SEATS & BAGGAGE:')}} <span
                                        class="color-white">
                                      <?php $seats_paggages='seats_paggages_'.$lang ?>
                                    {{$tour->$seats_paggages}}
                                </span></p>
                            {{--===========================================--}}
                            <p class="color-pink">{{trans('main.INFLIGHT FEATURES:')}} <span
                                        class="color-white">

                                      <?php $inflight_features='inflight_features_'.$lang ?>
                                    {{$tour->$inflight_features}}
                                </span></p>





                            {{--========================================--}}
                            <p class="color-pink">{{trans('main.BASE FARE:')}} <span class="color-white">{{$tour->base_fare_en}}</span></p>
                            <p class="color-pink">{{trans('main.TAXES & FEES:')}} <span class="color-white">{{$tour->taxes_fees_en}}</span>
                            </p>
                            <?php  $total= $tour->base_fare_en +$tour->taxes_fees_en ?>
                            <p class="color-pink">{{trans('main.TOTAL PRICE:')}} <span class="color-white">{{$total}}</span></p>
                            {{--@endforeach--}}
                        </div>
                        <div class="details-btn">
                            <a href="{{url('tour_map/'.$tour->slug)}}" class="c-button b-40 bg-tr-1 hv-white"><span>{{trans('main.on_map')}}</span></a>
                            <a href="{{url('booking')}}" class="c-button b-40 bg-tr-1 hv-white">{{trans('main.book_now')}}</a>
                        </div>
                    </div>

                    {{--tour details ends here--}}

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="detail-content">
                    <div class="detail-content-block">
                        <h3>Tour description:</h3>


                        <p>

                            <?php $description='description_'.$lang ?>
                            {!! $tour->$description !!}

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="fb-comments" data-href="{{url('tour/'.$tour->id)}}" data-numposts="5"></div>
            </div>
        </div>
    </div>
    </div>

    <div class="main-wraper padd-40">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">

                    {{--form start here--}}

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

                            <?php $aboutus='aboutus_'.$lang ?>
                            {!! $settings->$aboutus !!}
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









@stop

