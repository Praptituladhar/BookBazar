<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductentryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productentry', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('category_name');
            $table->integer('previous_price');
            $table->integer('current_price');
            $table->string('description');
            $table->string('short_description');
            $table->string('availability');
            $table->integer('quantity');
            $table->integer('color');
            $table->string('basket_description');
            $table->integer('base');
            $table->integer('total_height');
            $table->string('cushion_color');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
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
        Schema::dropIfExists('productentry');
    }
}
