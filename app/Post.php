<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source'   => 'title',
                'onUpdate' => true,
            ]
        ];
    }




    protected $fillable=[
        'title',
        'category_id',
        'photo_id',
        'body'

    ];


    public function user(){

        return $this->belongsTo('App\User');
    }



    public function photo(){

        return $this->belongsTo('App\Photo');
    }


    public function category(){

        return $this->belongsTo('App\Category');
    }


    public function comments(){

        return $this->hasMany('App\Comment');

    }
}
