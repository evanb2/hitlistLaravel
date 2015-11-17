@extends('submissions.master')

@section('content')

    <h4 style="text-align: center;"> Please Review before you submit </h4><br>
    <h4 style="text-align: center;">Click any field to edit, then press Enter or click the Update button.</h4>

    <hr>
    <form class="form-horizontal">

        <div class="form-group" id="edit_content_type">
            <label class="col-sm-4">Content Type: </label>
            <div class="col-sm-8">
                <span class="preview" id="content_type">{{ $submission->content_type }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_label_name">
            <label class="col-sm-4">Label Name: </label>
            <div class="col-sm-8">
                <span class="preview" id="label_name">{{ $submission->label_name }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_upc_ean">
            <label class="col-sm-4">UPC/EAN: </label>
            <div class="col-sm-8">
                <span class="preview" id="upc_ean">{{ $submission->upc_ean }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_artist_name">
            <label class="col-sm-4">Artist Name: </label>
            <div class="col-sm-8">
                <span class="preview" id="artist_name">{{ $submission->artist_name }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_content_title">
            <label class="col-sm-4">Content Title: </label>
            <div class="col-sm-8">
                <span class="preview" id="content_title">{{ $submission->content_title }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_genre">
            <label class="col-sm-4">Genre: </label>
            <div class="col-sm-8">
                <span class="preview" id="genre">{{ $submission->genre }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_format">
            <label class="col-sm-4">Format: </label>
            <div class="col-sm-8">
                <span class="preview" id="format">{{ $submission->format }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_storedate">
            <label class="col-sm-4">Store Date: </label>
            <div class="col-sm-8">
                <span class="preview" id="storedate">{{ $submission->storedate }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_release_type">
            <label class="col-sm-4">Release Type: </label>
            <div class="col-sm-8">
                <span class="preview" id="release_type">{{ $submission->release_type }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_new_artist">
            <label class="col-sm-4">New Artist: </label>
            <div class="col-sm-8">
                <span class="preview" id="new_artist">{{ $submission->new_artist }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_instant_grat">
            <label class="col-sm-4">Instant Grat: </label>
            <div class="col-sm-8">
                <span class="preview" id="instant_grat">{{ $submission->instant_grat }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_group_name">
            <label class="col-sm-4">Group: </label>
            <div class="col-sm-8">
                <span class="preview" id="group_name">{{ $submission->group_name }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_national_forecast">
            <label class="col-sm-4">Week 1 National Forecast: </label>
            <div class="col-sm-8">
                <span class="preview" id="national_forecast">${{ $submission->national_forecast }}.00</span>
            </div>
        </div>

        <div class="form-group" id="edit_marketshare">
            <label class="col-sm-4">Projected Week 1 iTunes Market Share: </label>
            <div class="col-sm-8">
                <span class="preview" id="marketshare">{{ $submission->marketshare }}%</span>
            </div>
        </div>

        <div class="form-group" id="edit_itunes_forecast">
            <label class="col-sm-4">iTunes Week 1 Forecast: </label>
            <div class="col-sm-8">
                <span class="preview" id="itunes_forecast">${{ $submission->itunes_forecast }}.00</span>
            </div>
        </div>

        <div class="form-group" id="edit_release_sales">
            <label class="col-sm-4">Cumulative New Release Single Sales: </label>
            <div class="col-sm-8">
                <span class="preview" id="release_sales">${{ $submission->release_sales }}.00</span>
            </div>
        </div>

        <div class="form-group" id="edit_sales_history">
            <label class="col-sm-4">Sales History: </label>
            <div class="col-sm-8">
                <span class="preview" id="sales_history">{{ $submission->sales_history }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_development_cost">
            <label class="col-sm-4">Developing Artist Cost: </label>
            <div class="col-sm-8">
                <span class="preview" id="development_cost">${{ $submission->development_cost }}.00</span>
            </div>
        </div>

        <div class="form-group" id="edit_description">
            <label class="col-sm-4">Description: </label>
            <div class="col-sm-8">
                <span class="preview" id="description">{{ $submission->description }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_extras">
            <label class="col-sm-4">LP/Extras: </label>
            <div class="col-sm-8">
                <span class="preview" id="extras">{{ $submission->extras }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_comments">
            <label class="col-sm-4">Comments: </label>
            <div class="col-sm-8">
                <span class="preview" id="comments">{{ $submission->comments }}</span>
            </div>
        </div>

        <div class="form-group" id="edit_marketing_drivers">
            <label class="col-sm-4">Marketing Drivers: </label>
            <div class="col-sm-8">
                <span class="preview" id="marketing_drivers">{{ $submission->marketing_drivers }}</span>
            </div>
        </div>

    </form>


@stop
