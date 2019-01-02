<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">ads Info</span>
            <div class="row">

                <div class="input-field col s12">
                    {!!Form::text('title', null,array('class'=>'validate','id'=>'title'))!!}
                    <label  class="active" for="title">Title English</label>
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
                    {!!Form::text('title_ar', null,array('class'=>'validate','id'=>'title_ar'))!!}
                    <label class="active" for="title_ar">Title Arabic</label>
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
