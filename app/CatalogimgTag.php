<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogimgTag extends Model
{
    protected $table = "catalogimg_tags";

    protected $fillable = ['name'];

    public function articles(){
		return $this->belongsToMany('App\CatalogimgArticle');
	}

	public function scopeSearch($query, $name)
	{
		return $query->where('name', 'LIKE', "%$name%");
	}

	public function scopeSearchTag($query, $name)
    {
    	return $query->where('name','=', $name);
	}
	
	public function scopeSearchname($query, $name)
    {
        return $query->where('name','LIKE', "%$name%");
    }


}	
