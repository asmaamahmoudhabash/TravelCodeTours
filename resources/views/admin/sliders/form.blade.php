<!-- START FORM   -->

<div class="file-field  col s12">
    <div class="btn teal lighten-1">
        <span>Image</span>
        {!!Form::file('image', null,array('id'=>'image'))!!}
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Image">
    </div>
    <label class="error">{{ $errors->first('image') }}</label>
</div>

{{--=================image alt===================--}}
<div class="input-field col s12">
    {!!Form::text('image_alt_en', null,array('class'=>'validate','id'=>'image_alt_en'))!!}
    <label class="active" for="image_alt_en">Image Alt English </label>
    <label class="error">{{ $errors->first('image_alt_en') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::text('image_alt_ar', null,array('class'=>'validate','id'=>'image_alt_ar'))!!}
    <label class="active" for="image_alt_ar">Image Alt Arabic </label>
    <label class="error">{{ $errors->first('image_alt_ar') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::text('image_alt_fr', null,array('class'=>'validate','id'=>'image_alt_fr'))!!}
    <label class="active" for="image_alt_fr">Image Alt french </label>
    <label class="error">{{ $errors->first('image_alt_fr') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::text('image_alt_it', null,array('class'=>'validate','id'=>'image_alt_it'))!!}
    <label class="active" for="image_alt_it">Image Alt Itlian </label>
    <label class="error">{{ $errors->first('image_alt_it') }}</label>
</div>
{{--======================title=====================--}}


<div class="input-field col s12">
    {!!Form::text('title_en', null,array('class'=>'validate','id'=>'title_en'))!!}
    <label  class="active" for="title_en">title English </label>
    <label class="error">{{ $errors->first('title_en') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::text('title_ar', null,array('class'=>'validate','id'=>'title_ar'))!!}
    <label  class="active" for="title_ar">title Arabic </label>
    <label class="error">{{ $errors->first('title_ar') }}</label>
</div>
<div class="input-field col s12">
    {!!Form::text('title_fr', null,array('class'=>'validate','id'=>'title_fr'))!!}
    <label  class="active" for="title_fr">title French </label>
    <label class="error">{{ $errors->first('title_fr') }}</label>
</div>
<div class="input-field col s12">
    {!!Form::text('title_it', null,array('class'=>'validate','id'=>'title_it'))!!}
    <label  class="active" for="title_it">title Itlian </label>
    <label class="error">{{ $errors->first('title_it') }}</label>

</div>

{{--======================title=====================--}}


<div class="input-field col s12">
    {!!Form::text('sub_title_en', null,array('class'=>'validate','id'=>'sub_title_en'))!!}
    <label  class="active" for="sub_title_en"> sub title English </label>
    <label class="error">{{ $errors->first('sub_title_en') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::text('sub_title_ar', null,array('class'=>'validate','id'=>'sub_title_ar'))!!}
    <label  class="active" for="sub_title_ar"> sub title Arabic </label>
    <label class="error">{{ $errors->first('sub_title_ar') }}</label>
</div>
<div class="input-field col s12">
    {!!Form::text('sub_title_fr', null,array('class'=>'validate','id'=>'sub_title_fr'))!!}
    <label  class="active" for="sub_title_fr"> sub title French </label>
    <label class="error">{{ $errors->first('sub_title_fr') }}</label>
</div>
<div class="input-field col s12">
    {!!Form::text('sub_title_it', null,array('class'=>'validate','id'=>'sub_title_it'))!!}
    <label  class="active" for="sub_title_it"> sub title Itlian </label>
    <label class="error">{{ $errors->first('sub_title_it') }}</label>
</div>

{{--======================body=====================--}}

<div class="input-field col s12">
    {!!Form::text('body_en', null,array('class'=>'materialize-textarea','id'=>'body_en'))!!}
    <label  class="active" for="body_en">body English</label>
    <label class="error">{{ $errors->first('body_en') }}</label>
</div>


<div class="input-field col s12">
    {!!Form::text('body_ar', null,array('class'=>'materialize-textarea','id'=>'body_ar'))!!}
    <label  class="active" for="body_ar">Body Arabic</label>
    <label class="error">{{ $errors->first('body_ar') }}</label>
</div>


<div class="input-field col s12">
    {!!Form::text('body_fr', null,array('class'=>'materialize-textarea','id'=>'body_fr'))!!}
    <label  class="active" for="body_fr">body Frence</label>
    <label class="error">{{ $errors->first('body_fr') }}</label>
</div>


<div class="input-field col s12">
    {!!Form::text('body_it', null,array('class'=>'materialize-textarea','id'=>'body_it'))!!}
    <label  class="active" for="body_it">Body Itlian</label>
    <label class="error">{{ $errors->first('body_it') }}</label>
</div>



<div class="input-field col s12">
    <div class="input-field col s12">
        {!!Form::select('status', array('1'=>'Active','0' =>'Disactive'),null,array('class'=>'validate'))!!}
        <label class="active" for="status">Status</label>
    </div>
</div>





<div class="panel-footer">
    {!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
</div>

<!-- END FORM -->

