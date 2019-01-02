@extends('admin.main')
@section('content')
        <!-- end START BREADCRUMB -->
{!! Form:: model($main,array('method' => 'PUT','action' => ['MainController@update'], 'files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message">
</div><!-- div to display message after insert -->

<div class="card card-transparent">
    <div class="card-content">
        <span class="card-title">Main Pages</span>
    </div>
</div>
<div class="row">


    {{--======================aboutus=================--}}
    <div class="file-field col s6">
        <div class="btn teal lighten-1">
            <span>Background Image</span>
            {!!Form::file('aboutusbg', null,array('id'=>'photo'))!!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Background Image">
        </div>
        <label class="error">{{ $errors->first('aboutusbg') }}</label>
    </div>
    <div class="file-field col s6">
        <div class="btn teal lighten-1">
            <span>About Us Image</span>
            {!!Form::file('aboutusimage', null,array('id'=>'photo'))!!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="About Us Image">
        </div>
        <label class="error">{{ $errors->first('aboutusimage') }}</label>
    </div>


    {{--======================category=================--}}


    <div class="file-field col s12">
        <div class="btn teal lighten-1">
            <span> Category Background</span>
            {!!Form::file('categorybg', null,array('id'=>'categorybg'))!!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="category bgackround">
        </div>
        <label class="error">{{ $errors->first('categorybg') }}</label>
    </div>

    {{--======================services=================--}}

    <div class="file-field col s12">
        <div class="btn teal lighten-1">
            <span> Service Background</span>
            {!!Form::file('blogbg', null,array('id'=>'blogbg'))!!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="blog bgackround">
        </div>
        <label class="error">{{ $errors->first('blogbg') }}</label>
    </div>


    {{--======================contact=================--}}


    <div class="file-field col s12">
        <div class="btn teal lighten-1">
            <span> Contact Background</span>
            {!!Form::file('contactbg', null,array('id'=>'contactbg'))!!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="contact bgackround">
        </div>
        <label class="error">{{ $errors->first('contactbg') }}</label>
    </div>

    {{--======================gallery=================--}}


    <div class="file-field col s12">
        <div class="btn teal lighten-1">
            <span> Gallery Background</span>
            {!!Form::file('gallerybg', null,array('id'=>'gallerybg'))!!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="gallery bgackround">
        </div>
        <label class="error">{{ $errors->first('gallerybg') }}</label>
    </div>

    {{--===============================================================--}}
    <div class="col s12 16">
        <ul class="tabs tab-demo z-depth-1" style="width: 100%;">
            <li class="tab col s3"><a href="#test1" class="active">About Us Page</a></li>
            <li class="tab col s3"><a class="" href="#test2">About Us Arabic</a></li>
            {{--<li class="tab col s3"><a class="" href="#test3">Membership  Types</a></li>--}}
            {{--<li class="tab col s3"><a class="" href="#test4">Membership  Benefits</a></li>--}}
        </ul>
    </div>


    <div id="test1" class="col s12">

        {{--=========================Welocome Message================--}}

        <div class="input-field col s12">
            <label for="aboutuswelcome_fr" class="active">Welocome Message French</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswelcome_fr', null,array('class'=>'materialize-textarea','id'=>'aboutuswelcome_fr'))!!}
                <label class="error">{{ $errors->first('aboutuswelcome_fr') }}</label>
            </div>
        </div>


        <div class="input-field col s12">
            <label for="aboutuswelcome_it" class="active">Welocome Message Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswelcome_it', null,array('class'=>'materialize-textarea','id'=>'aboutuswelcome_it'))!!}
                <label class="error">{{ $errors->first('aboutuswelcome_it') }}</label>
            </div>
        </div>
        <div class="input-field col s12">
            <label for="aboutuswelcome_en" class="active">Welocome Message  English</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswelcome_en', null,array('class'=>'materialize-textarea','id'=>'aboutuswelcome_en'))!!}
                <label class="error">{{ $errors->first('aboutuswelcome_en') }}</label>
            </div>
        </div>


        {{--============================About Us Top Description=================================--}}


        <div class="input-field col s12">
            <label for="aboutus_desc_en" class="active">About Us Top Description English</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutus_desc_en', null,array('class'=>'materialize-textarea','id'=>'aboutus_desc_en'))!!}
                <label class="error">{{ $errors->first('aboutus_desc_en') }}</label>
            </div>
        </div>


        <div class="input-field col s12">
            <label for="aboutus_desc_fr" class="active">About Us Top Description French </label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutus_desc_fr', null,array('class'=>'materialize-textarea','id'=>'aboutus_desc_fr'))!!}
                <label class="error">{{ $errors->first('aboutus_desc_fr') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="aboutus_desc_it" class="active">About Us Top Description Itlian </label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutus_desc_it', null,array('class'=>'materialize-textarea','id'=>'aboutus_desc_it'))!!}
                <label class="error">{{ $errors->first('aboutus_desc_it') }}</label>
            </div>
        </div>


        {{--============================Top Description=============--}}


        <div class="input-field col s12">
            <label for="aboutus_en" class="active">Top Description English</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutus_en', null,array('class'=>'materialize-textarea','id'=>'aboutus_en'))!!}
                <label class="error">{{ $errors->first('aboutus_en') }}</label>
            </div>
        </div>


        <div class="input-field col s12">
            <label for="aboutus_fr" class="active">Top Description French</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutus_fr', null,array('class'=>'materialize-textarea','id'=>'aboutus_fr'))!!}
                <label class="error">{{ $errors->first('aboutus_fr') }}</label>
            </div>
        </div>


        <div class="input-field col s12">
            <label for="aboutus_it" class="active">Top Description Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutus_it', null,array('class'=>'materialize-textarea','id'=>'aboutus_it'))!!}
                <label class="error">{{ $errors->first('aboutus_it') }}</label>
            </div>
        </div>

        {{--=====================Footer Description=========================--}}


        <div class="input-field col s12">
            <label for="footerdescription_en" class="active">Footer Description English</label>
            <div class="input-field col s12">
                {!!Form::textarea('footerdescription_en', null,array('class'=>'materialize-textarea','id'=>'footerdescription_en'))!!}
                <label class="error">{{ $errors->first('footerdescription_en') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="footerdescription_fr" class="active">Footer Description French</label>
            <div class="input-field col s12">
                {!!Form::textarea('footerdescription_fr', null,array('class'=>'materialize-textarea','id'=>'footerdescription_fr'))!!}
                <label class="error">{{ $errors->first('footerdescription_fr') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="footerdescription_it" class="active">Footer Description Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('footerdescription_it', null,array('class'=>'materialize-textarea','id'=>'footerdescription_it'))!!}
                <label class="error">{{ $errors->first('footerdescription_it') }}</label>
            </div>
        </div>

        {{--=====================Who We Are=========================--}}

        <div class="input-field col s12">
            <label for="aboutuswho" class="active">Who We Are English</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswho_en', null,array('class'=>'materialize-textarea ckeditor ','id'=>'aboutuswho_en'))!!}
                <label class="error">{{ $errors->first('aboutuswho_en') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="aboutuswho_fr" class="active">Who We Are French</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswho_fr', null,array('class'=>'materialize-textarea ckeditor ','id'=>'aboutuswho_fr'))!!}
                <label class="error">{{ $errors->first('aboutuswho_fr') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="aboutuswho_it" class="active">Who We Are Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswho_it', null,array('class'=>'materialize-textarea ckeditor ','id'=>'aboutuswho_it'))!!}
                <label class="error">{{ $errors->first('aboutuswho_it') }}</label>
            </div>
        </div>
        {{--==============================What We Do==================--}}


        <div class="input-field col s12">
            <label for="aboutuswhat_en" class="active">What We Do English</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswhat_en', null,array('class'=>'materialize-textarea ckeditor' ,'id'=>'aboutuswhat_en'))!!}
                <label class="error">{{ $errors->first('aboutuswhat_en') }}</label>
            </div>
        </div>


        <div class="input-field col s12">
            <label for="aboutuswhat_fr" class="active">What We Do French</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswhat_fr', null,array('class'=>'materialize-textarea ckeditor' ,'id'=>'aboutuswhat_fr'))!!}
                <label class="error">{{ $errors->first('aboutuswhat_fr') }}</label>
            </div>
        </div>


        <div class="input-field col s12">
            <label for="aboutuswhat_it" class="active">What We Do Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('aboutuswhat_it', null,array('class'=>'materialize-textarea ckeditor' ,'id'=>'aboutuswhat_it'))!!}
                <label class="error">{{ $errors->first('aboutuswhat_it') }}</label>
            </div>
        </div>



        {{--////////////////////////////////////category/////////////////////////////////////////////////////////////////--}}

        <div class="input-field col s12">
            <label for="aboutus" class="active">category backgroun title English</label>
            <div class="input-field col s12">
                {!!Form::textarea('cat_bg_title_en', null,array('class'=>'materialize-textarea','id'=>'cat_bg_title_en'))!!}
                <label class="error">{{ $errors->first('cat_bg_title_en') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="aboutus" class="active">category backgroun title French</label>
            <div class="input-field col s12">
                {!!Form::textarea('cat_bg_title_fr', null,array('class'=>'materialize-textarea','id'=>'cat_bg_title_fr'))!!}
                <label class="error">{{ $errors->first('cat_bg_title_fr') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="cat_bg_title_it" class="active">category backgroun title Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('cat_bg_title_it', null,array('class'=>'materialize-textarea','id'=>'cat_bg_title_it'))!!}
                <label class="error">{{ $errors->first('cat_bg_title_it') }}</label>
            </div>
        </div>



        {{---------------------category backgroun description---------------}}

        <div class="input-field col s12">
            <label for="cat_bg_desc_en" class="active">category backgroun description ENGLISH</label>
            <div class="input-field col s12">
                {!!Form::textarea('cat_bg_desc_en', null,array('class'=>'materialize-textarea','id'=>'cat_bg_desc_en'))!!}
                <label class="error">{{ $errors->first('cat_bg_desc_en') }}</label>
            </div>
        </div>


        <div class="input-field col s12">
            <label for="cat_bg_desc_it" class="active">category backgroun description Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('cat_bg_desc_it', null,array('class'=>'materialize-textarea','id'=>'cat_bg_desc_it'))!!}
                <label class="error">{{ $errors->first('cat_bg_desc_it') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="cat_bg_desc_fr" class="active">category backgroun description French</label>
            <div class="input-field col s12">
                {!!Form::textarea('cat_bg_desc_fr', null,array('class'=>'materialize-textarea','id'=>'cat_bg_desc_fr'))!!}
                <label class="error">{{ $errors->first('cat_bg_desc_fr') }}</label>
            </div>
        </div>


        {{--//////////////////////////////////////////////////////////////////////////////////////blogs///////////////--}}


        <div class="input-field col s12">
            <label for="blog_title_en" class="active">blog backgroun title English</label>
            <div class="input-field col s12">
                {!!Form::textarea('blog_title_en', null,array('class'=>'materialize-textarea','id'=>'blog_title_en'))!!}
                <label class="error">{{ $errors->first('blog_title_en') }}</label>
            </div>
        </div>

        <div class="input-field col s12">
            <label for="blog_title_fr" class="active">blog backgroun title French</label>
            <div class="input-field col s12">
                {!!Form::textarea('blog_title_fr', null,array('class'=>'materialize-textarea','id'=>'blog_title_fr'))!!}
                <label class="error">{{ $errors->first('blog_title_fr') }}</label>
            </div>
        </div>
        <div class="input-field col s12">
            <label for="blog_title_it" class="active">blog backgroun title Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('blog_title_it', null,array('class'=>'materialize-textarea','id'=>'blog_title_it'))!!}
                <label class="error">{{ $errors->first('blog_title_it') }}</label>
            </div>
        </div>





        {{---------------------------------------}}



        <div class="input-field col s12">
            <label for="blog_desc_en" class="active">blog backgroun description English</label>
            <div class="input-field col s12">
                {!!Form::textarea('blog_desc_en', null,array('class'=>'materialize-textarea','id'=>'blog_desc_en'))!!}
                <label class="error">{{ $errors->first('blog_desc_en') }}</label>
            </div>
        </div>



        <div class="input-field col s12">
            <label for="blog_desc_fr" class="active">blog backgroun description French</label>
            <div class="input-field col s12">
                {!!Form::textarea('blog_desc_fr', null,array('class'=>'materialize-textarea','id'=>'blog_desc_fr'))!!}
                <label class="error">{{ $errors->first('blog_desc_fr') }}</label>
            </div>
        </div>


        <div class="input-field col s12">
            <label for="blog_desc_it" class="active">blog backgroun description Itlian</label>
            <div class="input-field col s12">
                {!!Form::textarea('blog_desc_it', null,array('class'=>'materialize-textarea','id'=>'blog_desc_it'))!!}
                <label class="error">{{ $errors->first('blog_desc_it') }}</label>
            </div>
        </div>

    </div>

    {{--////////////////////////////////////////////////////////////////contact///////////////////////////////////////////--}}


    <div class="input-field col s12">
        <label for="contactus" class="active">contact backgroun description English</label>
        <div class="input-field col s12">
            {!!Form::textarea('contactus', null,array('class'=>'materialize-textarea','id'=>'contactus'))!!}
            <label class="error">{{ $errors->first('contactus') }}</label>
        </div>
    </div>

    <div class="input-field col s12">
        <label for="contactus_fr" class="active">contact backgroun description french</label>
        <div class="input-field col s12">
            {!!Form::textarea('contactus_fr', null,array('class'=>'materialize-textarea','id'=>'contactus_fr'))!!}
            <label class="error">{{ $errors->first('contactus_fr') }}</label>
        </div>
    </div>



    <div class="input-field col s12">
        <label for="contactus_it" class="active">contact backgroun description itlian</label>
        <div class="input-field col s12">
            {!!Form::textarea('contactus_it', null,array('class'=>'materialize-textarea','id'=>'contactus_it'))!!}
            <label class="error">{{ $errors->first('contactus_it') }}</label>
        </div>
    </div>
{{--=================--}}


    <div class="input-field col s12">
        <label for="contact_bg_title_en" class="active">contact backgroun title English</label>
        <div class="input-field col s12">
            {!!Form::text('contact_bg_title_en', null,array('class'=>'materialize-textarea','id'=>'contact_bg_title_en'))!!}
            <label class="error">{{ $errors->first('contact_bg_title_en') }}</label>
        </div>
    </div>


    <div class="input-field col s12">
        <label for="contact_bg_title_fr" class="active">contact backgroun title French</label>
        <div class="input-field col s12">
            {!!Form::text('contact_bg_title_fr', null,array('class'=>'materialize-textarea','id'=>'contact_bg_title_fr'))!!}
            <label class="error">{{ $errors->first('contact_bg_title_fr') }}</label>
        </div>
    </div>


    <div class="input-field col s12">
        <label for="contact_bg_title_it" class="active">contact backgroun title Itlian</label>
        <div class="input-field col s12">
            {!!Form::text('contact_bg_title_it', null,array('class'=>'materialize-textarea','id'=>'contact_bg_title_it'))!!}
            <label class="error">{{ $errors->first('contact_bg_title_it') }}</label>
        </div>
    </div>


    {{--/////////////////////////////////////////////////////////////////gallery////////////////////////////////////////////////--}}


    <div class="input-field col s12">
        <label for="gallery_title_en" class="active">Gallery backgroun title English</label>
        <div class="input-field col s12">
            {!!Form::text('gallery_title_en', null,array('class'=>'materialize-textarea','id'=>'gallery_title_en'))!!}
            <label class="error">{{ $errors->first('gallery_title_en') }}</label>
        </div>
    </div>

    <div class="input-field col s12">
        <label for="gallery_title_fr" class="active">Gallery backgroun title French</label>
        <div class="input-field col s12">
            {!!Form::text('gallery_title_fr', null,array('class'=>'materialize-textarea','id'=>'gallery_title_fr'))!!}
            <label class="error">{{ $errors->first('gallery_title_fr') }}</label>
        </div>
    </div>

    <div class="input-field col s12">
        <label for="gallery_title_it" class="active">Gallery backgroun title Itlian</label>
        <div class="input-field col s12">
            {!!Form::text('gallery_title_it', null,array('class'=>'materialize-textarea','id'=>'gallery_title_it'))!!}
            <label class="error">{{ $errors->first('gallery_title_it') }}</label>
        </div>
    </div>



</div>

{{--===========================Arabic========================--}}
<div id="test2" class="col s12">


    <div class="input-field col s12">
        <label for="aboutuswelcome_ar" class="active">Welocome Message Arabic</label>
        <div class="input-field col s12">
            {!!Form::textarea('aboutuswelcome_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'aboutuswelcome_ar'))!!}
            <label class="error">{{ $errors->first('aboutuswelcome_ar') }}</label>
        </div>
    </div>

    <div class="input-field col s12">
        <label for="aboutus_desc_ar" class="active"> Aboutus Top Description Arabic</label>
        <div class="input-field col s12">
            {!!Form::textarea('aboutus_desc_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'aboutus_desc_ar'))!!}
            <label class="error">{{ $errors->first('aboutus_desc_ar') }}</label>
        </div>
    </div>

    <div class="input-field col s12">
        <label for="aboutus_ar" class="active">Top Description Arabic</label>
        <div class="input-field col s12">
            {!!Form::textarea('aboutus_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'aboutus_ar'))!!}
            <label class="error">{{ $errors->first('aboutus_ar') }}</label>
        </div>
    </div>

    <div class="input-field col s12">
        <label for="footerdescription_ar" class="active">Footer Description Arabic</label>
        <div class="input-field col s12">
            {!!Form::textarea('footerdescription_ar', null,array('class'=>'materialize-textarea','id'=>'footerdescription_ar'))!!}
            <label class="error">{{ $errors->first('footerdescription_ar') }}</label>
        </div>
    </div>


    <div class="input-field col s12">
        <label for="aboutus" class="active">Who We Are Arabic</label>
        <div class="input-field col s12">
            {!!Form::textarea('aboutuswho_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'aboutuswho_ar'))!!}
            <label class="error">{{ $errors->first('aboutuswho_ar') }}</label>
        </div>


    </div>
    <div class="input-field col s12">
        <label for="aboutuswhat_ar" class="active">What We Do Arabic</label>
        <div class="input-field col s12">
            {!!Form::textarea('aboutuswhat_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'aboutuswhat_ar'))!!}
            <label class="error">{{ $errors->first('aboutuswhat_ar') }}</label>
        </div>
    </div>


    <div class="input-field col s12">
        <label for="cat_bg_title_ar" class="active">category backgroun title Arabic </label>
        <div class="input-field col s12">
            {!!Form::textarea('cat_bg_title_ar', null,array('class'=>'materialize-textarea','id'=>'cat_bg_title_ar'))!!}
            <label class="error">{{ $errors->first('cat_bg_title_ar') }}</label>
        </div>
    </div>










    <div class="input-field col s12">
        <label for="cat_bg_desc_ar" class="active">category backgroun description Arabic </label>
        <div class="input-field col s12">
            {!!Form::textarea('cat_bg_desc_ar', null,array('class'=>'materialize-textarea','id'=>'cat_bg_desc_ar'))!!}
            <label class="error">{{ $errors->first('cat_bg_desc_ar') }}</label>
        </div>
    </div>


    <div class="input-field col s12">
        <label for="blog_desc_ar" class="active">blog backgroun description Arabic </label>
        <div class="input-field col s12">
            {!!Form::textarea('blog_desc_ar', null,array('class'=>'materialize-textarea','id'=>'blog_desc_ar'))!!}
            <label class="error">{{ $errors->first('blog_desc_ar') }}</label>
        </div>
    </div>



    <div class="input-field col s12">
        <label for="blog_title_ar" class="active">blog backgroun title Arabic </label>
        <div class="input-field col s12">
            {!!Form::text('blog_title_ar', null,array('class'=>'materialize-textarea','id'=>'blog_title_ar'))!!}
            <label class="error">{{ $errors->first('blog_title_ar') }}</label>
        </div>
    </div>



    <div class="input-field col s12">
        <label for="gallery_title_ar" class="active">Gallery backgroun title Arabic </label>
        <div class="input-field col s12">
            {!!Form::text('gallery_title_ar', null,array('class'=>'materialize-textarea','id'=>'gallery_title_ar'))!!}
            <label class="error">{{ $errors->first('gallery_title_ar') }}</label>
        </div>
    </div>



    <div class="input-field col s12">
        <label for="contact_bg_title_ar" class="active">contact backgroun title Arabic </label>
        <div class="input-field col s12">
            {!!Form::textarea('contact_bg_title_ar', null,array('class'=>'materialize-textarea','id'=>'contact_bg_title_ar'))!!}
            <label class="error">{{ $errors->first('contact_bg_title_ar') }}</label>
        </div>
    </div>

</div>

</div>


@include('admin.layouts.map_settings_edit')


<div class="panel-footer">
    {!! Form::submit('edit', array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
</div>
{!! Form::close() !!}


<script>
    CKEDITOR.replace('aboutus', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>
<script>
    CKEDITOR.replace('aboutus_ar', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>
<script>
    CKEDITOR.replace('aboutuswelcome', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });

</script>
<script>
    CKEDITOR.replace('aboutuswelcome_ar', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });

</script>
<script>
    CKEDITOR.replace('bottomdescription', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>
<script>
    CKEDITOR.replace('bottomdescription_ar', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>
<script>
    CKEDITOR.replace('aboutuswhat', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });

</script>
<script>
    CKEDITOR.replace('aboutuswhat_ar', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });

</script>
<script>
    CKEDITOR.replace('aboutuswho', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>
<script>
    CKEDITOR.replace('aboutuswho_ar', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>


<script>
    CKEDITOR.replace('aboutus_desc', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>

<!-- END BREADCRUMB -->


@stop
