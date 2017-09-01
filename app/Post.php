<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'category_id',
        'photo_id',
        'body'

    ];


    public function user(){

        $this->belongsTo('App\user');
    }



    public function photo(){

        $this->belongsTo('App\Photo');
    }


    public function category(){

        $this->belongsTo('App\Post');
    }
}
