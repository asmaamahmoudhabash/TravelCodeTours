<div class="input-field col s12">
    <i class="material-icons prefix">email</i>
    {!!Form::email('email', null,array('class'=>'validate','id'=>'email'))!!}
    <label for="email">User Email</label>
    <label class="error">{{ $errors->first('email') }}</label>
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
    <label for="name">Client Name</label>
</div>

<div class="input-field col s12">
    <i class="material-icons prefix">lock</i>

    {!!Form::password('password', null,array('class'=>'validate','id'=>'password'))!!}
    <label for="password">Password</label>
    <label class="error">{{ $errors->first('password') }}</label>
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">lock</i>
    {!!Form::password('password_confirmation', null,array('class'=>'validate','id'=>'password_confirmation'))!!}
    <label for="password_confirmation">Password Confirmation</label>
    <label class="error">{{ $errors->first('password_confirmation') }}</label>
</div>






{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
