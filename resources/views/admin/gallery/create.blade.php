@extends('admin.main')
@section('content') 
<div class="row">
{!! Form::open(array('route' =>'controll.gallery.store','files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
@include ('admin.gallery.form',['submitButton' => 'Create'])
{!! Form::close() !!}   
</div>
@endsection