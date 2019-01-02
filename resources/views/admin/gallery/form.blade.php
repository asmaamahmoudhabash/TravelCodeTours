@inject('tab','App\Tab')
<?php
$tabs = $tab->pluck('name_en', 'id');



?>


<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">Gallery Info</span>
            <div class="row">


                <div class="file-field  col s12">
                    <div class="btn teal lighten-1">
                        <span> Gallery Image</span>
                        {!!Form::file('images[]', array('id'=>'images','multiple'=>'multiple'))!!}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder=" gallery Images">
                    </div>
                    <label class="error">{{ $errors->first('images') }}</label>
                </div>


                <div class="file-field  col s12">
                    <div class="btn teal lighten-1">
                        <span>Main photo</span>
                        {!!Form::file('mainphoto', null,array('id'=>'mainphoto'))!!}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="mainphoto">
                    </div>
                    <label class="error">{{ $errors->first('mainphoto') }}</label>
                </div>


                {{--=================Photo_Alt================--}}


                <div class="input-field col s12">
                    {!!Form::text('photo_Alt_en', null,array('class'=>'validate','id'=>'photo_Alt_en'))!!}
                    <label class="active" for="photo_Alt_en">Photo Alt English </label>
                </div>

                <div class="input-field col s12">
                    {!!Form::text('photo_Alt_ar', null,array('class'=>'validate','id'=>'photo_Alt_ar'))!!}
                    <label class="active" for="photo_Alt_ar">Photo Alt Arabic</label>
                </div>


                <div class="input-field col s12">
                    {!!Form::text('photo_Alt_fr', null,array('class'=>'validate','id'=>'photo_Alt_fr'))!!}
                    <label class="active" for="photo_Alt_fr">Photo Alt Frence</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::text('photo_Alt_it', null,array('class'=>'validate','id'=>'photo_Alt_it'))!!}
                    <label class="active" for="photo_Alt_it">Photo Alt Itlian</label>
                </div>


                {{--=============================Description====================--}}


                <div class="input-field col s12">
                    {!!Form::textarea('description_en', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_en'))!!}
                    <label class="active" for="Description">Description English</label>
                    <label class="error">{{ $errors->first('description_en') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('description_fr', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_fr'))!!}
                    <label class="active" for="Description_fr">Description French</label>
                    <label class="error">{{ $errors->first('description_fr') }}</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::textarea('description_it', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_it'))!!}
                    <label class="active" for="Description_it">Description Itlian</label>
                    <label class="error">{{ $errors->first('description_it') }}</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::textarea('description_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_ar'))!!}
                    <label class="active" for="Description_ar">Description Arabic</label>
                    <label class="error">{{ $errors->first('description_ar') }}</label>
                </div>

                {{--========================content===================--}}

                <div class="input-field col s12">
                    {!!Form::textarea('content_en', null,array('class'=>'materialize-textarea ckeditor','id'=>'content_en'))!!}
                    <label  class="active" for="content_en">Content English</label>
                    <label class="error">{{ $errors->first('content_en') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('content_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'content_ar'))!!}
                    <label  class="active" for="content_ar">Content Arabic</label>
                    <label class="error">{{ $errors->first('content_ar') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('content_fr', null,array('class'=>'materialize-textarea  ckeditor','id'=>'content_fr'))!!}
                    <label  class="active" for="content">Content French</label>
                    <label class="error">{{ $errors->first('content_fr') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('content_it', null,array('class'=>'materialize-textarea ckeditor','id'=>'content_it'))!!}
                    <label  class="active" for="content_it">Content Itlian</label>
                    <label class="error">{{ $errors->first('content_it') }}</label>
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

                <div class="input-field col s12">
                    {!!Form::text('slug', null,array('class'=>'validate','id'=>'slug'))!!}
                    <label  class="active" for="slug">slug </label>
                </div>



                {{--=================================tabs=============--}}

                <div class="input-field col s12">
                    {{

                        Form::select('tab_id', $tabs, null, ['placeholder' => 'Select Tab ','class'=>'form-control','id'=>'tab_id',])
                        }}

                    <label class="error">{{ $errors->first('tab_id') }}</label>
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
