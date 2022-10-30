<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductentryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productentry', function(Blueprint $table) {
            $table->string('author');
            $table->integer('isbn');
            $table->string('format');
            $table->string('language');
            $table->date('release_date');
            $table->string('publisher');
            $table->integer('pages');
            $table->string('condition');
            $table->dropColumn('short_description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
