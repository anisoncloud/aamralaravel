<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'post_title',
        'post_short_description',
        'post_content',
        'post_featured_image',
        'category_id',
        'publication_status'
        ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

   /* public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }*/

}
