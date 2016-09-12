<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederDogs2 extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->renameColumn('category', 'category_id');
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->renameColumn('category_id', 'category');
        });
    }
}
