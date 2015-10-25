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
                {!! Form::text('artist_name', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group" id="div_content_title">
            {!! Form::label('content_title', 'Content Title: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('content_title', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group" id="div_genre">
            {!! Form::label('genre', 'Genre: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                <select class="form-control" id="genre" name="genre" type="text" required>
                    <option value="" selected>-Please Select-</option>
                    <option value="Alternative">Alternative</option>
                    <option value="Blues">Blues</option>
                    <option value="Children's Music">Children's Music</option>
                    <option value="Classical">Classical</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Country">Country</option>
                    <option value="Dance">Dance</option>
                    <option value="Electronic">Electronic</option>
                    <option value="Singer/Songwriter">Singer/Songwriter</option>
                    <option value="Hip Hop/Rap">Hip Hop/Rap</option>
                    <option value="Holiday">Holiday</option>
                    <option value="Inspirational">Inspirational</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Fitness & Workout">Fitness & Workout</option>
                    <option value="Pop">Pop</option>
                    <option value="R&B/Soul">R&B/Soul</option>
                    <option value="Rock">Rock</option>
                    <option value="Soundtrack">Soundtrack</option>
                    <option value="World">World</option>
                    <option value="Latin">Latin</option>
                    <option value="Alternativo & Rock Latino">Alternativo & Rock Latino</option>
                    <option value="Baladas y Boleros">Baladas y Boleros</option>
                    <option value="Brazilian">Brazilian</option>
                    <option value="Latin Jazz">Latin Jazz</option>
                    <option value="Pop Latino">Pop Latino</option>
                    <option value="Reggaeton y Hip-Hop">Reggaeton y Hip-Hop</option>
                    <option value="Regional Mexicano">Regional Mexicano</option>
                    <option value="Salsa y Tropical">Salsa y Tropical</option>
                    <option value="Audiobooks Latino">Audiobooks Latino</option>
                    <option value="Podcasts Latino">Podcasts Latino</option>
                </select>
            </div>
        </div>

        <div class="form-group" id="div_format">
            {!! Form::label('format', 'Format: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                <select class="form-control" id="format" name="format" type="text" required>
                    <option value="" selected>-Please Select-</option>
                    <option value="Album">Album</option>
                    <option value="V-Album">V-Album</option>
                    <!-- <option value="Audiobook">Audiobook</option> -->
                    <option value="EP">EP</option>
                    <!-- <option value="Film">Film</option> -->
                    <!-- <option value="Ringtones">Ringtones</option> -->
                    <!-- <option value="Music Video">Music Video</option> -->
                    <!-- <option value="Mobile Software Application">Mobile Software Application</option> -->
                    <!-- <option value="Playlist">Playlist</option> -->
                    <!-- <option value="Podcast">Podcast</option> -->
                    <!-- <option value="Concert Film">Concert Film</option> -->
                    <option value="Single">Single</option>
                    <option value="V-Single">V-Single</option>
                </select>
            </div>
        </div>

        <div class="form-group" id="div_storedate">
            {!! Form::label('storedate', 'Storedate: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9" id="datepicker">
                <div class="input-group date">
                    {!! Form::text('storedate', null, ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD']) !!}
                    <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
                <div class="alert alert-success" role="alert" id="valid_date">Congratulatons! Don't forget to plan your release party!</div>
                <div class="alert alert-danger" role="alert" id="invalid_date">
                    The release date must be at least 2 business weeks from today so iTunes has time to process.
                </div>
            </div>
        </div>

        <div class="form-group" id="div_release_type">
            <label class="col-sm-3 control-label" for="release_type">Type: </label>
            <div class="col-sm-9">
                <select class="form-control" id="release_type" name="release_type" type="text" required>
                    <option value="" selected>-Please Select-</option>
                    <option value="New Release">New Release</option>
                    <option value="Celebrity Playlist">Celebrity Playlist</option>
                    <option value="Excl. Pre-Release">Excl. Pre-Release</option>
                    <option value="Exclusive">Exclusive</option>
                    <option value="Just Added">Just Added</option>
                    <option value="Pre-Release">Pre-Release</option>
                    <option value="Pre-order">Pre-order</option>
                    <option value="Remix">Remix</option>
                </select>
            </div>
        </div>

        <div class="form-group" id="div_new_artist">
            <label class="col-sm-3 control-label" for="new_artist">New Artist: </label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="new_artist" value="False" checked="true" required>False
                </label>
                <label class="radio-inline">
                    <input type="radio" name="new_artist" value="True">True
                </label>
            </div>
        </div>

        <div class="form-group" id="div_instant_grat">
            <label class="col-sm-3 control-label" for="instant_grat">Instant Grat: </label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="instant_grat" value="False" checked="true" required>False
                </label>
                <label class="radio-inline">
                    <input type="radio" name="instant_grat" value="True">True
                </label>
            </div>
        </div>

        <div class="form-group" id="div_group_name">
            <label class="col-sm-3 control-label" for="group_name">Group: </label>
            <div class="col-sm-9">
                <select class="form-control" id="group_name" name="group_name" type="text" required>
                    <option value="" selected>-Please Select-</option>
                    <option value="Indie">Indie</option>
                    <option value="EMI">EMI</option>
                    <option value="Sony">Sony</option>
                    <option value="Universal">Universal</option>
                    <option value="WMG">WMG</option>
                </select>
            </div>
        </div>

        <div class="form-group" id="div_national_forecast">
            <label class="col-sm-3 control-label" for="national_forecast">Week 1 National Forecast: </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input class="form-control" type="number" name="national_forecast" id="national_forecast" placeholder="100" required>
                    <div class="input-group-addon">.00</div>
                </div>
                <span class="help-block"> *required for any title being pitched for featuring on Main/Music Main</span>
            </div>
        </div>

        <div class="form-group" id="div_marketshare">
            <label class="col-sm-3 control-label" for="marketshare">Projected Week 1 iTunes Market Share: </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <div class="input-group-addon">(percentage 1-100%)</div>
                    <input class="form-control" type="number" min="1" max="100" name="marketshare" id="marketshare" placeholder="21" required>
                    <div class="input-group-addon">%</div>
                </div>
                <span class="help-block"> *required for any title being pitched for featuring on Main/Music Main</span>
            </div>
        </div>

        <div class="form-group" id="div_itunes_forecast">
            <label class="col-sm-3 control-label" for="itunes_forecast">iTunes Week 1 Forecast: </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input class="form-control" type="number" name="itunes_forecast" id="itunes_forecast" placeholder="100" required>
                    <div class="input-group-addon">.00</div>
                </div>
                <span class="help-block"> *required for any title being pitched for featuring on Main/Music Main</span>
            </div>
        </div>

        <div class="form-group" id="div_release_sales">
            <label class="col-sm-3 control-label" for="release_sales">Cumulative New Release Single Sales: </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input class="form-control" type="number" name="release_sales" id="release_sales" placeholder="100" required>
                    <div class="input-group-addon">.00</div>
                </div>
            </div>
        </div>

        <div class="form-group" id="div_sales_history">
            <label class="col-sm-3 control-label" for="sales_history">Sales History: </label>
            <div class="col-sm-9">
                <textarea class="form-control" type="text" name="sales_history" id="sales_history" rows="10" cols="110" spellcheck="true" maxlength="500"
                          placeholder="Last album Week 1 iTunes Sales: 5,000. LTD last two albums: Album 1: 30,000, 16% share, released 2008, Album 2: 45,000, 20% share, released 2010" required></textarea>
                          <span class="help-block">** Sales History should include: First week iTunes sales and market share for last album, as well as LTD iTunes sales, market share, and release dates for the last two releases (when applicable)</span>
            </div>
        </div>

        <div class="form-group" id="div_development_cost">
            <label class="col-sm-3 control-label" for="development_cost">Developing Artist Cost: </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input class="form-control" type="number" name="development_cost" id="development_cost" placeholder="100" required>
                    <div class="input-group-addon">.00</div>
                </div>
            </div>
        </div>

        <div class="form-group" id="div_description">
            <label class="col-sm-3 control-label" for="description">Description: </label>
            <div class="col-sm-9">
                <textarea class="form-control" type="text" name="description" id="description" rows="10" cols="110" spellcheck="true" maxlength="500"
                          placeholder="*Brief* Album Description + key facts (Top 10 CHR, GMA/Ellen performances street week, tour begins in August, etc.)" required></textarea>
            </div>
        </div>

        <div class="form-group" id="div_extras">
            <label class="col-sm-3 control-label" for="extras">LP/Extras: </label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="extras" value="LP" checked="true" required>LP
                </label>
                <label class="radio-inline">
                    <input type="radio" name="extras" value="Extras">Extras
                </label>
            </div>
        </div>

        <div class="form-group" id="div_comments">
            <label class="col-sm-3 control-label" for="comments">Comments: </label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="comments" value="True" checked="true">Mastered For iTunes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="comments" value="False" required>Not Mastered For iTunes
                </label>
            </div>
            <div class="col-sm-offset-3 col-sm-9">
                <span class="help-block">*Only use this field to indicate Mastered for iTunes Products ("MFiT")</span>
            </div>
        </div>

        <div class="form-group" id="div_marketing_drivers">
            <label class="col-sm-3 control-label" for="marketing_drivers">Marketing Drivers: </label>
            <div class="col-sm-9">
                <textarea class="form-control" type="text" name="marketing_drivers" id="marketing_drivers" rows="10" cols="110" spellcheck="true" maxlength="500"
                          placeholder="For EDITORIALLY supported releases, please outline any significant iTunes-specific marketing: Dedicated e-mail blast to 'X' # of fans, $xx key word buy, exclusive banner campaign, radio/TV spot tagging in 'X' key markets, print ad(s) with exclusive tag using iTunes custom URL, in-theater ad tagging, TV or radio on-air mentions either via voiceover or chyron, iTunes 360 participation, etc."  required></textarea>
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
