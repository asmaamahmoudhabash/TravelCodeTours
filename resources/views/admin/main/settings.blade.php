@extends('admin.main')
@section('content')
        <!-- end START BREADCRUMB -->
{!! Form:: model($main,array('method' => 'PUT','action' => ['MainController@update'], 'files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message">
</div><!-- div to display message after insert -->

<div class="card card-transparent">
    <div class="card-content">
        <span class="card-title">Main Settings</span>
    </div>
</div>
<div class="row">
    <div class="col s12 16">
        <ul class="tabs tab-demo z-depth-1" style="width: 100%;">
            <li class="tab col s3"><a href="#test1" class="active">Logo</a></li>
            <li class="tab col s3"><a class="" href="#test2">Social & Contact Info</a></li>
            <li class="tab col s3"><a class="" href="#test3">Meta Data</a></li>
            <!--<li class="tab col s3"><a class="" href="#test4">Statistics</a></li>-->
        </ul>
    </div>
    <br>


    {{--===================================Header Logo=====================--}}
    <div id="test1" class="col s12">


        <div class="file-field col s12">
            <div class="btn teal lighten-1">
                <span> Header Logo English</span>
                {!!Form::file('headerlogo', null,array('id'=>'headerlogo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="header logo English">
            </div>
            <label class="error">{{ $errors->first('headerlogo') }}</label>
        </div>


        {{--<div class="file-field col s12">--}}
        {{--<div class="btn teal lighten-1">--}}
        {{--<span> Header Logo Arabic</span>--}}
        {{--{!!Form::file('headerlogoar', null,array('id'=>'headerlogoar'))!!}--}}
        {{--</div>--}}
        {{--<div class="file-path-wrapper">--}}
        {{--<input class="file-path validate" type="text" placeholder="header logo arabic">--}}
        {{--</div>--}}
        {{--<label class="error">{{ $errors->first('headerlogoar') }}</label>--}}
        {{--</div>--}}


        {{--<div class="file-field col s12">--}}
        {{--<div class="btn teal lighten-1">--}}
        {{--<span> Header Logo Itlian</span>--}}
        {{--{!!Form::file('headerlogoit', null,array('id'=>'headerlogoit'))!!}--}}
        {{--</div>--}}
        {{--<div class="file-path-wrapper">--}}
        {{--<input class="file-path validate" type="text" placeholder="header logo Itlian">--}}
        {{--</div>--}}
        {{--<label class="error">{{ $errors->first('headerlogoit') }}</label>--}}
        {{--</div>--}}


        {{--<div class="file-field col s12">--}}
        {{--<div class="btn teal lighten-1">--}}
        {{--<span> Header Logo French</span>--}}
        {{--{!!Form::file('headerlogofr', null,array('id'=>'headerlogofr'))!!}--}}
        {{--</div>--}}
        {{--<div class="file-path-wrapper">--}}
        {{--<input class="file-path validate" type="text" placeholder="header logo french">--}}
        {{--</div>--}}
        {{--<label class="error">{{ $errors->first('headerlogofr') }}</label>--}}
        {{--</div>--}}
        {{--=================FOOter logo==========================================--}}


        <div class="file-field col s12">
            <div class="btn teal lighten-1">
                <span>FOOter logo</span>
                {!!Form::file('footerlogo', null,array('id'=>'footerlogo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="footer logo">
            </div>
            <label class="error">{{ $errors->first('footerlogo') }}</label>
        </div>

        {{--<div class="file-field col s12">--}}
        {{--<div class="btn teal lighten-1">--}}
        {{--<span>FOOter logo  Arabic</span>--}}
        {{--{!!Form::file('footerlogoar', null,array('id'=>'footerlogoar'))!!}--}}
        {{--</div>--}}
        {{--<div class="file-path-wrapper">--}}
        {{--<input class="file-path validate" type="text" placeholder="footer logo Arabic">--}}
        {{--</div>--}}
        {{--<label class="error">{{ $errors->first('footerlogoar') }}</label>--}}
        {{--</div>--}}

        {{--<div class="file-field col s12">--}}
        {{--<div class="btn teal lighten-1">--}}
        {{--<span>FOOter logo French</span>--}}
        {{--{!!Form::file('footerlogofr', null,array('id'=>'footerlogofr'))!!}--}}
        {{--</div>--}}
        {{--<div class="file-path-wrapper">--}}
        {{--<input class="file-path validate" type="text" placeholder="footer logo french">--}}
        {{--</div>--}}
        {{--<label class="error">{{ $errors->first('footerlogofr') }}</label>--}}
        {{--</div>--}}
        {{--<div class="file-field col s12">--}}
        {{--<div class="btn teal lighten-1">--}}
        {{--<span>FOOter logo Itlian</span>--}}
        {{--{!!Form::file('footerlogoit', null,array('id'=>'footerlogoit'))!!}--}}
        {{--</div>--}}
        {{--<div class="file-path-wrapper">--}}
        {{--<input class="file-path validate" type="text" placeholder="footer logo itlian">--}}
        {{--</div>--}}
        {{--<label class="error">{{ $errors->first('footerlogoit') }}</label>--}}
        {{--</div>--}}


        {{--=====================================================--}}


        {{--<div class="input-field col s6">--}}
        {{--{!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}--}}
        {{--<label for="photo_alt">Alt of logo </label>--}}
        {{--<label class="error">{{ $errors->first('photo_alt') }}</label>--}}
        {{--</div>--}}
        {{--<label for="aboutus_desc" class="active">Home Brief</label>--}}

        {{--<div class="input-field col s12">--}}
        {{--{!!Form::textarea('aboutus_desc', null,array('class'=>'materialize-textarea','id'=>'aboutus_desc'))!!}--}}
        {{--<label class="error">{{ $errors->first('aboutus_desc') }}</label>--}}
        {{--</div><br>--}}
        {{--<div class="input-field col s12">--}}
        {{--<label for="aboutus_desc" class="active">Footer Brief</label>--}}
        {{--{!!Form::textarea('footer', null,array('class'=>'materialize-textarea','id'=>'footer'))!!}--}}
        {{--<label class="error">{{ $errors->first('footer') }}</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s12">--}}
        {{--<label for="contactus" class="active">Contact Brief</label>--}}
        {{--{!!Form::textarea('contactus', null,array('class'=>'materialize-textarea','id'=>'contactus'))!!}--}}
        {{--<label class="error">{{ $errors->first('contactus') }}</label>--}}
        {{--</div>--}}
        {{--<label for="services" class="active">Our Services Brief</label><br>
         <div class="input-field col s12">
             {!!Form::textarea('services', null,array('class'=>'validate','id'=>'services','style'=>'margin-top: 20px;'))!!}
             <label class="error">{{ $errors->first('services') }}</label>
         </div><br>
         <label for="services" class="active">Our Services Brief Arabic</label><br>
         <div class="input-field col s12">
             {!!Form::textarea('services_ar', null,array('class'=>'validate','id'=>'services_ar','style'=>'margin-top: 20px;'))!!}
             <label class="error">{{ $errors->first('services_ar') }}</label>
         </div><br>
         <label for="information_desc" class="active">Our Information Brief</label><br>
         <div class="input-field col s12">
             {!!Form::textarea('information_desc', null,array('class'=>'validate','id'=>'information_desc','style'=>'margin-top: 20px;'))!!}
             <label class="error">{{ $errors->first('information_desc') }}</label>
         </div>
         <br>
         <label for="information_desc_ar" class="active">Our Information Brief Arabic</label><br>
         <div class="input-field col s12">
             {!!Form::textarea('information_desc_ar', null,array('class'=>'validate','id'=>'information_desc_ar','style'=>'margin-top: 20px;'))!!}
             <label class="error">{{ $errors->first('information_desc_ar') }}</label>
         </div>--}}


    </div>


    <div id="test2" class="col s12">
        <div class="file-field col s12">
            <div class="btn teal lighten-1">
                <span>Contact Us background</span>
                {!!Form::file('contactbg', null,array('id'=>'photo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Contact Us background">
            </div>
            <label class="error">{{ $errors->first('contactbg') }}</label>
        </div>
        {{--===============================address=====================--}}
        <div class="input-field col s6">
            {!!Form::text('address_en', null,array('class'=>'validate','id'=>'address_en'))!!}
            <label class="active" for="apple">Address English </label>
            <label class="error">{{ $errors->first('address_en') }}</label>
        </div>

        <div class="input-field col s6">
            {!!Form::text('address_ar', null,array('class'=>'validate','id'=>'address_ar'))!!}
            <label class="active" for="apple">Address Arabic</label>
            <label class="error">{{ $errors->first('address_ar') }}</label>
        </div>


        <div class="input-field col s6">
        {!!Form::text('address_fr', null,array('class'=>'validate','id'=>'address_fr'))!!}
        <label class="active" for="apple">Address French</label>
        <label class="error">{{ $errors->first('address_fr') }}</label>
        </div>


        <div class="input-field col s6">
        {!!Form::text('address_it', null,array('class'=>'validate','id'=>'address_it'))!!}
        <label class="active" for="apple">Address Itlian</label>
        <label class="error">{{ $errors->first('address_it') }}</label>
        </div>


        {{--==============================================--}}

        <div class="input-field col s6">
            {!!Form::text('mail_to', null,array('class'=>'validate','id'=>'mail_to'))!!}
            <label class="active" for="mail_to">Mail us </label>
            <label class="error">{{ $errors->first('mail_to') }}</label>
        </div>

        {{--=================map===============--}}

        {{--<div class="input-field col s12">--}}
            {{--{!!Form::text('map', null,array('class'=>'validate','id'=>'phone'))!!}--}}
            {{--<label class="active" for="apple">Google Map </label>--}}
            {{--<label class="error">{{ $errors->first('map') }}</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s12">--}}
        {{--{!!Form::text('map', null,array('class'=>'validate','id'=>'phone'))!!}--}}
        {{--<label class="active" for="apple">Google Map </label>--}}
        {{--<label class="error">{{ $errors->first('map') }}</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s12">--}}
        {{--{!!Form::text('map', null,array('class'=>'validate','id'=>'phone'))!!}--}}
        {{--<label class="active" for="apple">Google Map </label>--}}
        {{--<label class="error">{{ $errors->first('map') }}</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s12">--}}
        {{--{!!Form::text('map', null,array('class'=>'validate','id'=>'phone'))!!}--}}
        {{--<label class="active" for="apple">Google Map </label>--}}
        {{--<label class="error">{{ $errors->first('map') }}</label>--}}
        {{--</div>--}}
        {{--==================================--}}


        <div class="input-field col s6">
            {!!Form::email('email', null,array('class'=>'validate','id'=>'email'))!!}
            <label class="active" for="apple">Email</label>
            <label class="error">{{ $errors->first('email') }}</label>
        </div>
        {{--==========================phone=================--}}
        <div class="input-field col s6">
            {!!Form::text('phone', null,array('class'=>'validate','id'=>'phone'))!!}
            <label class="active" for="apple">Phone </label>
            <label class="error">{{ $errors->first('phone') }}</label>
        </div>


        {{--===============================fax==================--}}
        <div class="input-field col s6">
            {!!Form::text('fax', null,array('class'=>'validate','id'=>'fax'))!!}
            <label class="active" for="apple">Fax </label>
            <label class="error">{{ $errors->first('fax') }}</label>
        </div>


        {{--==========================--}}
        <div class="input-field col s6">
            {!!Form::url('fb', null,array('class'=>'validate','id'=>'fb'))!!}
            <label class="active" for="fb">Facebook</label>
            <label class="error">{{ $errors->first('fb') }}</label>
        </div>

        <div class="input-field col s6">
            {!!Form::url('tw', null,array('class'=>'validate','id'=>'tw'))!!}
            <label class="active" for="tw">Twitter</label>
            <label class="error">{{ $errors->first('tw') }}</label>
        </div>

        <div class="input-field col s6">
            {!!Form::url('be', null,array('class'=>'validate','id'=>'be'))!!}
            <label class="active" for="be">Behance</label>
            <label class="error">{{ $errors->first('be') }}</label>
        </div>
        {{--<div class="input-field col s6">--}}
            {{--{!!Form::url('yt', null,array('class'=>'validate','id'=>'yt'))!!}--}}
            {{--<label class="active" for="yt">Youtbe</label>--}}
            {{--<label class="error">{{ $errors->first('yt') }}</label>--}}
        {{--</div>--}}

        <div class="input-field col s6">
            {!!Form::url('gp', null,array('class'=>'validate','id'=>'gp'))!!}
            <label class="active" for="gp">Google +</label>
            <label class="error">{{ $errors->first('gp') }}</label>
        </div>
        <div class="input-field col s6">
            {!!Form::url('skype', null,array('class'=>'validate','id'=>'skype'))!!}
            <label class="active" for="skype">Skype</label>
            <label class="error">{{ $errors->first('skype') }}</label>
        </div>


        <div class="input-field col s6">
            {!!Form::url('pin', null,array('class'=>'validate','id'=>'pin'))!!}
            <label class="active" for="skype">pinterest</label>
            <label class="error">{{ $errors->first('pin') }}</label>
        </div>


        <div class="input-field col s6">
            {!!Form::url('ins', null,array('class'=>'validate','id'=>'ins'))!!}
            <label class="active" for="ins">Instgarm</label>
            <label class="error">{{ $errors->first('ins') }}</label>
        </div>

    </div>



    <div id="test3" class="col s12">


        {{--======================  Website Title  =============================--}}
        <div class="input-field col s6">
            {!!Form::text('title_en', null,array('class'=>'validate','id'=>'title_en'))!!}
            <label class="active" for="title_en">Website Title English</label>
            <label class="error">{{ $errors->first('title_en') }}</label>
        </div>

        <div class="input-field col s6">
            {!!Form::text('title_ar', null,array('class'=>'validate','id'=>'title_ar'))!!}
            <label class="active" for="title_ar">Website Title Arabic</label>
            <label class="error">{{ $errors->first('title_ar') }}</label>
        </div>


        <div class="input-field col s6">
            {!!Form::text('title_fr', null,array('class'=>'validate','id'=>'title_fr'))!!}
            <label class="active" for="title_fr">Website Title French</label>
            <label class="error">{{ $errors->first('title_fr') }}</label>
        </div>

        <div class="input-field col s6">
            {!!Form::text('title_it', null,array('class'=>'validate','id'=>'title_it'))!!}
            <label class="active" for="title_it">Website Title Itlian</label>
            <label class="error">{{ $errors->first('title_it') }}</label>
        </div>
        {{--=================================Website Meta Title=========================--}}

        <div class="input-field col s6">
            {!!Form::text('meta_title_en', null,array('class'=>'validate','id'=>'meta_title_en'))!!}
            <label class="active" for="meta_title_en">Website Meta Title English</label>
            <label class="error">{{ $errors->first('meta_title_en') }}</label>
        </div>

        <div class="input-field col s6">
            {!!Form::text('meta_title_fr', null,array('class'=>'validate','id'=>'meta_title_fr'))!!}
            <label class="active" for="meta_title_fr">Website Meta Title French</label>
            <label class="error">{{ $errors->first('meta_title_fr') }}</label>
        </div>
        <div class="input-field col s6">
            {!!Form::text('meta_title_it', null,array('class'=>'validate','id'=>'meta_title_it'))!!}
            <label class="active" for="meta_title_it">Website Meta Title Itlian</label>
            <label class="error">{{ $errors->first('meta_title_it') }}</label>
        </div>
        <div class="input-field col s6">
            {!!Form::text('meta_title_ar', null,array('class'=>'validate','id'=>'meta_title_ar'))!!}
            <label class="active" for="meta_title">Website Meta Title Arabic</label>
            <label class="error">{{ $errors->first('title') }}</label>
        </div>



        {{--=======================metaa=================--}}
        <div class="input-field col s12">
            {!!Form::textarea('meta_description_en', null,array('class'=>'materialize-textarea ','id'=>'meta_description_en'))!!}
            <label class="active" for="meta_description_en"> meta description English</label>
        </div>
        <div class="input-field col s12">
            {!!Form::textarea('meta_description_fr', null,array('class'=>'materialize-textarea ','id'=>'meta_description'))!!}
            <label class="active" for="meta_description_fr"> meta description French</label>
        </div>
        <div class="input-field col s12">
            {!!Form::textarea('meta_description_it', null,array('class'=>'materialize-textarea ','id'=>'meta_description_it'))!!}
            <label class="active" for="meta_description_it"> meta description Itlian</label>
        </div>
        <div class="input-field col s12">
            {!!Form::textarea('meta_description_ar', null,array('class'=>'materialize-textarea ','id'=>'meta_description_ar'))!!}
            <label class="active" for="meta_description_ar"> meta description Arabic</label>
        </div>


        {{--===============--}}
        <div class="input-field col s12">
            {!!Form::textarea('meta_keyword_en', null,array('class'=>'materialize-textarea ','id'=>'meta_keyword_en'))!!}
            <label class="active" for="meta_keyword"> meta keyword English</label>
        </div>

        <div class="input-field col s12">
            {!!Form::textarea('meta_keyword_ar', null,array('class'=>'materialize-textarea ','id'=>'meta_keyword_ar'))!!}
            <label class="active" for="meta_keyword_ar"> meta keyword Arabic</label>
        </div>


        <div class="input-field col s12">
            {!!Form::textarea('meta_keyword_fr', null,array('class'=>'materialize-textarea ','id'=>'meta_keyword_fr'))!!}
            <label class="active" for="meta_keyword_fr"> meta keyword French</label>
        </div>

        <div class="input-field col s12">
            {!!Form::textarea('meta_keyword_it', null,array('class'=>'materialize-textarea ','id'=>'meta_keyword_it'))!!}
            <label class="active" for="meta_keyword_it"> meta keyword Itlian</label>
        </div>
    </div>

{{--================================================================--}}

    <div class="input-field col s12">
        {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
        <label class="active" for="photo_alt">Alt of logo </label>
        <label class="error">{{ $errors->first('photo_alt') }}</label>
    </div>


    {{--<div id="test4" class="col s12">
        <div class="input-field col s6">
            {!!Form::text('business_num', null,array('class'=>'validate','id'=>'business_num'))!!}
            <label for="business_num">Number of Years in Business</label>
            <label class="error">{{ $errors->first('business_num') }}</label>
        </div>
        <div class="input-field col s6">
            {!!Form::text('departments_num', null,array('class'=>'validate','id'=>'departments_num'))!!}
            <label for="departments_num">Number of Departments</label>
            <label class="error">{{ $errors->first('departments_num') }}</label>
        </div>
        <div class="input-field col s6">
            {!!Form::text('insurance_num', null,array('class'=>'validate','id'=>'insurance_num'))!!}
            <label for="insurance_num">Number of Insurance</label>
            <label class="error">{{ $errors->first('insurance_num') }}</label>
        </div>
    </div>--}}

</div>
<div class="panel-footer">
    {!! Form::submit('edit', array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
</div>
{!! Form::close() !!}


<script>
    {{--CKEDITOR.replace('aboutus_desc', {--}}
    {{--customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'--}}
    {{--});--}}
    {{--CKEDITOR.replace('services', {--}}
    {{--customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'--}}
    {{--});--}}
    {{--CKEDITOR.replace('services_ar', {--}}
    {{--customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'--}}
    {{--});--}}
    {{--CKEDITOR.replace('information_desc', {--}}
    {{--customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'--}}
    {{--});--}}
    {{--CKEDITOR.replace('information_desc_ar', {--}}
    {{--customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'--}}
    {{--});--}}

</script>
<!-- END BREADCRUMB -->
@stop
