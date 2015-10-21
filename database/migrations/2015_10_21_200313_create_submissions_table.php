<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('content_type');
            $table->string('label_name');
            $table->integer('content_provider');
            $table->string('upc_ean');
            $table->string('artist_name');
            $table->string('content_title');
            $table->string('media_type');
            $table->string('genre');
            $table->string('format');
            $table->string('storedate');
            $table->string('release_type');
            $table->string('new_artist');
            $table->string('instant_grat');
            $table->string('group_name');
            $table->integer('national_forecast');
            $table->integer('marketshare');
            $table->integer('itunes_forecast');
            $table->integer('release_sales');
            $table->text('sales_history');
            $table->integer('development_cost');
            $table->text('description');
            $table->string('extras');
            $table->string('comments');
            $table->text('marketing_drivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('submissions');
    }
}
