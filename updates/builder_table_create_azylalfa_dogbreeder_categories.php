<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAzylalfaDogbreederCategories extends Migration
{
    public function up()
    {
        Schema::create('azylalfa_dogbreeder_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->text('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('azylalfa_dogbreeder_categories');
    }
}
