<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'content_type',
        'label_name',
        'content_provider',
        'upc_ean',
        'artist_name',
        'content_title',
        'media_type',
        'genre',
        'format',
        'storedate',
        'release_type',
        'new_artist',
        'instant_grat',
        'group_name',
        'national_forecast',
        'marketshare',
        'itunes_forecast',
        'release_sales',
        'sales_history',
        'development_cost',
        'description',
        'extras',
        'comments',
        'marketing_drivers'
    ];
}
