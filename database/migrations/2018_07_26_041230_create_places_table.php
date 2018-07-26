<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->text('placename');
            $table->text('category');
            $table->text('location');
            $table->text('city');
            $table->text('state');
            $table->text('placeimagemain');
            $table->longText('placeimages')->nullable();;
            $table->longText('information');
            $table->longText('importance')->nullable();;
            $table->tinyInteger('howknow');
            $table->text('fullname')->nullable();;
            $table->text('contactno')->nullable();;
            $table->text('email')->nullable();
            $table->tinyInteger('status');
            $table->tinyInteger('views')->nullable();
            $table->tinyInteger('bywhom')->comment('1-user, 2-admin');
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
        Schema::dropIfExists('places');
    }
}
