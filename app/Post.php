<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;
use App\Traits\DateTranslator;

class Post extends Model
{
	use Taggable, DateTranslator;

    protected $fillable = [
    	'user_id', 'category_id','name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
