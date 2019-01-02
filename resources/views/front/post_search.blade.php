
    @extends('front/main')


@section('content')



    @inject('main','App\Main')
    @inject('new','App\News')





    <?php

    $mains = $main->find(1);
    $news = $new->where('status', 1)->take(3)->get();



    ?>


    <div class="inner-banner style-6">
        <img class="center-image" src="@if($mains->blogbg !=null){{url('admin-assets/images/photo/'.$mains->blogbg)}}@else{{asset('siteassets/frontend/img/inner/bg_1.jpg')}}@endif"" alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-blue-2" href="{{url('/')}}">home</a> /</li>
                            <li><a class="link-blue-2" href="{{url('blog')}}">blog</a> /</li>
                            <li><span>blog detail</span></li>
                        </ul>
                        <h2 class="color-white">{{$mains->blog_title}}</h2>
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
                            {{--<div class="share clearfix">--}}
                            {{--<div class="share-title color-dark-2">share:</div>--}}
                            <div class="sharethis-inline-share-buttons"></div>

                            {{--<ul>--}}
                            {{--<li class="color-fb"><a href=""><i class="fa fa-facebook"></i>facebook<span class="color-fb-2">12</span></a></li>--}}
                            {{--<li class="color-tw"><a href=""><i class="fa fa-twitter"></i>twitter<span class="color-tw-2">27</span></a></li>--}}
                            {{--<li class="color-gg"><a href=""><i class="fa fa-google-plus"></i>google +<span class="color-gg-2">51</span></a></li>--}}

                            {{--</ul>--}}
                            {{--</div>--}}


                            <br> <br> <br> <br>

                            <div class="detail-content-block">
                                {{--<h3>{{$blogs->title}}</h3>--}}
                                {{--<p>{{$blogs->body}}</p>--}}


                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="right-sidebar">
                        <div class="sidebar-block type-2">
                            <div class="widget-search clearfix">


                                {{--<form>--}}

                                {{--{!! Form::open(array(--}}
                                                  {{--'url'=>'posts_search',--}}

                                                   {{--'role'=>'form',--}}
                                                  {{--'method'=>'GET',--}}
                                                  {{--'files'=>true--}}
                                                  {{--))!!}--}}
                                {{--<div class="input-style-1 b-50 brd-0 type-2 color-3">--}}
                                    {{--<input type="text"  name="keyword" placeholder="Enter what you want to find">--}}
                                {{--</div>--}}
                                {{--<input class="widget-submit" type="submit" value="">--}}
                                {{--</form>--}}
                                {{--{!! Form::close()!!}--}}



                            </div>
                        </div>



                        <div class="sidebar-block type-2">
                            <h4 class="sidebar-title color-dark-2">popular posts</h4>
                            <div class="widget-popular">

                                @foreach($news as $new)
                                    <div class="hotel-small style-2 clearfix">
                                        <a class="hotel-img black-hover" href="#">
                                            <img class="img-responsive radius-0" src="{{url('admin-assets/images/news/'.$new->image)}}" alt="">
                                            <div class="tour-layer delay-1"></div>
                                        </a>
                                        <div class="hotel-desc">
                                            <div class="tour-info-line">
                                                <div class="tour-info">
                                                    <img src="{{asset('siteassets/frontend/img/calendar_icon_grey.png')}}" alt="">
                                                    <span class="font-style-2 color-dark-2">{{date("d m Y",strtotime($new->published_at))}}</span>
                                                </div>
                                                <div class="tour-info">
                                                    <img src="{{asset('siteassets/frontend/img/people_icon_grey.png')}}" alt="">
                                                    {{--<span class="font-style-2 color-dark-2">{{$news->user->name}}</span>--}}
                                                </div>
                                            </div>
                                            <h4>{{$new->title}}</h4>
                                            <div class="tour-info-line clearfix">
                                                <div class="tour-info">
                                                    <img src="{{asset('siteassets/frontend/img/comment_icon_grey.png')}}" alt="">
                                                    <span class="font-style-2 color-dark-2">10 comments</span>
                                                </div>
                                            </div>
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












