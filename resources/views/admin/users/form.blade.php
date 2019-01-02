<div class="input-field col s12">
    <i class="material-icons prefix">email</i>
    {!!Form::email('email', null,array('class'=>'validate','id'=>'email'))!!}
    <label class="active" for="email">User Email</label>
    <label class="error">{{ $errors->first('email') }}</label>
</div>


<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('name_en', null,array('class'=>'validate','id'=>'name_en'))!!}
    <label class="active" for="name_en">User Name English</label>
</div>
{{--========================arabic=============--}}

<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('name_ar', null,array('class'=>'validate','id'=>'name_ar'))!!}
    <label class="active" for="name_ar">User Name Arabic</label>
</div>
{{--========================itlian=============--}}

<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('name_it', null,array('class'=>'validate','id'=>'name_it'))!!}
    <label class="active" for="name_it">User Name itlian</label>
</div>
{{--========================french=============--}}

<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('name_fr', null,array('class'=>'validate','id'=>'name_fr'))!!}
    <label class="active" for="name_fr">User Name french</label>
</div>


<div class="input-field col s12">
    <i class="material-icons prefix">lock</i>

    {!!Form::password('password', null,array('class'=>'validate','id'=>'password'))!!}
    <label class="active" for="password">Password</label>
    <label class="error">{{ $errors->first('password') }}</label>
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">lock</i>
    {!!Form::password('password_confirmation', null,array('class'=>'validate','id'=>'password_confirmation'))!!}
    <label class="active" for="password_confirmation">Password Confirmation</label>
    <label class="error">{{ $errors->first('password_confirmation') }}</label>
</div>


{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
