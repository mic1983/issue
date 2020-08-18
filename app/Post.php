<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
        'title', 'user_id',
    ];
    public function profession(){
    	return $this->hasOne('App\Profession');
    }

    public function postable()
    {
        return $this->morphTo();
    }

    
}
