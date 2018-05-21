<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogimgArticle extends Model
{
    protected $table = "catalogimg_articles";

    protected $fillable = ['name', 'category_id', 'user_id', 'thumb', 'status', 'slug'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
    	return $this->belongsTo('App\CatalogimgCategory');
    }

    public function images(){
    	return $this->hasMany('App\CatalogimgImage', 'article_id');
    }

    public function tags(){
    	return $this->belongsToMany('App\CatalogimgTag');
    }

    public function scopeActive($query){
        return $query->where('status', '1');
    }

    public function scopeSearch($query, $name=null)
    {   
        
        if($name != null)
        {
            return $query
            ->where('name', 'like', "%" . $name . "%");
        }
    }

}
