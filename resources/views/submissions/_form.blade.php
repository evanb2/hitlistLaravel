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

            <div class="form-group" id="div_label_name">
                {!! Form::label('label_name', 'Label Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('label_name', null, ['class' => 'form-control', 'id' => 'label_name']) !!}
                </div>
            </div>

        </div>
