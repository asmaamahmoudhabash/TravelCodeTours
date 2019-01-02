


@inject('user','App\User')
<?php
        $users=$user->find(1)

        ?>

<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="{{ asset('admin-assets/assets/images/profile-image.png') }}" class="circle" alt="">
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>{{$users->name_en}}</p>
                    <span>{{$users->email}}<i class="material-icons right">arrow_drop_down</i></span>
                </a>
            </div>
        </div>
        <div class="sidebar-account-settings">
            <ul>
                <li class="no-padding">
                    <a class="waves-effect waves-grey" href="{{ url('controll/contact_us')}}"><i class="material-icons">mail_outline</i>All Messages </a>
                </li>
                <li class="no-padding">
                </li>


                <li class="no-padding">
                    <a class="waves-effect waves-grey" href="{{url('controll/users/'.$users->id.'/edit')}}"><i class="material-icons">account_circle</i>My Profile</a>
                </li>
                <li class="divider"></li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey" href="{{ url('logout')}}"><i class="material-icons">exit_to_app</i>Sign Out</a>
                </li>
            </ul>
        </div>
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
            <li class="no-padding active"><a class="waves-effect waves-grey active" href="{{ url('/controll/dashboard') }}"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">supervisor_account</i>Users<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('controll/users')}}">Show All</a></li>
                        <li><a href="{{ url('controll/users/create')}}">Add User</a></li>

                    </ul>
                </div>
            </li>
            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/sliders') }}"><i class="material-icons">perm_media</i>Slider</a></li>
            {{-- <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/photoes') }}"><i class="material-icons">perm_media</i>Product Photoes</a></li> --}}

            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/clients') }}"><i class="material-icons">import_contacts</i>Clients</a></li>--}}
            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/continentals') }}"><i class="material-icons">place</i>Continents</a></li>
{{--            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/tours') }}"><i class="material-icons">airplanemode_active</i>Tour</a></li>--}}
            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/testimonials') }}"><i class="material-icons">sms</i>Testimonials</a></li>--}}
            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/services') }}"><i class="material-icons">star</i>Services</a></li>--}}
            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/news') }}"><i class="material-icons">wallpaper</i>Blogs</a></li>
{{--            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/categories') }}"><i class="material-icons">format_align_justify</i>Categories</a></li>--}}
            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/tags') }}"><i class="material-icons">apps</i>Tags</a></li>
            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/ads') }}"><i class="material-icons">filter_none</i>Ads</a></li>
            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/gallery') }}"><i class="material-icons">perm_media</i>Gallery</a></li>--}}


            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">airplanemode_active</i>Tour<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('controll/tours') }}">Tours</a></li>

                        <li><a href="{{ url('controll/categories') }}">category</a></li>


                    </ul>
                </div>
            </li>



            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">perm_media</i>Gallery<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('controll/gallery') }}">Gallery</a></li>


                        <li><a href="{{ url('controll/tabs') }}">Tabs</a></li>

                    </ul>
                </div>
            </li>

            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/tabs') }}"><i class="material-icons">bookmark</i>Tabs</a></li>--}}

            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/services') }}"><i class="material-icons">star</i>services</a></li>

            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/teams') }}"><i class="material-icons">supervisor_account</i>Teams</a></li>
            <li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/contact_us') }}"><i class="material-icons">contact_mail</i>Contact Us</a></li>





            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">settings</i>Settings<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('controll/settings')}}">Main Settings</a></li>


                        <li><a href="{{ url('controll/main-pages')}}">Main Pages</a></li>

                    </ul>
                </div>
            </li>


            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/projects') }}"><i class="material-icons">work</i>Projects</a></li>--}}

            {{--<li class="no-padding">--}}
                {{--<a class="collapsible-header waves-effect waves-grey"><i class="material-icons">settings</i>Settings<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>--}}
                {{--<div class="collapsible-body">--}}
                    {{--<ul>--}}
                        {{--<li><a href="{{ url('controll/settings')}}">Main Settings</a></li>--}}
                        {{--<li><a href="{{ url('controll/featured-products')}}">Featured Products</a></li>--}}
                        {{--<li><a href="{{ url('controll/custom/settings')}}">Custom Settings</a></li>--}}
                        {{--<li><a href="{{ url('controll/main-pages')}}">Main Pages</a></li>--}}
                        {{--<li><a href="{{ url('controll/aboutgallery')}}">About Us Gallery</a></li>--}}
                        {{--<li><a href="{{ url('controll/infogallery')}}">Information Gallery</a></li>--}}
                        {{--<li><a href="{{ url('controll/features')}}">Features in About Us</a></li>--}}
                        {{--<li><a href="{{ url('controll/pages')}}">Custom Pages</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="no-padding">--}}
                {{--<a class="collapsible-header waves-effect waves-grey"><i class="material-icons">flip_to_back</i>Careers<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>--}}
                {{--<div class="collapsible-body">--}}
                    {{--<ul>--}}
                        {{--<li><a href="{{ url('controll/careers') }}">Careers</a></li>--}}
                        {{--<li><a href="{{ url('controll/applications')}}">Applications</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/messages') }}"><i class="material-icons">email</i>Messages </a></li>--}}
            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{ url('controll/aboutHome') }}"><i class="material-icons">star</i>About Home </a></li>--}}
            {{--<li class="no-padding "><a class="waves-effect waves-grey" href="{{url('controll/subscribers')}}"><i class="material-icons">star</i>Subscribers </a></li>--}}


        </ul>

    </div>
</aside>