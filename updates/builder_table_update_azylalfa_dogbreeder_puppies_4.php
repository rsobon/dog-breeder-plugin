<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederPuppies4 extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
