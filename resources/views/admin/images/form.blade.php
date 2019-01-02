
@inject('tour','App\Tour')

<?php

$tours = $tour->pluck('place', 'id');


?>

<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">Images Info</span>
            <div class="row">






                <div class="file-field  col s6">
                    <div class="btn teal lighten-1">
                        <span>Image</span>
                        {!!Form::file('image', null,array('id'=>'image'))!!}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Image">
                    </div>
                    <label class="error">{{ $errors->first('image') }}</label>
                </div>

                {{--<div class="input-field col s12">--}}
                    {{--{{--}}

                        {{--Form::select('tour_id', $tours, null, ['placeholder' => 'Select tour','class'=>'form-control','id'=>'tour_id',])--}}
                        {{--}}--}}
                    {{--<label for="tour_id">Tour</label>--}}
                    {{--<label class="error">{{ $errors->first('tour_id') }}</label>--}}
                {{--</div>--}}




                <div class="input-field col s12">
                    {{

                        Form::select('tour_id', $tours, null, ['placeholder' => 'Select tour','class'=>'form-control','id'=>'place',])
                        }}
                    <label for="tour">Tour</label>
                    <label class="error">{{ $errors->first('tour_id') }}</label>
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
