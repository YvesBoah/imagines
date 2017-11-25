<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres__stages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre_stage');
            $table->string('description_stage');
            $table->string('avatar')->default('actu.jpg');
            $table->text('contenu_stage');
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->integer('admins_id_pub')->unsigned()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres__stages');
    }
}
