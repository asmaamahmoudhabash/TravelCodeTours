@extends('front/main')



@section('meta')


    <meta name="description" content="{{$services->meta_description}}">
    <meta name="keywords" content="{{$services-> meta_keyword}}">
    <meta name="title" content="{{$services->meta_title }}">

@stop

@section('content')
    <?php
    $lang = Config::get('app.locale');
    ?>

    <div class="inner-banner style-6">
        <img class="center-image"
             src="@if($services->background !=null){{url('admin-assets/images/services/'.$services->background)}}@else{{asset('siteassets/frontend/img/detail/bg_2.jpg')}}@endif"
             alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <br> <br>
                            <li><a class="link-blue-2" href="{{url('/')}}">{{trans('main.Home')}}</a> /</li>
                            {{--<li><a class="link-blue-2" href="">{{trans('main.Tour')}}</a> /</li>--}}
                            <li><span>{{trans('main.detail')}}</span></li>
                        </ul>
                        <h2 class="color-white">


                            <?php $bg_title = 'bg_title_' . $lang ?>
                            {{$services->$bg_title}}


                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- DETAIL WRAPPER -->
    <div class="detail-wrapper">
        <div class="container">
            <div class="detail-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <div class="detail-category color-grey-3">
                            <?php $title_details = 'title_details_' . $lang ?>
                            {{$services->$title_details}}
                        </div>
                        <h2 class="detail-title color-dark-2">
                            <?php $title = 'title_' . $lang ?>
                            {{$services->$title}}

                        </h2>
                        <div class="detail-rate rate-wrap clearfix">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">

                    </div>
                </div>
            </div>
            <div class="row padd-90">
                <div class="col-xs-12 col-md-8">
                    <div class="detail-content color-1">
                        <div class="detail-top slider-wth-thumbs style-2">
                            <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1"
                                 data-speed="500" data-center="0" data-slides-per-view="1">


                                <div class="swiper-wrapper asmaa">
                                    @foreach($images as $key=>$image)
                                        <div class="swiper-slide active" data-val="{{$key}}">
                                            <img class="img-responsive img-full"
                                                 src="{{url('admin-assets/images/services/'.$image->image)}}" alt=""
                                                 style="height: 500px;width:750px;">
                                        </div>
                                    @endforeach

                                </div>


                                <div class="pagination pagination-hidden"></div>
                            </div>
                            <div class="swiper-container thumbnails" data-autoplay="0"
                                 data-loop="0" data-speed="500" data-center="0"
                                 data-slides-per-view="responsive" data-xs-slides="3"
                                 data-sm-slides="5" data-md-slides="5" data-lg-slides="5"
                                 data-add-slides="5">


                                <div class="swiper-wrapper">
                                    @foreach($images as $key=>$image)
                                        <div class="swiper-slide current active" data-val="{{$key}}">
                                            <img class="img-responsive img-full"
                                                 src="{{url('admin-assets/images/services/'.$image->image)}}" alt="" style="height: 83px;width:150px;">
                                        </div>
                                    @endforeach

                                </div>
                                <div class="pagination hidden"></div>
                            </div>
                        </div>

                        <div class="detail-content-block">
                            <h3>{{trans('main.info')}}</h3>
                            <?php $description = 'description_' . $lang ?>
                            <p>{!! $services->$description !!}</p>


                        </div>
                        <div class="detail-content-block">

                            <div class="accordion style-2">
                                <div class="acc-panel">

                                    <div class="acc-body">
                                        <h5>metus Aenean eget massa</h5>
                                        <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta
                                            mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.
                                            Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum
                                            tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis
                                            dignissim.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-panel">

                                    <div class="acc-body">
                                        <h5>metus Aenean eget massa</h5>
                                        <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta
                                            mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.
                                            Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum
                                            tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis
                                            dignissim.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-panel">

                                    <div class="acc-body">
                                        <h5>metus Aenean eget massa</h5>
                                        <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta
                                            mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.
                                            Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum
                                            tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis
                                            dignissim.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="right-sidebar">


                        <div class="sidebar-text-label bg-dr-blue color-white">{{trans('main.useful_info')}}</div>

                        <div class="help-contact bg-grey-2">
                            <h4 class="color-dark-2">{{trans('main.help')}}</h4>
                            <?php $help = 'help_' . $lang ?>
                            <p class="color-grey">{!! $services->$help !!}</p>
                            <a class="help-phone color-dark-2 link-dr-blue" href="tel:0200059600"><img
                                        src="{{asset('siteassets/frontend/img/detail/phone24-dark.png')}}"
                                        alt="">{{$services->phone_en}}</a>
                            <a class="help-mail color-dark-2 link-dr-blue" href="mailto:let’s_travel@world.com"><img
                                        src="{{asset('siteassets/frontend/img/detail/letter-dark.png')}}"
                                        alt="">{{$services->mail_us}}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>



@stop
