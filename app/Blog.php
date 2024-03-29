<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; //move to trash

class Blog extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'body'];

    public function category(){
    	return $this->belongsToMany(Category::class);	
    }
}
