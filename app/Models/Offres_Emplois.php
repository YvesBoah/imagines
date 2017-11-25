<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offres_Emplois extends Model
{
     protected $fillable = ['titre_emplois','description_emplois','avatar','contenu_emplois',
     'category_id','admins_id_pub'];


}
