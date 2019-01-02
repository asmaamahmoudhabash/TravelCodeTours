<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">Categories Info</span>
            <div class="row">


                <div class="file-field  col s12">
                    <div class="btn teal lighten-1">
                        <span>Background Image</span>
                        {!!Form::file('background', null,array('id'=>'background'))!!}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="background">
                    </div>
                    <label class="error">{{ $errors->first('background') }}</label>
                </div>

                {{--======================name===================--}}
                <div class="input-field col s6">
                    {!!Form::text('name_en', null,array('class'=>'validate','id'=>'name_en'))!!}
                    <label class="active" for="name_en">Name English</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('name_ar', null,array('class'=>'validate','id'=>'name_ar'))!!}
                    <label class="active" for="name_ar">Name Arabic</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('name_it', null,array('class'=>'validate','id'=>'name_it'))!!}
                    <label  class="active" for="name_it">Name Itialtian</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('name_fr', null,array('class'=>'validate','id'=>'name_fr'))!!}
                    <label class="active" for="name_fr">Name French</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('slug', null,array('class'=>'validate','id'=>'slug'))!!}
                    <label  class="active" for="slug">slug </label>
                </div>


                {{--=========================title==================--}}

                <div class="input-field col s6">
                    {!!Form::text('bg_title_en', null,array('class'=>'validate','id'=>'bg_title_en'))!!}
                    <label class="active" for="bg_title_en">Background title English </label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('bg_title_ar', null,array('class'=>'validate','id'=>'bg_title_ar'))!!}
                    <label class="active" for="bg_title_ar">Background title Arabic</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('bg_title_fr', null,array('class'=>'validate','id'=>'bg_title_fr'))!!}
                    <label class="active" for="bg_title_fr">Background title French</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('bg_title_it', null,array('class'=>'validate','id'=>'bg_title_it'))!!}
                    <label class="active" for="bg_title_it">Background title Itlian</label>
                </div>

                {{--========================================Describtion=========================--}}


                <div class="input-field col s6">
                    {!!Form::text('bg_desc_en', null,array('class'=>'materialize-textarea editor','id'=>'bg_desc_en'))!!}
                    <label class="active" for="bg_desc_en">Background Description English</label>
                    <label class="error">{{ $errors->first('bg_desc_en') }}</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('bg_desc_ar', null,array('class'=>'materialize-textarea editor','id'=>'bg_desc_ar'))!!}
                    <label  class="active" for="bg_desc_ar">Background Description Arabic</label>
                    <label class="error">{{ $errors->first('bg_desc_ar') }}</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('bg_desc_fr', null,array('class'=>'materialize-textarea editor','id'=>'bg_desc_fr'))!!}
                    <label class="active" for="body">Background Description french</label>
                    <label class="error">{{ $errors->first('bg_desc_fr') }}</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('bg_desc_it', null,array('class'=>'materialize-textarea editor','id'=>'bg_desc_it'))!!}
                    <label class="active" for="bg_desc_it">Background Description Itlian</label>
                    <label class="error">{{ $errors->first('bg_desc_it') }}</label>
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
