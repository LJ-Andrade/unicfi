<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogimgCategory extends Model
{
    protected $table = "catalogimg_categories";

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany('App\CatalogimgArticle', 'category_id');
    }

    public function scopeSearchCategory($query, $name)
    {
    	return $query->where('name','=', $name);
    }
    
    public function scopeSearchname($query, $name)
    {
        return $query->where('name','LIKE', "%$name%");
    }
}
