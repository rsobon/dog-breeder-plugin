<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAzylalfaDogbreederAncestors extends Migration
{
    public function up()
    {
        Schema::create('azylalfa_dogbreeder_ancestors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('azylalfa_dogbreeder_ancestors');
    }
}
