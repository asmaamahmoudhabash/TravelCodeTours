@extends('front/main_blog')


@section('meta')


    <meta name="description" content="{{$blogs->meta_description}}">
    <meta name="keywords" content="{{$blogs-> meta_keyword}}">
    <meta name="title" content="{{$blogs->meta_title }}">

@stop

@section('content')



    @inject('main','App\Main')
    @inject('new','App\News')


    <?php

    $mains = $main->find(1);
    $lang = Config::get('app.locale');
    $news = $new->where('status', 1)->take(3)->get();

    ?>


    <div class="inner-banner style-6">
        <img class="center-image"
             src="@if($mains->blogbg !=null){{url('admin-assets/images/photo/'.$mains->blogbg)}}@else{{asset('siteassets/frontend/img/inner/bg_1.jpg')}}@endif"
             alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-blue-2" href="{{url('/')}}">home</a> /</li>
                            <li><a class="link-blue-2" href="{{url('blog')}}">blog</a> /</li>
                            <li><span>blog detail</span></li>
                        </ul>
                        <h2 class="color-white">
                            <?php $blog_title = 'blog_title_' . $lang ?>
                            {{$mains->$blog_title}}

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOG -->
    <div class="detail-wrapper">
        <div class="container">
            <div class="row padd-90">
                <div class="col-xs-12 col-md-8">

                    <div class="detail-content">
                        <div class="detail-content-block">
                            <div class="isotope-container row row10">
                                <div class="grid-sizer col-mob-12 col-xs-6 col-sm-4"></div>
                            </div>

                            <div class="s_news-entry style-2">
                                <a href="{{url('')}}"><img class="s_news-img img-responsive"
                                                           src="{{asset('admin-assets/images/news/'.$blogs->image)}}"
                                                           alt="" style="height: 470px;width:700px;"></a>


                            </div>

                            <div class="sharethis-inline-share-buttons"></div>
                            <br>

                            <div class="detail-content-block">
                                <h3>
                                    <?php $title = 'title_' . $lang ?>
                                    {{$blogs->$title}}
                                </h3>


                                <p>
                                    <?php $body = 'body_' . $lang ?>
                                    {!!$blogs->$body!!}

                                </p>


                                <div class="fb-comments" data-href="{{url('blog/'.$blogs->slug)}}"
                                     data-numposts="5"></div>

                            </div>


                            <br> <br> <br> <br>

                        </div>
                    </div>


                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="right-sidebar">


                        <div class="sidebar-block type-2">
                            <h4 class="sidebar-title color-dark-2">popular posts</h4>
                            <div class="widget-popular">

                                @foreach($news as $new)
                                    <div class="hotel-small style-2 clearfix">
                                        <a class="hotel-img black-hover" href="#">
                                            <img class="img-responsive radius-0"
                                                 src="{{url('admin-assets/images/news/'.$new->image)}}" alt="">
                                            <div class="tour-layer delay-1"></div>
                                        </a>
                                        <div class="hotel-desc">
                                            <div class="tour-info-line">
                                                <div class="tour-info">
                                                    <img src="{{asset('siteassets/frontend/img/calendar_icon_grey.png')}}"
                                                         alt="">
                                                    <span class="font-style-2 color-dark-2">{{date("d m Y",strtotime($new->created_at))}}</span>
                                                </div>
                                                <div class="tour-info">
                                                    <img src="{{asset('siteassets/frontend/img/people_icon_grey.png')}}"
                                                         alt="">
                                                <span class="font-style-2 color-dark-2">
                                                         <?php $name = 'name_' . $lang ?>
                                                    {{$new->user->$name}}
                                                </span>
                                                </div>
                                            </div>
                                            <?php $title = 'title_' . $lang ?>
                                            <h4>{{$new->$title}}</h4>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@stop
