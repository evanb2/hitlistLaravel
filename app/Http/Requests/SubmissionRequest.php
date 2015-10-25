<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SubmissionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content_type' => 'required',
            'label_name' => 'required',
            'upc_ean' => 'required',
            'artist_name' => 'required',
            'content_title' => 'required',
            'genre' => 'required',
            'format' => 'required',
            'storedate' => 'required',
            'release_type' => 'required',
            'new_artist' => 'required',
            'instant_grat' => 'required',
            'group_name' => 'required',
            'national_forecast' => 'required',
            'marketshare' => 'required',
            'itunes_forecast' => 'required',
            'release_sales' => 'required',
            'sales_history' => 'required',
            'development_cost' => 'required',
            'description' => 'required',
            'extras' => 'required',
            'comments' => 'required',
            'marketing_drivers' => 'required'
        ];
    }
}
