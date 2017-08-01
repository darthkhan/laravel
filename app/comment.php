<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    function article(){
    	return $this->belongsTo('App\Article', 'id', 'blog_id');
    }
}
