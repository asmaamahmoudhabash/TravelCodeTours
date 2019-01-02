@extends('front/main')

@section('content')




    <div class="list-wrapper bg-grey-2">
        <div class="container">

            <br>
            <br> <br> <br> <br> <br>
            <div class="row">

                <div class="col-xs-12 col-sm-8 col-md-9">
                    <div class="list-header clearfix">
                        {{--<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">--}}
                            {{--<div class="drop">--}}

                                {{--{!! Form::open([--}}
                                 {{--'method' => 'GET'--}}
              {{--]) !!}--}}
                                {{--<select name="order" id="" onchange="submit()">--}}
                                    {{--<option value="">{{trans('main.sort')}}</option>--}}
                                    {{--<option value="ASC" @if(\Request::input('order')=="ASC") selected @endif>ASC</option>--}}
                                    {{--<option value="DESC"  @if(\Request::input('order')=="DESC") selected @endif >DESC</option>--}}
                                {{--</select>--}}
                                {{--{{Form::close()}}--}}
                                {{--<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>--}}
                                {{--<span>--}}
                                {{--<a href="{{url('category/ASC/'.$categories->id)}}">{{trans('main.asc')}}</a>--}}
                                {{--<a href="{{url('category/DESC/'.$categories->id)}}">{{trans('main.desc')}}</a>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{----}}


                        <div class="list-view-change">
                            <div class="change-grid color-3 fr"><i class="fa fa-th"></i></div>
                            <div class="change-list color-3 fr active"><i class="fa fa-bars"></i></div>
                            <div class="change-to-label fr color-grey-8">View:</div>
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
                                                    <img src="{{asset('siteassets/frontend/img/calendar_icon_grey.png')}}" alt="">
                                                    <span class="font-style-2 color-grey-3">{{date("F jS Y" ,strtotime($tour->start_date))}}</span>
                                                </div>
                                                <div class="tour-info fl">
                                                    <img src="{{asset('siteassets/frontend/img/loc_icon_small_grey.png')}}" alt="">
                                                    <span class="font-style-2 color-grey-3">{{$tour->place_en}}</span>
                                                </div>
                                            </div>
                                            <h4><b>{{$tour->continent->name_en}}</b></h4>

                                            <p class="f-14 color-grey-3">{{$tour->description_en}}</p>
                                            <div class="buttons-block bg-dr-blue-2">
                                                <a href="{{url('tour/'.$tour->id)}}" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
                                                <a href="{{url('booking')}}" class="c-button b-40 bg-white hv-transparent fr">book now</a>
                                            </div>
                                        </div>
                                        <div class="title hotel-right clearfix cell-view grid-hidden">

                                            <div class="hotel-person color-dark-2">from <span class="color-blue">{{$tour->price}}</span> person</div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach




                    </div>
                    @endif

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


                    <div class="c_pagination clearfix padd-120 " style="text-align: center">
                        {{$tours->render()}}
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop












