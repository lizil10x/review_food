<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $table = "comments";
    protected $fillable = ['user_id','post_id','vote','comment'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function post(){
        return $this->belongsTo('App\Post','post_id', 'id');
    }
}
