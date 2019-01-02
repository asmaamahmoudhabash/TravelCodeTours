@extends('front/main')

@section('meta')


    <meta name="description" content="{{$categories->meta_description}}">
    <meta name="keywords" content="{{$categories-> meta_keyword}}">
    <meta name="title" content="{{$categories->meta_title }}">

@stop

@section('content')



    @inject('ad','App\Ads')
    @inject('main','App\Main')
    @inject('sort','App\Tour')


    <?php

    $ads = $ad->find(1);
    $mains = $main->find(1);
    $lang=Config::get('app.locale');





    ?>

    <div class="inner-banner style-5">
        <img class="center-image"
             src="@if($categories->background !=null){{url('admin-assets/images/category/'.$categories->background)}}@else{{asset('siteassets/frontend/img/inner/bg_1.jpg')}}@endif"
             alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-blue-2" href="{{url('/')}}">{{trans('main.Home')}}</a> /</li>
                            <li><a class="link-blue-2" href="#">{{trans('main.Tour')}}</a> /</li>
                            <li><span>{{trans('main.lsit_tours')}}</span></li>
                        </ul>
                        <h2 class="color-white">

                            <?php $bg_title='bg_title_'.$lang ?>
                            {{$categories->$bg_title}}
                        </h2>
                        <p class="color-white-light">
                            <?php $bg_desc='bg_desc_'.$lang ?>
                            {{$categories->$bg_desc}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="list-wrapper bg-grey-2">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">

                    <div class="sidebar bg-white clearfix">

                        <div class="sidebar-block">
                            <h4 class="sidebar-title color-dark-2">{{trans('main.ads')}}</h4>

                            <img src="@if($ads->image !=null){{url('admin-assets/images/ads/'.$ads->image)}}@else{{asset('siteassets/frontend/img/sidead.jpg')}}@endif"
                                 alt="" style="height: 420px;width:222px;" >

                        </div>


                    </div>

                </div>
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <div class="list-header clearfix">
                        <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                            <div class="drop">

                                {!! Form::open([
                                 'method' => 'GET'
              ]) !!}
                                <select name="order" id="" onchange="submit()">
                                    <option value="">{{trans('main.sort')}}</option>
                                    <option value="ASC" @if(\Request::input('order')=="ASC") selected @endif>ASC</option>
                                    <option value="DESC"  @if(\Request::input('order')=="DESC") selected @endif >DESC</option>
                                </select>
                                {{Form::close()}}

                            </div>
                        </div>

                        <div class="list-view-change">
                            <div class="change-grid color-3 fr"><i class="fa fa-th"></i></div>
                            <div class="change-list color-3 fr active"><i class="fa fa-bars"></i></div>
                            <div class="change-to-label fr color-grey-8">{{trans('main.view')}}</div>
                        </div>
                    </div>


                    @if(!empty($tours))
                        <div class="list-content clearfix">

                            @foreach($tours as $tour)


                                <div class="list-item-entry">
                                    <div class="hotel-item style-9 bg-white">
                                        <div class="table-view">
                                            <div class="radius-top cell-view">
                                                <img src="{{url('admin-assets/images/image/'.$tour->image)}}" alt="">

                                            </div>
                                            <div class="title hotel-middle cell-view">
                                                <div class="tour-info-line clearfix">
                                                    <div class="tour-info fl">
                                                        <img src="{{asset('siteassets/frontend/img/calendar_icon_grey.png')}}"
                                                             alt="">
                                                        <span class="font-style-2 color-grey-3">{{date("F jS Y" ,strtotime($tour->start_date))}}</span>
                                                    </div>
                                                    <div class="tour-info fl">
                                                        <img src="{{asset('siteassets/frontend/img/loc_icon_small_grey.png')}}"
                                                             alt="">
                                                        <span class="font-style-2 color-grey-3">
                                                               <?php $place='place_'.$lang ?>
                                                            {{$tour->$place}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4><b>
                                                        <?php $name_en='name_'.$lang ?>
                                                        @if(isset($tour->continent))  {{$tour->continent->$name_en}}@endif

                                                    </b></h4>

                                                <p class="f-14 color-grey-3">
                                                    <?php $short_cut='short_cut_'.$lang ?>
                                                    {!! $tour->$short_cut !!}



                                                </p>
                                                <div class="buttons-block bg-dr-blue-2">
                                                    <a href="{{url('tour/'.$tour->slug)}}"
                                                       class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">{{trans('main.detail')}}</a>
                                                    <a href="{{url('booking')}}"
                                                       class="c-button b-40 bg-white hv-transparent fr">{{trans('main.book_now')}}</a>
                                                </div>
                                            </div>
                                            <div class="title hotel-right clearfix cell-view grid-hidden">

                                                <div class="hotel-person color-dark-2">{{trans('main.from')}}<span
                                                            class="color-blue">{{$tour->price}}</span> {{trans('main.person')}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach


                        </div>

                    @endif
                    <div class="c_pagination clearfix padd-120 " style="text-align: center">
                        {{$tours->render()}}
                    </div>

                    {{--<div class="c_pagination clearfix padd-120">--}}
                    {{--<a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fl">prev page</a>--}}
                    {{--<a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fr">next page</a>--}}
                    {{--<ul class="cp_content color-3">--}}
                    {{--<li class="active"><a href="#">1</a></li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    {{--<li><a href="#">...</a></li>--}}
                    {{--<li><a href="#">10</a></li>--}}
                    {{--</ul>--}}

                    {{--</div>--}}


                </div>
            </div>
        </div>
    </div>








@stop
