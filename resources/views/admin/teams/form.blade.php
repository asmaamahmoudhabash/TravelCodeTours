<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>



    <div class="card">
        <div class="card-content">
            <span class="card-title">teams Info</span>
            <div class="row">

                {{--============================name============================--}}
                <div class="input-field col s12">
                    {!!Form::text('name_en', null,array('class'=>'validate','id'=>'name_en'))!!}
                    <label class="active" for="name_en">Name English</label>
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
                {{--==========================job_title====================--}}
                <div class="input-field col s12">
                    {!!Form::text('job_title_en', null,array('class'=>'validate','id'=>'job_title_en'))!!}
                    <label  class="active" for="job_title_en">Job Title English </label>
                </div>

                <div class="input-field col s12">
                    {!!Form::text('job_title_ar', null,array('class'=>'validate','id'=>'job_title_ar'))!!}
                    <label  class="active" for="job_title_ar">Job Title Arabic</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::text('job_title_fr', null,array('class'=>'validate','id'=>'job_title_fr'))!!}
                    <label  class="active" for="job_title_fr">Job Title french</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::text('job_title_it', null,array('class'=>'validate','id'=>'job_title_it'))!!}
                    <label class="active"  for="job_title_it">Job Title Itlian</label>
                </div>

{{--================================description====================--}}

                <div class="input-field col s12">
                    {!!Form::textarea('description_en', null,array('class'=>'materialize-textarea editor','id'=>'description_en'))!!}
                    <label class="active" for="description_en">Description English</label>
                    <label class="error">{{ $errors->first('description_en') }}</label>
                </div>


                <div class="input-field col s12">
                    {!!Form::textarea('description_ar', null,array('class'=>'materialize-textarea editor','id'=>'description_ar'))!!}
                    <label class="active" for="description_ar">Description Arabic</label>
                    <label class="error">{{ $errors->first('description_ar') }}</label>
                </div>


                <div class="input-field col s12">
                    {!!Form::textarea('description_fr', null,array('class'=>'materialize-textarea editor','id'=>'description_fr'))!!}
                    <label  class="active" for="description_fr">Description Frence</label>
                    <label class="error">{{ $errors->first('description_fr') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('description_it', null,array('class'=>'materialize-textarea editor','id'=>'description_it'))!!}
                    <label class="active" for="description_it">Description Itlian</label>
                    <label class="error">{{ $errors->first('description_it') }}</label>


                </div>





{{--=========================================================--}}

                <div class="input-field col s12">
                    {!!Form::text('google_plus', null,array('class'=>'validate','id'=>'google_plus'))!!}
                    <label class="active" for="google_plus">google_plus</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::text('fb', null,array('class'=>'validate','id'=>'fb'))!!}
                    <label  class="active" for="fb">face book</label>
                </div>



                <div class="input-field col s12">
                    {!!Form::text('tw', null,array('class'=>'validate','id'=>'tw'))!!}
                    <label  class="active" for="tw">twiter</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::text('skype', null,array('class'=>'validate','id'=>'skype'))!!}
                    <label class="active"  for="skype">skype</label>
                </div>

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
