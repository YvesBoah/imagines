<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offres_Stage extends Model
{
  protected $fillable = ['titre_stage','description_stage','avatar','contenu_stage','category_id','admins_id_pub'];

}
