<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
    protected $table = 'articles';
	protected $hidden = ['created_at','updated_at'];
	protected $fillable = [
		'id',
		'title',
		'description'
	];
}
