<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $fillable = ['titre_publication','description_publication','avatar','contenu_publication','category_id','admins_id_pub'];

  // Liaison entre les articles et les "" catégories ""
  // belongsTo (un article pour une categorie)
  	public function category()
  	{
  		return $this->belongsTo('App\category');
  	}

    public function Admin()
    {
      return $this->belongsTo('App\Admin');
    }
  	// public function scopeArticlespublier($query)
  	// {
  	// 	return $query->;
  	// }

// // Retoune la clé primaire 

//   public function getRouteKeyName()
//   {
//   	return 'titre_publication';
//   }




}
