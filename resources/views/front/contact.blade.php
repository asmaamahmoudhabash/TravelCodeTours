@extends('front/main')
@section('meta')


    <meta name="description" content="{{$mains->meta_description_en}}">
    <meta name="keywords" content="{{$mains-> meta_keyword_en}}">
    <meta name="title" content="{{$mains->meta_title_en }}">

@stop

@section('content')

    @inject('category','App\Category')
    <?php
    $categories = $category->take(3)->get();
    $lang = Config::get('app.locale');

    ?>





    <div class="inner-banner style-6">


        <img class="center-image"
             src="@if($mains->contactbg !=null){{url('admin-assets/images/photo/'.$mains->contactbg)}}@else{{asset('siteassets/frontend/img/inner/bg_3.jpg')}}@endif"
             alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-blue-2" href="{{url('/')}}">{{trans('main.Home')}}</a> /</li>
                            {{--<li><a class="link-blue-2" href="">{{trans('main.pages')}}</a> /</li>--}}
                            <li><span>{{trans('main.contact')}}</span></li>
                        </ul>
                        <h2 class="color-white">{{$mains->contact_bg_title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="detail-wrapper">
        <!-- CONTACT-FORM -->
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
                                    <input name="first_name" type="text" required=""
                                           placeholder="{{trans('main.first_name')}}">
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-6">
                                <div class="input-style-1 type-2 color-2">
                                    <input name="last_name" type="text" required=""
                                           placeholder="{{trans('main.last_name')}} ">
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-6">
                                <div class="input-style-1 type-2 color-2">
                                    <input name="email" type="text" required=""
                                           placeholder="{{trans('main.your_email')}}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="drop-wrap drop-wrap-s-3 color-2">
                                    <div class="drop">

                                        <select name="cat_id" id="">
                                            <option value="">{{trans('main.department')}}</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">
                                                    <?php $name = 'name_' . $lang ?>
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


                        {{--form end here--}}

                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="contact-about">
                            <h4 class="color-dark-2"><strong>{{trans('main.About_us')}}</strong></h4>
                            <p class="color-grey-3">
                                <?php $about = 'aboutus_' . $lang ?>
                                {!! $mains->$about!!}
                            </p>
                        </div>
                        <div class="contact-info">
                            <h4 class="color-dark-2"><strong>{{trans('main.Contact_Info')}}</strong></h4>
                            <div class="contact-line color-grey-3"><img
                                        src="{{asset('siteassets/frontend/img/phone_icon_2_dark.png')}}"
                                        alt="">{{trans('main.phone')}}: <a
                                        class="color-dark-2" href="tel:93123456789">{{$mains->phone}}</a></div>
                            <div class="contact-line color-grey-3"><img
                                        src="{{asset('siteassets/frontend/img/mail_icon_b_dark.png')}}"
                                        alt="">{{trans('main.email')}}: <a
                                        class="color-dark-2 tt" href="#">{{$mains->email}}</a></div>
                            <div class="contact-line color-grey-3"><img
                                        src="{{asset('siteassets/frontend/img/loc_icon_dark.png')}}"
                                        alt="">{{trans('main.address')}}: <span
                                        class="color-dark-2 tt">
                                 <?php $address = 'address_' . $lang ?>
                                    {{$mains->$address}}
                            </span></div>
                        </div>

                        <div class="contact-socail">
                            <a class="color-grey-3 link-dr-blue-2" href="{{$mains->fb}}"><i
                                        class="fa fa-facebook"></i></a>
                            <a class="color-grey-3 link-dr-blue-2" href="{{$mains->tw}}"><i
                                        class="fa fa-twitter"></i></a>
                            <a class="color-grey-3 link-dr-blue-2" href="{{$mains->skype}}"><i
                                        class="fa fa-skype"></i></a>
                            <a class="color-grey-3 link-dr-blue-2" href="{{$mains->gp}}"><i
                                        class="fa fa-google-plus"></i></a>
                            <a class="color-grey-3 link-dr-blue-2" href="{{$mains->pin}}"><i
                                        class="fa fa-pinterest-p"></i></a>
                            <a class="color-grey-3 link-dr-blue-2" href="{{$mains->ins}}"><i
                                        class="fa fa-instagram"></i></a>
                            <a class="color-grey-3 link-dr-blue-2" href="{{$mains->be}}"><i
                                        class="fa fa-behance"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

    <!-- MAP BLOCK -->
    <div class="map-block">
        <div id="map-canvas" class="style-2" data-lat="{{$mains->lat}}" data-lng="{{$mains->lon}}" data-zoom="10"
             data-style="2"></div>
        <div class="addresses-block">
            <a data-lat="{{$mains->lat}}" data-lng="{{$mains->lon}}" data-string="Santa Monica Hotel"></a>
        </div>
    </div>
@stop
