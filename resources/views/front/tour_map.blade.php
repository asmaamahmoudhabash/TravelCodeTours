@extends('front/main')


@section('content')





    <div class="map-block">
        <div id="map-canvas" class="style-2" data-lat="{{$tours->lat}}" data-lng="{{$tours->lon}}" data-zoom="10" data-style="2"></div>
        <div class="addresses-block">
            <a data-lat="{{$tours->lat}}" data-lng="{{$tours->lon}}" data-string="Santa Monica Hotel"></a>
        </div>
    </div>


@stop
