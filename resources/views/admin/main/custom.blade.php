@extends('admin.dashboard')
@section('content') 
<div class="row">
    {!! Form::model($row,array('method' => 'POST','action' => ['MainController@edit',$row->id], 'files'=>true,'class' => 'ajax-form-request')) !!}
    <div class="message" style="padding:26px; ">
    </div><!-- div to display message after insert -->
    <h3>Header Settings</h3>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Services In Header?
                <label>
                    <input type="checkbox" name="header_services" value="1" @if($row->header_services) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Blogs In Header?
                <label>
                    <input type="checkbox" name="header_blogs" value="1" @if($row->header_blogs) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Program Pages In Header?
                <label>
                    <input type="checkbox" name="header_program" value="1" @if($row->header_program) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Accreditation Pages In Header?
                <label>
                    <input type="checkbox" name="header_accreditation" value="1" @if($row->header_accreditation) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Membership Page In Header?
                <label>
                    <input type="checkbox" name="header_membership" value="1" @if($row->header_membership) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Teamwork Page In Header?
                <label>
                    <input type="checkbox" name="header_teamwork" value="1" @if($row->header_teamwork) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <h3>Home Page Settings</h3>

    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Home Brief In Home Page ?
                <label>
                    <input type="checkbox" name="home_brief" value="1" @if($row->home_brief) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Services Page In  Home Page?
                <label>
                    <input type="checkbox" name="home_services" value="1" @if($row->home_services) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Testmonial Page Home Page?
                <label>
                    <input type="checkbox" name="home_testmonial" value="1" @if($row->home_testmonial) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show TeamWork Page Home Page?
                <label>
                    <input type="checkbox" name="home_teamwork" value="1" @if($row->home_teamwork) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="setting-item">
        <div class="setting-set">
            <div class="switch">
                Do You Want Show Posts Page In Home Page?
                <label>
                    <input type="checkbox" name="home_posts" value="1" @if($row->home_posts) checked @endif>
                           <span class="lever"></span>
                </label>
            </div>
        </div>
    </div>
    {!! Form::submit("Save Changes", array('class'=>'btn btn-primary text-center','id' => 'submit','style'=>'margin-left: 380px;margin-top: 66px;')) !!}

    {!! Form::close() !!}  
</div>
@endsection