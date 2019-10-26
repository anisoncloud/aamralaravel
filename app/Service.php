<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable =[
        'service_title',
        'service_short_description',
        'service_content',
        'service_url',
        'service_featured_image',
        'user_id',
        'publication_status'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

}


