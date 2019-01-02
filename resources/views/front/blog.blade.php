@extends('front/main')



@inject('main','App\Main')
@inject('tour','App\Tour')

<?php

$mains=$main->find(1);
$lang=Config::get('app.locale');



?>
{{--pagenation style--}}
@section('meta')


    <meta name="description" content="{{$mains->meta_description_en}}">
    <meta name="keywords" content="{{$mains-> meta_keyword_en}}">
    <meta name="title" content="{{$mains->meta_title_en }}">

@stop



@section('content')


<style>

    .pagination > .active > a,
    .pagination > .active > a:focus,
    .pagination > .active > a:hover,
    .pagination > .active > span,
    .pagination > .active > span:focus,
    .pagination > .active > span:hover {
        background: #f7921c;
        color: #fff;
        border:0px;
    }

    .pagination > li > a:focus,
    .pagination > li > a:hover,
    .pagination > li > span:focus,
    .pagination > li > span:hover {
        color: #bebebe;
        background: #fff;
    }


</style>




    <div class="inner-banner style-6">


        <img class="center-image" src=" @if($mains->blogbg !=null){{url('admin-assets/images/photo/'.$mains->blog_bg)}}@else{{asset('siteassets/frontend/img/inner/bg_6.jpg')}}@endif" alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-blue-2" href="{{url('/')}}">{{trans('main.Home')}}</a> /</li>
                            <li><a class="link-blue-2" href="#">{{trans('main.news')}}</a> /</li>
                            <li><span>{{trans('main.list_news')}}</span></li>
                        </ul>
                        <h2 class="color-white">
                            <?php $blog_title='blog_title_'.$lang ?>
                            {{$mains->$blog_title}}

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- S_NEWS-ENTRY -->
    <div class="main-wraper padd-120">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">

                    </div>
                </div>
            </div>



            <div class="blog-grid row">


                @foreach($news as $new)
                <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                    <div class="s_news-entry style-2">
                        <a href="{{url('blog/'.$new->slug)}}"><img class="s_news-img img-responsive"  src="{{url('admin-assets/images/news/'.$new->image)}} " alt=""  style="height: 320px;width:300px;" ></a>
                        <h4 class="s_news-title"><a href="{{url('blog/'.$new->slug)}}">

                                <?php $title='title_'.$lang ?>
                                {{$new->$title}}</a>
                        </h4>
                        <div class="tour-info-line clearfix">
                            <div class="tour-info fl">
                                <img src="{{asset('siteassets/frontend/img/calendar_icon_grey.png')}}" alt="" >
                                <span class="font-style-2 color-dark-2">{{date('d m Y',strtotime($new->created_at))}}</span>
                            </div>
                            <div class="tour-info fl">
                                <img src="{{asset('siteassets/frontend/img/people_icon_grey.png')}}" alt="" >
                                <span class="font-style-2 color-dark-2">
                                    <?php $name='name_'.$lang ?>
                                    {{$new->user->$name}}
                                </span>
                            </div>
                            <div class="tour-info fl">

                            </div>
                        </div>
                        <div class="s_news-text color-grey-3">
                            <?php $body='body_'.$lang ?>
                            {!! $new->$body !!}
                        </div>
                        <a href="{{url('blog/'.$new->slug)}}" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>{{trans('main.read_more')}}</span></a>
                    </div>
                </div>

                 @endforeach

            </div>

            <div class="c_pagination clearfix padd-120 " style="text-align: center">
                {{$news->render()}}
            </div>
        </div>
    </div>


@stop
