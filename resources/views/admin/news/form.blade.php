@inject('tag','App\Tag')

<?php

$tagsen = $tag->pluck('name_en', 'id');


?>

<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">news Info</span>
            <div class="row">

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
                <div class="input-field col s12">
                    {!!Form::text('slug', null,array('class'=>'validate','id'=>'slug'))!!}
                    <label class="active" for="slug">slug </label>
                </div>


                <div class="input-field col s12">
                    {{

                      Form::select('tag_id', $tagsen, null, ['placeholder' => 'Select tag ','class'=>'form-control','id'=>'tag_id',])
                      }}
                    <label class="active" for="tag">Tag </label>
                    <label class="error">{{ $errors->first('tag_id') }}</label>
                </div>

                {{--====================title===============--}}
                <div class="input-field col s12">
                    {!!Form::text('title_en', null,array('class'=>'validate','id'=>'title_en'))!!}
                    <label class="active" for="title_en">Title English</label>

                </div>

                <div class="input-field col s12">
                    {!!Form::text('title_ar', null,array('class'=>'validate','id'=>'title_ar'))!!}
                    <label class="active" for="title_ar">Title Arabic</label>


                </div>

                <div class="input-field col s12">
                    {!!Form::text('title_fr', null,array('class'=>'validate','id'=>'title_fr'))!!}
                    <label class="active" for="title_fr">Title French</label>


                </div>


                <div class="input-field col s12">
                    {!!Form::text('title_it', null,array('class'=>'validate','id'=>'title_it'))!!}
                    <label class="active" for="title_it">Title Itlian</label>


                </div>
                {{--========body====================--}}
                <div class="input-field col s12">
                    {!!Form::textarea('body_en', null,array('class'=>'materialize-textarea ckeditor','id'=>'body_en'))!!}
                    <label class="active" for="body_en">body English</label>
                    <label class="error">{{ $errors->first('body_en') }}</label>
                </div>


                <div class="input-field col s12">
                    {!!Form::textarea('body_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'body_ar'))!!}
                    <label class="active" for="body_ar">body arabic </label>
                    <label class="error">{{ $errors->first('body_ar') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('body_fr', null,array('class'=>'materialize-textarea ckeditor','id'=>'body_fr'))!!}
                    <label class="active" for="body_fr">body frenche</label>
                    <label class="error">{{ $errors->first('body_fr') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('body_it', null,array('class'=>'materialize-textarea ckeditor','id'=>'body_it'))!!}
                    <label class="active" for="body_it">body itlian</label>
                    <label class="error">{{ $errors->first('body_it') }}</label>
                </div>


                <div class="input-field col s12">
                    <div class="input-field col s12">
                        {!!Form::select('status', array('1'=>'popular','0' =>'unpopular'),null,array('class'=>'validate'))!!}
                        <label class="active" for="status">Status</label>
                    </div>
                </div>


                {{--=========================meta==========================--}}

                <div class="input-field col s6">
                    {!!Form::text('page_title', null,array('class'=>'validate','id'=>'page_title'))!!}
                    <label class="active" for="page_title">Page Tilte</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
                    <label class="active" for="name">Photo alt</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::text('meta_title', null,array('class'=>'validate','id'=>'meta_title'))!!}
                    <label class="active" for="name">Meta Title</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::text('meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
                    <label class="active" for="desc">Keywords </label>
                    <label class="error">{{ $errors->first('meta_keyword') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
                    <label class="active" for="meta_description">Meta Description </label>
                    <label class="error">{{ $errors->first('meta_description') }}</label>
                </div>
                {{--=====================================--}}


            </div>
        </div>
    </div>


    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>

{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
<script>
    CKEDITOR.replace('body', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>