<?php

namespace App;

Use App\User;
Use App\Post;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function post(){
        return $this->belongsTo(post::class);
    }
}
