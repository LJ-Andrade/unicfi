<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogimgImage extends Model
{
    protected $table = "catalogimg_images";

    protected $fillable = ['name', 'article_id'];

	public function article()
	{
	   	return $this->belongsTo('App\CatalogimgArticle');
	}
}
