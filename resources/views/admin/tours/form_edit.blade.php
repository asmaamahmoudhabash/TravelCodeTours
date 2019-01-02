@inject('category','App\Category')

<?php

$categoriesen = $category->pluck('name_en', 'id');


?>


@inject('tag','App\Tag')

<?php

$tagsen = $tag->pluck('name_en', 'id');


?>


@inject('continent','App\Continent')

<?php

$continentsen = $continent->pluck('name_en', 'id');


?>

<?php
$has = [
        0 => "no",
        1 => "yes",
];
?>


<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">tour Info</span>
            <div class="row">


                {{--=======================--}}


                <div class="file-field  col s6">
                    <div class="btn teal lighten-1">
                        <span> Tours Image</span>
                        {!!Form::file('images[]', array('id'=>'images','multiple'=>'multiple'))!!}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder=" Tour Images">
                    </div>
                    <label class="error">{{ $errors->first('images') }}</label>
                </div>


                <div class="file-field  col s6">
                    <div class="btn teal lighten-1">
                        <span> Background Image</span>
                        {!!Form::file('background', null,array('id'=>'background'))!!}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="background">
                    </div>
                    <label class="error">{{ $errors->first('background') }}</label>
                </div>


                {{--==================place===============================--}}

                <div class="input-field col s6">
                    {!!Form::text('place_en', null,array('class'=>'validate','id'=>'place_en'))!!}
                    <label class="active" for="place_en">Place English </label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('place_ar', null,array('class'=>'validate','id'=>'place_ar'))!!}
                    <label class="active" for="place_ar">Place Arabic</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('place_fr', null,array('class'=>'validate','id'=>'place_fr'))!!}
                    <label class="active" for="place_fr">Place French</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('place_it', null,array('class'=>'validate','id'=>'place_it'))!!}
                    <label class="active" for="place_it">Place Itlian</label>
                </div>
                {{--=======================price=========================================--}}
                <div class="input-field col s6">
                    {!!Form::text('price', null,array('class'=>'validate','id'=>'price'))!!}
                    <label class="active" for="price">Price </label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('slug', null,array('class'=>'validate','id'=>'slug'))!!}
                    <label class="active" for="slug">slug </label>
                </div>


                {{--=======================date=========================================--}}
                <div class="input-field col s6">
                    {!!Form::text('start_date_en', null,array('class'=>'validate','id'=>'start_date_en'))!!}
                    <label class="active" for="start_date_en">Start Date</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('final_date_en', null,array('class'=>'validate','id'=>'final_date_en'))!!}
                    <label class="active" for="final_date_en">Final Date</label>
                </div>


                {{--=======================number of person========================================--}}
                <div class="input-field col s6">
                    {!!Form::text('Kids', null,array('class'=>'validate','id'=>'Kids'))!!}
                    <label class="active" for="Kids">Kids</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('adults', null,array('class'=>'validate','id'=>'adults'))!!}
                    <label class="active" for="adults">Adults</label>
                </div>

                {{--===============================================================--}}
                <div class="input-field col s6">
                    {!!Form::text('vedio', null,array('class'=>'validate','id'=>'vedio'))!!}
                    <label class="active" for="vedio">Vedio</label>
                </div>


                {{--=======================flight type========================================--}}
                <div class="input-field col s6">
                    {!!Form::text('type_en', null,array('class'=>'validate','id'=>'type_en'))!!}
                    <label class="active" for="type_en"> Flight Type English</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('type_ar', null,array('class'=>'validate','id'=>'type_ar'))!!}
                    <label class="active" for="type_ar"> Flight Type Arabic</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('type_fr', null,array('class'=>'validate','id'=>'type_fr'))!!}
                    <label class="active" for="type_fr"> Flight Type French</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('type_it', null,array('class'=>'validate','id'=>'type_it'))!!}
                    <label class="active" for="type_it"> Flight Type Itlian</label>
                </div>


                {{--========================air line=======================================--}}

                <div class="input-field col s6">
                    {!!Form::text('air_line_en', null,array('class'=>'validate','id'=>'air_line_en'))!!}
                    <label class="active" for="air_line_en">Air line English</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('air_line_ar', null,array('class'=>'validate','id'=>'air_line_ar'))!!}
                    <label class="active" for="air_line_ar">Air line Arabic</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('air_line_fr', null,array('class'=>'validate','id'=>'air_line_fr'))!!}
                    <label class="active" for="air_line_fr">Air line French</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('air_line_it', null,array('class'=>'validate','id'=>'air_line_it'))!!}
                    <label class="active" for="air_line_it">Air line Itlian</label>
                </div>


                {{--========================nflight Features=======================================--}}


                <div class="input-field col s6">
                    {!!Form::text('inflight_features_en', null,array('class'=>'validate','id'=>'inflight_features_en'))!!}
                    <label class="active" for="inflight_features_en">Inflight Features English</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('inflight_features_ar', null,array('class'=>'validate','id'=>'inflight_features_ar'))!!}
                    <label class="active" for="inflight_features_ar">Inflight Features Arabic</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('inflight_features_fr', null,array('class'=>'validate','id'=>'inflight_features_fr'))!!}
                    <label class="active" for="inflight_features_fr">Inflight Features French</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('inflight_features_it', null,array('class'=>'validate','id'=>'inflight_features_it'))!!}
                    <label class="active" for="inflight_features_it">Inflight Features Itlian</label>
                </div>
                {{--========================fare Features=======================================--}}


                <div class="input-field col s6">
                    {!!Form::text('fare_en', null,array('class'=>'validate','id'=>'fare_en'))!!}
                    <label class="active" for="fare_en">Fare Type English</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('fare_ar', null,array('class'=>'validate','id'=>'fare_ar'))!!}
                    <label class="active" for="fare_ar">Fare Type Arabic</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('fare_fr', null,array('class'=>'validate','id'=>'fare_fr'))!!}
                    <label class="active" for="fare_fr">Fare Type French</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('fare_it', null,array('class'=>'validate','id'=>'fare_it'))!!}
                    <label class="active" for="fare_it">Fare Type Itlian</label>
                </div>
                {{--==========================cancelation====================================--}}
                <div class="input-field col s6">
                    {!!Form::text('cancelation_en', null,array('class'=>'validate','id'=>'cancelation_en'))!!}
                    <label class="active" for="cancelation_en">Cancelation </label>
                </div>


                {{--================================change=================================--}}
                <div class="input-field col s6">
                    {!!Form::text('change_en', null,array('class'=>'validate','id'=>'change_en'))!!}
                    <label class="active" for="change_en">Change </label>
                </div>


                {{--===================================seates&paggages=========================--}}

                <div class="input-field col s6">
                    {!!Form::text('seats_paggages_en', null,array('class'=>'validate','id'=>'seats_paggages_en'))!!}
                    <label class="active" for="seats_paggages_en">seates&paggages English</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('seats_paggages_ar', null,array('class'=>'validate','id'=>'seats_paggages_ar'))!!}
                    <label class="active" for="seats_paggages_ar">seates&paggages Arabic</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('seats_paggages_fr', null,array('class'=>'validate','id'=>'seats_paggages_fr'))!!}
                    <label class="active" for="seats_paggages_fr">seates&paggages French</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('seats_paggages_it', null,array('class'=>'validate','id'=>'seats_paggages_it'))!!}
                    <label class="active" for="seats_paggages_it">seates&paggages Itlian</label>
                </div>

                {{--==========================Base Fare==================--}}

                <div class="input-field col s6">
                    {!!Form::text('base_fare_en', null,array('class'=>'validate','id'=>'base_fare_en'))!!}
                    <label class="active" for="base_fare_en">Base Fare</label>
                </div>


                {{--===================================taxes & fees==========================--}}

                <div class="input-field col s12">
                    {!!Form::text('taxes_fees_en', null,array('class'=>'validate','id'=>'taxes_fees_en'))!!}
                    <label class="active" for="taxes_fees_en">taxes & fees </label>
                </div>

                {{--=========================short cut ===============================================--}}
                <div class="input-field col s12">
                    {!!Form::text('short_cut_en', null,array('class'=>'validate','id'=>'short_cut_en'))!!}
                    <label class="active" for="short_cut_en">sub title English</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::text('short_cut_ar', null,array('class'=>'validate','id'=>'short_cut_ar'))!!}
                    <label class="active" for="short_cut_ar">sub title Arabic</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::text('short_cut_fr', null,array('class'=>'validate','id'=>'short_cut_fr'))!!}
                    <label class="active" for="short_cut_fr">sub title French</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::text('short_cut_it', null,array('class'=>'validate','id'=>'short_cut_it'))!!}
                    <label class="active" for="short_cut_it">sub title Itlian</label>
                </div>

                {{--========================================Description=========================--}}

                <div class="input-field col s12">
                    {!!Form::textarea('description_en', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_en'))!!}
                    <label class="active" for="description_en">Description English</label>
                    <label class="error">{{ $errors->first('description_en') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('description_ar', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_ar'))!!}
                    <label class="active" for="description_ar">Description Arabic</label>
                    <label class="error">{{ $errors->first('description_ar') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('description_fr', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_fr'))!!}
                    <label class="active" for="description_fr">Description French</label>
                    <label class="error">{{ $errors->first('description_fr') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('description_it', null,array('class'=>'materialize-textarea ckeditor','id'=>'description_it'))!!}
                    <label class="active" for="description_it">Description Itlian</label>
                    <label class="error">{{ $errors->first('description_it') }}</label>
                </div>
                {{--=======================Background Title=================================--}}


                <div class="input-field col s6">
                    {!!Form::text('bg_title_en', null,array('class'=>'materialize-textarea','id'=>'bg_title_en'))!!}
                    <label class="active" for="bg_title_en">Background Title English</label>
                    <label class="error">{{ $errors->first('bg_title_en') }}</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('bg_title_ar', null,array('class'=>'materialize-textarea','id'=>'bg_title_ar'))!!}
                    <label class="active" for="bg_title_ar">Background Title Arabic</label>
                    <label class="error">{{ $errors->first('bg_title_ar') }}</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('bg_title_fr', null,array('class'=>'materialize-textarea','id'=>'bg_title_fr'))!!}
                    <label class="active" for="bg_title_fr">Background Title French</label>
                    <label class="error">{{ $errors->first('bg_title_fr') }}</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('bg_title_it', null,array('class'=>'materialize-textarea','id'=>'bg_title_it'))!!}
                    <label class="active" for="bg_title_it">Background Title Itlian</label>
                    <label class="error">{{ $errors->first('bg_title_it') }}</label>
                </div>
                {{--=============================Background Description========================--}}

                <div class="input-field col s6">
                    {!!Form::text('bg_desc_en', null,array('class'=>'materialize-textarea','id'=>'bg_desc_en'))!!}
                    <label class="active" for="bg_desc_en">Background Description English</label>
                    <label class="error">{{ $errors->first('bg_desc_en') }}</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('bg_desc_ar', null,array('class'=>'materialize-textarea','id'=>'bg_desc_ar'))!!}
                    <label class="active" for="bg_desc_ar">Background Description Arabic</label>
                    <label class="error">{{ $errors->first('bg_desc_ar') }}</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('bg_desc_fr', null,array('class'=>'materialize-textarea','id'=>'bg_desc_fr'))!!}
                    <label class="active" for="bg_desc">Background Description French</label>
                    <label class="error">{{ $errors->first('bg_desc_fr') }}</label>
                </div>


                <div class="input-field col s6">
                    {!!Form::text('bg_desc_it', null,array('class'=>'materialize-textarea','id'=>'bg_desc_it'))!!}
                    <label class="active" for="bg_desc">Background Description Itlian</label>
                    <label class="error">{{ $errors->first('bg_desc_it') }}</label>
                </div>


                {{--=======================categories======================--}}
                <div class="input-field col s6">
                    {{

                        Form::select('category_id', $categoriesen, null, ['placeholder' => 'Select category ','class'=>'form-control','id'=>'category_id',])
                        }}
                    <label class="active" for="category">Category </label>
                    <label class="error">{{ $errors->first('category_id') }}</label>
                </div>

                {{--================continents================================--}}


                <div class="input-field col s6">
                    {{

                        Form::select('continent_id', $continentsen, null, ['placeholder' => 'Select continental ','class'=>'form-control','id'=>'continent_id',])
                        }}
                    <label class="active" for="continent">Continental </label>
                    <label class="error">{{ $errors->first('continent_id') }}</label>
                </div>

                {{--============================tags=================================--}}
                <div class="input-field col s6">
                    {{

                      Form::select('tag_id', $tagsen, null, ['placeholder' => 'Select tag ','class'=>'form-control','id'=>'tag_id',])
                      }}
                    <label class="active" for="tag">Tag </label>
                    <label class="error">{{ $errors->first('tag_id') }}</label>
                </div>


                {{--=============================has offer================================--}}
                <div class="input-field col s6">
                    {{  Form::select('has_offer', $has, null, ['placeholder' => 'has offer','class'=>'form-control','id'=>'has_offer',])}}

                    <label for="has_offer">Has Offer</label>
                </div>
                {{--===========================offer====================--}}
                <div id="offer_area" style="display: none;">
                    <div class="input-field col s12">
                        {!!Form::text('offer_en', null,array('class'=>'validate','id'=>'offer_en'))!!}
                        <label class="active" for="offer_en">Offer </label>
                    </div>

                </div>


                {{--==============================--}}


                {{--=======================================meta=======================--}}
                <div class="input-field col s6">
                    {!!Form::text('page_title', null,array('class'=>'validate','id'=>'page_title'))!!}
                    <label class="active" for="page_title">Page Tilte</label>
                </div>
                <div class="input-field col s6">
                    {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
                    <label class="active" for="name">Photo alt</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::text('meta_title', null,array('class'=>'validate','id'=>'meta_title'))!!}
                    <label class="active" for="name">Meta Title</label>
                </div>
                <div class="input-field col s12">
                    {!!Form::text('meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
                    <label class="active" for="desc">Keywords </label>
                    <label class="error">{{ $errors->first('meta_keyword') }}</label>
                </div>

                <div class="input-field col s12">
                    {!!Form::textarea('meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
                    <label class="active" for="meta_description">Meta Description </label>
                    <label class="error">{{ $errors->first('meta_description') }}</label>
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

</div>


<script>


</script>

@include('admin.layouts.map_edit')
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
