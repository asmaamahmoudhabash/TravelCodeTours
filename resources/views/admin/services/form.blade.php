<!-- START FORM   -->
<div class="file-field  col s12">
    <div class="btn teal lighten-1">
        <span> Services Image</span>
        {!!Form::file('images[]', array('id'=>'images','multiple'=>'multiple'))!!}
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder=" Service Images">
    </div>
    <label class="error">{{ $errors->first('images') }}</label>
</div>


<div class="file-field  col s12">
    <div class="btn teal lighten-1">
        <span> Background Image</span>
        {!!Form::file('background', null,array('id'=>'background'))!!}
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="background">
    </div>
    <label class="error">{{ $errors->first('background') }}</label>
</div>


{{--=========================phone========================--}}

<div class="input-field col s12">
    {!!Form::text('phone_en', null,array('class'=>'validate','id'=>'phone_en'))!!}
    <label class="active" for="phone_en">Phone </label>
</div>

<div class="input-field col s12">
    {!!Form::text('slug', null,array('class'=>'validate','id'=>'slug'))!!}
    <label  class="active" for="slug">slug </label>
</div>


{{--=========================--}}

<div class="input-field col s12">
    {!!Form::text('mail_us', null,array('class'=>'validate','id'=>'mail_us'))!!}
    <label class="active" for="">Mail us</label>
</div>

{{--======================name=================--}}


<div class="input-field col s12">
    {!!Form::text('name_en', null,array('class'=>'validate','id'=>'name_en'))!!}
    <label class="active" for="name_en"> Name English</label>
</div>

<div class="input-field col s12">
    {!!Form::text('name_ar', null,array('class'=>'validate','id'=>'name_ar'))!!}
    <label class="active" for="name_ar"> Name Arabic</label>
</div>

<div class="input-field col s12">
    {!!Form::text('name_fr', null,array('class'=>'validate','id'=>'name_fr'))!!}
    <label class="active" for="name_fr"> Name French</label>
</div>

<div class="input-field col s12">
    {!!Form::text('name_it', null,array('class'=>'validate','id'=>'name_it'))!!}
    <label class="active" for="name_it"> Name Itlian</label>
</div>
{{--=======================Back ground title=================--}}

<div class="input-field col s12">
    {!!Form::text('bg_title_en', null,array('class'=>'validate','id'=>'bg_title_en'))!!}
    <label class="active" for="bg_title_en">Back ground title English</label>
</div>

<div class="input-field col s12">
    {!!Form::text('bg_title_ar', null,array('class'=>'validate','id'=>'bg_title_ar'))!!}
    <label class="active" for="bg_title_ar">Back ground title Arabic</label>
</div>

<div class="input-field col s12">
    {!!Form::text('bg_title_fr', null,array('class'=>'validate','id'=>'bg_title_fr'))!!}
    <label class="active" for="bg_title_fr">Back ground title French</label>
</div>

<div class="input-field col s12">
    {!!Form::text('bg_title_it', null,array('class'=>'validate','id'=>'bg_title_it'))!!}
    <label class="active" for="bg_title_it">Back ground title Itlian</label>
</div>

{{--==================title====================--}}

<div class="input-field col s12">
    {!!Form::text('title_en', null,array('class'=>'validate','id'=>'title_en'))!!}
    <label class="active" for="title_en"> Title English</label>
</div>


<div class="input-field col s12">
    {!!Form::text('title_ar', null,array('class'=>'validate','id'=>'title_ar'))!!}
    <label class="active" for="title_ar"> Title Arabic</label>
</div>

<div class="input-field col s12">
    {!!Form::text('title_fr', null,array('class'=>'validate','id'=>'title_fr'))!!}
    <label class="active" for="title_fr"> Title Frence</label>
</div>
<div class="input-field col s12">
    {!!Form::text('title_it', null,array('class'=>'validate','id'=>'title_it'))!!}
    <label class="active" for="title_it"> Title Itlian </label>
</div>

{{--===========================Title Details=================--}}


<div class="input-field col s12">
    {!!Form::text('title_details_en', null,array('class'=>'validate','id'=>'title_details_en'))!!}
    <label class="active" for="title_details_en">Title Details English</label>
</div>

<div class="input-field col s12">
    {!!Form::text('title_details_ar', null,array('class'=>'validate','id'=>'title_details_ar'))!!}
    <label class="active" for="title_details_ar">Title Details Arabic</label>
</div>


<div class="input-field col s12">
    {!!Form::text('title_details_fr', null,array('class'=>'validate','id'=>'title_details_fr'))!!}
    <label class="active" for="title_details">Title Details French</label>
</div>

<div class="input-field col s12">
    {!!Form::text('title_details_it', null,array('class'=>'validate','id'=>'title_details_it'))!!}
    <label class="active" for="title_details_it">Title Details Itlian</label>
</div>


{{--============================Need Help??===================================--}}

<div class="input-field col s12">
    {!!Form::textarea('help_en', null,array('class'=>'materialize-textarea ckeditor','id'=>'help_en'))!!}
    <label class="active" for="help_en">Need Help?? English</label>
    <label class="error">{{ $errors->first('help_en') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::textarea('help_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'help_ar'))!!}
    <label class="active" for="help_ar">Need Help?? Arabic</label>
    <label class="error">{{ $errors->first('help_ar') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::textarea('help_fr', null,array('class'=>'materialize-textarea ckeditor','id'=>'help_fr'))!!}
    <label class="active" for="help_fr">Need Help?? French</label>
    <label class="error">{{ $errors->first('help_fr') }}</label>
</div>


<div class="input-field col s12">
    {!!Form::textarea('help_it', null,array('class'=>'materialize-textarea ckeditor','id'=>'help_it'))!!}
    <label class="active" for="help_it">Need Help?? Itlian</label>
    <label class="error">{{ $errors->first('help_it') }}</label>
</div>
{{--============================Service information================================--}}


<div class="input-field col s12">
    {!!Form::textarea('description_en', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_en'))!!}
    <label class="active" for="description_en">Service information English</label>
    <label class="error">{{ $errors->first('description_en') }}</label>
</div>


<div class="input-field col s12">
    {!!Form::textarea('description_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_ar'))!!}
    <label class="active" for="description_ar">Service information Arabic</label>
    <label class="error">{{ $errors->first('description_ar') }}</label>
</div>


<div class="input-field col s12">
    {!!Form::textarea('description_fr', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_fr'))!!}
    <label class="active" for="description_fr">Service information Frence</label>
    <label class="error">{{ $errors->first('description_fr') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::textarea('description_it', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_it'))!!}
    <label class="active" for="description_it">Service information Itlian</label>
    <label class="error">{{ $errors->first('description_it') }}</label>
</div>



{{--=======================================meta=======================--}}
<div class="input-field col s6">
    {!!Form::text('page_title', null,array('class'=>'validate','id'=>'page_title'))!!}
    <label  class="active"for="page_title">Page Tilte</label>
</div>
<div class="input-field col s6">
    {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
    <label class="active" for="name">Photo alt</label>
</div>
<div class="input-field col s6">
    {!!Form::text('meta_title', null,array('class'=>'validate','id'=>'meta_title'))!!}
    <label  class="active" for="name">Meta Title</label>
</div>
<div class="input-field col s6">
    {!!Form::textarea('meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
    <label class="active" for="meta_description">Meta Description </label>
    <label class="error">{{ $errors->first('meta_description') }}</label>
</div>
<div class="input-field col s6">
    {!!Form::textarea('meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
    <label class="active" for="desc">Keywords </label>
    <label class="error">{{ $errors->first('meta_keyword') }}</label>
</div>
{{--==================================================--}}



<div class="panel-footer">
    {!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
</div>

<!-- END FORM -->

