<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">Tags Info</span>
            <div class="row">

                <div class="input-field col s12">
                    {!!Form::text('name_en', null,array('class'=>'validate','id'=>'name_en'))!!}
                    <label  class="active" for="name_en">Name English</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::text('name_ar', null,array('class'=>'validate','id'=>'name_ar'))!!}
                    <label class="active" for="name_ar">Name Arabic</label>
                </div>


                <div class="input-field col s12">
                    {!!Form::text('name_fr', null,array('class'=>'validate','id'=>'name_fr'))!!}
                    <label class="active" for="name">Name french</label>
                </div>


                <div class="input-field col s12">
                    {!!Form::text('name_it', null,array('class'=>'validate','id'=>'name_it'))!!}
                    <label class="active" for="name">Name Itlian</label>
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
