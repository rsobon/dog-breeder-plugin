<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederDogs4 extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->integer('parent_male_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->integer('parent_male_id')->nullable(false)->change();
        });
    }
}
