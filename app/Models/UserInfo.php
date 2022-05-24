<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = ['user_id','date_of_birth','address'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
