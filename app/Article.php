<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'user_id','title', 'slug', 'file','desc', 'place', 'status'
    ];

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Comment(){
        return $this->hasOne('App\Comment');
    }

}
