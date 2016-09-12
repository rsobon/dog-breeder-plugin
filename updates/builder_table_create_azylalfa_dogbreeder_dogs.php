<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAzylalfaDogbreederDogs extends Migration
{
    public function up()
    {
        Schema::create('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->date('birth');
            $table->string('titles')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('azylalfa_dogbreeder_dogs');
    }
}
