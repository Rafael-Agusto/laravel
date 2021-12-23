<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    protected $load = ['user'];

    protected $guarded=[
        'id'
    ];
    
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
