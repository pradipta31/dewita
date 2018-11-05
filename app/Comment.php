<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'article_id', 'name', 'email', 'comment', 'status'
    ];

    public function Article(){
        return $this->belongsTo('App\Article');
    }
}
