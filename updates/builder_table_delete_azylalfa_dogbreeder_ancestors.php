<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAzylalfaDogbreederAncestors extends Migration
{
    public function up()
    {
        Schema::dropIfExists('azylalfa_dogbreeder_ancestors');
    }
    
    public function down()
    {
        Schema::create('azylalfa_dogbreeder_ancestors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
        });
    }
}
