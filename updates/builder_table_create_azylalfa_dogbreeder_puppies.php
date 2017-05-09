<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAzylalfaDogbreederPuppies extends Migration
{
    public function up()
    {
        Schema::create('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->date('published_at')->nullable();
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('azylalfa_dogbreeder_puppies');
    }
}
