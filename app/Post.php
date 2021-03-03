<?php

namespace App;

Use App\User;
use App\Update;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function updates(){
        return $this->belongsTo(Update::class);
    }

}
