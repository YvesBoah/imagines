<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MercurySeries\Flashy\Flashy;

class category extends Model
{

	 protected $fillable = ['id','slug','titre_category'];
    // Liaison entre les "" articles "" et les catégories

    public function event()
    {
        return $this->hasMany('App\Models\Event');
    }
    // hasMany (une catégorie pour plusieurs articles)



}
