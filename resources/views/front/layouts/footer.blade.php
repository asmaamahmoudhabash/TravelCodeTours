@inject('new','App\News')
@inject('tag','App\Tag')
@inject('main','App\Main')



<?php
$lang=Config::get('app.locale');

$news = $new->latest()->take(3)->get();
$tags = $tag->take(10)->get();
$mains = $main->find(1);





?>


<footer class="bg-dark type-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <img src="{{url('admin-assets/images/photo/'.$mains->footerlogo)}}" alt="" class="logo-footer">
                    <div class="f_text color-grey-7">

                        <?php $footerdescription='footerdescription_'.$lang ?>
                        {{$mains->$footerdescription }}
                    </div>



                    <div class="footer-share">
                        <a href="{{$mains->fb}}"><span class="fa fa-facebook"></span></a>
                        <a href="{{$mains->tw}}"><span class="fa fa-twitter"></span></a>
                        <a href="{{$mains->gb}}"><span class="fa fa-google-plus"></span></a>
                        <a href="{{$mains->pin}}"><span class="fa fa-pinterest"></span></a>
                    </div>
                </div>
            </div>
            {{--news starts here--}}


            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
                <div class="footer-block">
                    <h6>{{trans('main.Travel_News')}}</h6>

                    @foreach($news as $new)
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="#">
                                <img class="img-responsive" src="{{url('admin-assets/images/news/'.$new->image)}}"
                                     alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="#">
                                    <?php $title='title_'.$lang ?>
                                    {{$new->$title}}


                                </a>
                                <span class="date-f">{{date("F j,Y ",strtotime($new->created_at))}}</span>
                                <a href="{{url('blog/'.$new->slug)}}" class="r-more">{{ trans('main.read_more') }}</a>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>


            {{--news ends here--}}


            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                <div class="footer-block">
                    <h6>{{ trans('main.Tags') }}</h6>
                    @foreach($tags as $tag)

                        <a href="" class="tags-b">
                            <?php $name='name_'.$lang ?>
                            {{$tag->$name}}


                        </a>
                    @endforeach
                </div>

            </div>


            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h6>{{ trans('main.Contact_Info') }}

                        </h6>
                    <div class="contact-info">
                        <div class="contact-line color-grey-3"><i
                                    class="fa fa-map-marker"></i><span>
                                <?php $address='address_'.$lang ?>
                                    {{$mains->$address}}

                            </span>
                        </div>
                        <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a
                                    href="tel:93123456789">{{$mains->phone}}</a></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a
                                    href="mailto:">{{$mains->mail_to}}</a></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a
                                    href="#">{{$mains->email}}</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-link bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">

                        <span>{{trans('main.print')}}</span>
                    </div>
                    <ul>
                        <li><a class="link-aqua" href="{{url('/')}}"> {{trans('main.Home')}}</a></li>
                        <li><a class="link-aqua" href="{{url('gallery')}}"> {{trans('main.Gallery')}}</a></li>
                        <li><a class="link-aqua" href="{{url('blog')}}"> {{trans('main.Blog')}}</a></li>
                        <li><a class="link-aqua" href="{{url('about_us')}}"> {{trans('main.About_us')}}</a></li>
                        <li><a class="link-aqua" href="{{url('contact_us')}}">{{trans('main.Contact_Us')}}</a></li>
                        <li><a class="link-aqua" href="{{url('booking')}}"> {{trans('main.Booking_Now')}}</a></li>




                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('siteassets/frontend/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/idangerous.swiper.min.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/jquery.viewportchecker.min.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/jquery.circliful.min.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/magnific.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCmT97qMPjKdidWGuTUr8c9KC2l4sVUcNs&amp;language=en"></script>
<script src="{{asset('siteassets/frontend/js/map.js')}}"></script>
<script src="{{asset('siteassets/frontend/js/all.js')}}"></script>
</body>
</html>