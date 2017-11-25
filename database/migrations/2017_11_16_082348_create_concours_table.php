<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre_concours');
            $table->string('description_concours');
            $table->string('avatar')->default('actu.jpg');
            $table->text('contenu_concours');
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
        Schema::dropIfExists('concours');
    }
}
