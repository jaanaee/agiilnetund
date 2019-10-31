<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public  function  commentator(){
        return $this->belongsTo(Commentator::class);
    }
}
