<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable = [
    	'banner_title',
    	'banner_featured_image',
    	'banner_short_description',
    	'banner_link',
    	'publication_status'
    ];
}
