<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concours extends Model
{
    protected $fillable = ['titre_concours','description_concours','avatar','contenu_concours','category_id','admins_id_pub'];


}
