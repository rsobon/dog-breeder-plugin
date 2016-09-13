<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederDogs3 extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->integer('parent_male_id');
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->dropColumn('parent_male_id');
        });
    }
}
