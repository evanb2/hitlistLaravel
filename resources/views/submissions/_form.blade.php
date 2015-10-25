<!-- Form -->
        <div class="form-group" id="div_content_type">
            {!! Form::label('content_type', 'Content Type: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                <label class="radio-inline">
                    {!! Form::radio('content_type', 'PL', ['value' => 'PL']) !!}PL
                </label>
                <label class="radio-inline">
                    {!! Form::radio('content_type', 'VD', ['value' => 'VD']) !!}VD
                </label>
            </div>
        </div>

        <div class="form-group" id="div_label_name">
            {!! Form::label('label_name', 'Label Name: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('label_name', null, ['class' => 'form-control', 'id' => 'label_name']) !!}
            </div>
        </div>

        <div class="form-group" id="div_upc_ean">
            {!! Form::label('upc_ean', 'UPC/EAN: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('upc_ean', null, ['class' => 'form-control', 'id' => 'upc_ean', 'placeholder' => '123456789012']) !!}
                <div class="alert alert-success" role="alert" id="valid">That should work!</div>
                <div class="alert alert-danger" role="alert" id="invalid">The UPC/EAN must contain only numbers and be 12 or 13 integers in length.</div>
            </div>
        </div>

        <div class="form-group" id="div_artist_name">
            {!! Form::label('artist_name', 'Artist Name: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                <input class="form-control" type="text" name="artist_name" id="artist_name" size="50" required>
            </div>
        </div>
