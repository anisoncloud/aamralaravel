<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = [
    	'page_title',
    	'page_content',
    	'page_short_description',
    	'featured_image',
    	'publication_status'
    ];
}
