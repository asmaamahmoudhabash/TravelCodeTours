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


{{--===================name================--}}

<div class="input-field col s12">
    {!!Form::text('name_en', null,array('class'=>'validate','id'=>'name'))!!}
    <label class="active" for="name">Name English</label>
</div>


<div class="input-field col s12">
    {!!Form::text('name_ar', null,array('class'=>'validate','id'=>'name_ar'))!!}
    <label class="active" for="name_ar">Name Arabic</label>
</div>


<div class="input-field col s12">
    {!!Form::text('name_fr', null,array('class'=>'validate','id'=>'name_fr'))!!}
    <label class="active" for="name_fr">Name French</label>
</div>
<div class="input-field col s12">
    {!!Form::text('name_it', null,array('class'=>'validate','id'=>'name_it'))!!}
    <label class="active" for="name_it">Name Itlian</label>
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







<div class="panel-footer">
    {!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
</div>

<!-- END FORM -->

